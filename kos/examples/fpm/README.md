# FPM for KasperskyOS

> FastCGI Process Manager (FPM) is ported to KasperskyOS.

## Table of contents
- [FPM for KasperskyOS](#fpm-for-kasperskyos)
  - [Table of contents](#table-of-contents)
  - [Solution overview](#solution-overview)
    - [List of programs](#list-of-programs)
    - [Solution scheme](#solution-scheme)
    - [Initialization description](#initialization-description)
    - [Security policy description](#security-policy-description)
  - [Getting started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Building the example](#building-the-example)
  - [Usage](#usage)

## Solution overview

### List of programs

* `NetInit`—Program that initializes the network interface `en0`
* `Fpm`—FastCGI Process Manager (FPM) ported to KasperskyOS
* `VfsNet`—Networking program
* `Dhcpcd`—DHCP client
* `VfsRamFs`—File system program
* `BSP`—Driver for configuring pin multiplexing parameters (pinmux)
* `GPIO`—GPIO support driver
* `RAMDisk`—Block device driver of a virtual drive in RAM

[⬆ Back to Top](#Table-of-contents)

### Solution scheme

```mermaid
graph TB
  classDef Ksp fill:#006d5d, stroke:#006d5d, color:white;
  classDef SubKOS fill:#e8e8e8, stroke:#e8e8e8;
  subgraph KOS ["KasperskyOS"]
    node3(FPM for KasperskyOS)
  end
  node1(Browser)<--->|"HTTP"|node2("nginx web server")
  node3<--->|"PHP Requests"|node2<--->|"Static data<br>(images, CSS, etc.)"|node4[(HDD)]
  class node3 Ksp
  class KOS SubKOS
```

[⬆ Back to Top](#Table-of-contents)

### Initialization description

Statically created IPC channels:

* `netinit.NetInit` → `kl.VfsRamFs`
* `netinit.NetInit` → `kl.VfsNet`
* `php.Fpm` → `kl.VfsRamFs`
* `php.Fpm` → `kl.VfsNet`
* `kl.VfsNet` → `kl.drivers.BSP`
* `kl.VfsNet` → `kl.drivers.GPIO`
* `kl.rump.Dhcpcd` → `kl.VfsRamFs`
* `kl.rump.Dhcpcd` → `kl.VfsNet`
* `kl.VfsRamFs` → `kl.drivers.RAMDisk`

The [`./einit/src/init.yaml.in`](einit/src/init.yaml.in) template is used to automatically generate a part of the solution initialization description file `init.yaml`. For more information about the `init.yaml.in` template file, see the [KasperskyOS Community Edition Online Help](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.3&customization=KCE&helpid=cmake_yaml_templates).

[⬆ Back to Top](#Table-of-contents)

### Security policy description

The [`./einit/src/security.psl.in`](einit/src/security.psl.in) template is used to automatically generate part of the solution security policy description file `security.psl`. For more information about the `security.psl.in` file, see
[KasperskyOS Community Edition Online Help](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.3&customization=KCE&helpid=cmake_psl_templates).

[⬆ Back to Top](#Table-of-contents)

## Getting started

### Prerequisites

1. Make sure that you have installed the latest versions of the following programs:

    * [KasperskyOS Community Edition SDK](https://os.kaspersky.com/development/)
    * [PHP Interpreter for KasperskyOS](https://github.com/TSDC-TEAM/php-src-kos)
1. Install and configure the nginx web server:
    * Run the following command with root privileges to install the nginx:
    ```
    $ sudo apt install nginx
    ```
    * Create a configuration file `kos-fpm.conf` with the following content:
    ```
    server {
      listen       0.0.0.0:80;
      server_name  localhost;
      root /;

      location ~ \.php$
      {
        fastcgi_pass <ip>:8000;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
      }
    }
    ```
    * To run the example on QEMU: ip is localhost (127.0.0.1), to run on the board ip is specified in the log at startup.
    * Copy the file `kos-fpm.conf` to the directory `/etc/nginx/sites-enabled/`. If the directory `/etc/nginx/sites-enabled/` contains a `default.conf` file, delete the file.
    * Reload nginx using the following command:
    ```
    $ sudo nginx -s reload
    ```
1. Set the environment variable `SDK_PREFIX` to `/opt/KasperskyOS-Community-Edition-<version>`, where `version` is the version of the KasperskyOS Community Edition SDK that you installed. To do this, run the following command:
   ```
   $ export SDK_PREFIX=/opt/KasperskyOS-Community-Edition-<version>
   ```

[⬆ Back to Top](#Table-of-contents)

### Building the example

The FPM for KasperskyOS is built using the CMake build system, which is provided in the KasperskyOS Community Edition SDK.

To build an example to run on QEMU, go to the directory with the example and run the following command:
```
$ ./cross-build.sh qemu
```
To build an example to run on a Raspberry Pi 4 B or Radxa ROCK 3A, use the following command:
```
$ ./cross-build.sh hw
```
Running `cross-build.sh` creates a KasperskyOS-based solution image that includes the example. The `kos-qemu-image` or `kos-image` solution image is located in the `./build/einit` directory.

[./netinit/CMakeLists.txt](netinit/CMakeLists.txt)—CMake commands for building the `NetInit` program.

[./einit/CMakeLists.txt](einit/CMakeLists.txt)—CMake commands for building the `Einit` program and the solution image.

[./CMakeLists.txt](CMakeLists.txt)—CMake commands for building the solution.

[⬆ Back to Top](#Table-of-contents)

## Usage

1. To run the example on QEMU, go to the directory with the FPM example and run the following command:
   ```
   $ ./cross-build.sh qemu
   ```
   For more information about running example on Raspberry Pi 4 B or Radxa ROCK 3A see the following [link](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.3&customization=KCE&helpid=running_sample_programs_rpi).
1. Wait until a message like this appears in the standard output:
    ```
    [DD-MMM-YYYY HH:MM:SS.MMMMMM] NOTICE: pid 67, fpm_init(), line 83: fpm is running, pid 67
    ```
1. Open the link <http://<ip>/ping.php> in your browser. The ip is localhost, if you run the example on QEMU. If you run the example on Raspberry Pi 4 B or Radxa ROCK 3A, ip is listed in the startup log.
1. The page with the title "PHP test page" and plain text "Hello, World!" should open.

[⬆ Back to Top](#Table-of-contents)
