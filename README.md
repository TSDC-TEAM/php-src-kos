# KasperskyOS modification of PHP Interpreter

> This version of PHP Interpreter (Zend) is adapted for KasperskyOS. The PHP Interpreter operates in FastCGI mode.

## What is a PHP Interpreter for KasperskyOS?

The PHP Interpreter for KasperskyOS is based on the [PHP-8.2](https://github.com/php/php-src/tree/PHP-8.2). Please refer to [README.md](https://github.com/php/php-src/blob/master/README.md) for more information about the original PHP Interpreter not related to this project.

The PHP Interpreter for KasperskyOS has the following limitations:

* Currently, subprocess creation isn't available in KasperskyOS Community Edition SDK. All client requests to the PHP Interpreter are processed sequentially: a new request is executed only when a previous request has finished processing.

For additional details on KasperskyOS, including its limitations and known issues, please refer to the [KasperskyOS Community Edition Online Help](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.4&customization=KCE&helpid=community_edition).

## Table of contents

- [KasperskyOS modification of PHP Interpreter](#kasperskyos-modification-of-php-interpreter)
  - [What is a PHP Interpreter for KasperskyOS?](#what-is-a-php-interpreter-for-kasperskyos)
  - [Table of contents](#table-of-contents)
  - [Getting started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Building the PHP Interpreter](#building-the-php-interpreter)
    - [Installing and removing the PHP Interpreter](#installing-and-removing-the-php-interpreter)
  - [Usage](#usage)
    - [Examples](#examples)
  - [Testing the PHP Interpreter](#testing-the-php-interpreter)
  - [Acknowledgment](#acknowledgment)
  - [Trademarks](#trademarks)
  - [Contributing](#contributing)
  - [License](#license)

## Getting started

### Prerequisites

1. Confirm that your host system meets all the
[System requirements](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.4&customization=KCE&helpid=system_requirements)
listed in the KasperskyOS Community Edition Developer's Guide.
1. [Install](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.4&customization=KCE&helpid=sdk_install_and_remove)
the KasperskyOS Community Edition SDK version 1.4. You can download it for free from
[os.kaspersky.com](https://os.kaspersky.com/development/).
1. Copy project source files to your home directory. All files that are required to build the PHP
   Interpreter for KasperskyOS and examples of KasperskyOS-based solutions are located in the
   following directory:
   ```
   ./kos
   ```
1. Source the SDK setup script to configure the build environment. This exports the `KOSCEDIR`
  environment variable, which points to the SDK installation directory:
   ```sh
   source /opt/KasperskyOS-Community-Edition-<platform>-<version>/common/set_env.sh
   ```

### Building the PHP Interpreter

KasperskyOS Community Edition does not contain openssl headers, but this project depends on them. To obtain them, run the following commands:
```
$ git submodule update --init --depth=1 third_party/openssl
$ (cd third_party/openssl && ./config && make build_generated)
```
If you clone this repository with `--recurse-submodules` option, you will not need to run the `git submodule update --init` command.

Go to the [./kos/php](./kos/php/) directory and run the following commands to build the PHP Interpreter for KasperskyOS:
```
$ cmake -B build -D CMAKE_TOOLCHAIN_FILE="$KOSCEDIR/toolchain/share/toolchain-aarch64-kos.cmake" -D CMAKE_INSTALL_PREFIX="$KOSCEDIR/sysroot-aarch64-kos"
$ cmake --build build
```
The PHP Interpreter for KasperskyOS is built using the CMake build system, which is provided in the KasperskyOS Community Edition SDK.

### Installing and removing the PHP Interpreter

To install the PHP Interpreter for KasperskyOS to the KasperskyOS Community Edition SDK, go to the [./kos/php](./kos/php/) directory and run the following command:
```
$ cmake --install build
```

To remove the PHP Interpreter for KasperskyOS from the KasperskyOS Community Edition SDK, go to the [./kos/php](./kos/php/) directory and run the following command:
```
$ cmake --build build --target uninstall
```

[⬆ Back to Top](#Table-of-contents)

## Usage

When you develop a KasperskyOS-based solution, use the [recommended structure of project directories](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.4&customization=KCE&helpid=cmake_using_sdk_cmake) to simplify usage of CMake scripts.

To include the PHP Interpreter in your KasperskyOS-based solution, follow these steps:

1. Add the `find_package()` command to the `./CMakeLists.txt` root file to find and load the `php` package.
   ```
   find_package (php REQUIRED)
   ```
   For more information about the `./CMakeLists.txt` root file, see the [KasperskyOS Community Edition Online Help](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.4&customization=KCE&helpid=cmake_lists_root).
1. Add the `Fpm` program to a list of program executable files defined in the
   `./einit/CMakeLists.txt` file as follows:
   ```
   set (ENTITIES
        php::Fpm
        ...)
   ```
   For more information about the `./einit/CMakeLists.txt` file for building the `Einit` initializing program, see [KasperskyOS Community Edition Online Help](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.4&customization=KCE&helpid=cmake_lists_einit).
1. Specify a list of IPC channels that connect the `Fpm` program to `VfsNet` and `VfsSdCardFs` programs in the `./einit/src/init.yaml.in` template file or using target properties. For more information about the `init.yaml.in` template file, see [KasperskyOS Community Edition Online Help](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.4&customization=KCE&helpid=cmake_yaml_templates).
1. Create a solution security policy description in the `./einit/src/security.psl` file. For more information about the `security.psl` file, see [KasperskyOS Community Edition Online Help](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.4&customization=KCE&helpid=ssp_descr).
1. Add PHP configuration files to the directory `./resources`.

### Examples

* [`./kos/examples/fpm`](./kos/examples/fpm)—Version of the FastCGI Process Manager (FPM) adapted for use on KasperskyOS.
* [`./kos/examples/web_server`](kos/examples/web_server)—KasperskyOS-based dynamic web server.

[⬆ Back to Top](#Table-of-contents)

## Testing the PHP Interpreter

The test suite for the original PHP Interpreter is used to test the PHP Interpreter for KasperskyOS, but testing systems are different. The testing system for KasperskyOS consists of two programs: [`php_tests.Server`](kos/tests/server) and [`php_tests.Client`](kos/tests/client). The `php_tests.Client` program parses PHPT files and sends a request, which contains a PHP script, to the `php_tests.Server` program. The `php_tests.Server` program executes the request and returns a result to the `php_tests.Client` using an HTTP response. The `php_tests.Client` compares the received response with the expected result.

To build and run the tests, go to the [./kos/tests](./kos/tests/) directory and execute the following commands:
```
$ cmake -B build -D CMAKE_TOOLCHAIN_FILE="$KOSCEDIR/toolchain/share/toolchain-aarch64-kos.cmake"
$ cmake --build build --target {kos-qemu-image|sim}
```
where:
* `kos-qemu-image` creates a KasperskyOS-based solution image for QEMU that includes the example;
* `sim` creates a KasperskyOS-based solution image for QEMU that includes the example and runs it.

To build the tests to run on a hardware, use the following commands:
```
$ cmake -B build -D CMAKE_TOOLCHAIN_FILE="$KOSCEDIR/toolchain/share/toolchain-aarch64-kos.cmake"
$ cmake --build build --target {kos-image|sd-image}
```
where:
* `kos-image` creates a KasperskyOS-based solution image that includes the example;
* `sd-image` creates a file system image for a bootable SD card.

For more information about running tests on hardware see the following [link](https://click.kaspersky.com/?hl=en-us&link=online_help&pid=kos&version=1.4&customization=KCE&helpid=running_sample_programs_rpi).

> [!NOTE]
> If you build the tests to run on a Radxa ROCK 3A, `kos-image` may not run correctly (according to
> the known size limitations of `kos-image` in the below
> [link](https://support.kaspersky.com/help/KCE/1.4/en-US/limitations_and_known_problems.htm)). To
> avoid this, you should shift the FDT loadable address in u-boot, for example:
```
setenv fdt_addr_r 0xa0000000
```
If you do not want to shift the FDT loadable address on every boot, you can also save the u-boot environment with the following command:
```
saveenv
```

[⬆ Back to Top](#Table-of-contents)

## Acknowledgment

This product includes PHP software, freely available from <http://www.php.net/software/>.

## Trademarks

Registered trademarks and endpoint marks are the property of their respective owners.

Active Directory, ActiveX, Authenticode, Azure, DirectShow, Halo, Hyper-V, InfoPath, Internet
Explorer, Microsoft, MSDN, MS-DOS, MSN, MultiPoint, OpenType, Outlook, PowerPoint, PowerShell,
Showcase, SideWinder, SQL Azure, SQL Server, Tahoma, Visio, Visual Basic, Visual C++, Visual FoxPro,
Visual Studio, Win32, Windows, Windows Media, Windows Phone, Windows PowerShell, Windows Server,
Windows Vista, Xbox, Xbox 360, and XNA are trademarks of the Microsoft group of companies.

Adobe, PostScript, and Shockwave are either registered trademarks or trademarks of Adobe in the
United States and/or other countries.

AFS, AI X, AIX 5L, DB2, DYNIX/ptx, GPFS, i5/OS, IBM, ibm.com, Lotus, MVS, OS/390, OS/400, POWER8,
PowerPC, RDN, Rhapsody, RMF, RS/6000, S/390, Solid, SPSS, Symphony, THINK, TrueType, UC2, VisualAge,
VTF, z10, z9, z/Architecture, z/OS, zSeries, and z/VM are trademarks of International Business
Machines Corporation, registered in many jurisdictions worldwide.

Amazon and Amazon.com are trademarks of Amazon.com, Inc. or its affiliates.

AMD, AMD64, and Opteron are trademarks or registered trademark of Advanced Micro Devices, Inc.

Android, Chrome, Chromium, Dalvik, Google, Gmail, Google Chrome, Google Groups, Google Search
Appliance, Google Toolbar, Nexus, Nexus One, and VP8 are trademarks of Google LLC.

Ansible, CentOS, Fedora, Red Hat, and Red Hat Enterprise Linux are trademarks or registered
trademark of Red Hat, Inc. or its subsidiaries in the United States and other countries.

Apache is either a registered trademark or a trademark of the Apache Software Foundation in the
United States and/or other countries.

Apple, AppleScript, AppleShare, Apple TV, AppleWorks, Carbon, Claris, Cocoa, ColorSync, HyperCard,
iPad, iPhone, iPod, iTunes, Keychain, LaserWriter, LocalTalk, Mac, Macintosh, macOS, Mac OS, Newton,
Objective-C, OpenCL, OS X, ProDOS, QuickDraw, QuickTime, Safari, Sherlock, and Xcode are trademarks
of Apple Inc.

Arm is a registered trademark of Arm Limited (or its subsidiaries) in the US and/or elsewhere.

AutoCAD are registered trademarks or trademarks of Autodesk, Inc., and/or its subsidiaries and/or
affiliates in the USA and/or other countries.

AVG is a registered trademark.

Avira and other Avira product names referenced herein are trademarks of Avira or its Affiliates.

BACnet is a registered trademark of the American Society of Heating, Refrigerating and
Air-Conditioning Engineers, Inc.

BitTorrent is a trademark of BitTorrent, Inc.

The Trademarks BlackBerry and RIM are owned by Research In Motion Limited and are registered in the
United States and may be pending or registered in other countries.

Blue Coat, PGP, Symantec, Synapse, and ProxySG are registered trademarks of Symantec Corporation or
its affiliates in the U.S. and other countries.

The Bluetooth word, mark and logos are owned by Bluetooth SIG, Inc.

BorderManager, NetWare, and Novell are registered trademarks of Novell Enterprises Inc. in the
United States and other countries.

Borland is a trademark or registered trademark of Borland Software Corporation.

Catalyst, Cisco, ClamAV, iOS, and IOS are registered trademarks or trademarks of Cisco Systems, Inc.
and/or its affiliates in the United States and certain other countries.

Celeron, i960, Intel, Itanium, Pentium, VTune, and Xeon are trademarks of Intel Corporation or its
subsidiaries.

Comodo is a trademark owned by Comodo and/or its affiliates.

Corel and CorelDRAW are trademarks or registered trademarks of Corel Corporation and/or its
subsidiaries in Canada, the United States and/or other countries.

dBASE is trademark of dataBased Intelligence, Inc.

Debian is a registered trademark of Software in the Public Interest, Inc.

Dell Technologies, Dell, EMC, Isilon, OneFS and other trademarks are trademarks of Dell Inc. or its
subsidiaries.

DICOM® is the registered trademark of the National Electrical Manufacturers Association for its
Standards publications relating to digital communications of medical information.

Docker and the Docker logo are trademarks or registered trademarks of Docker, Inc. in the United
States and/or other countries. Docker, Inc. and other parties may also have trademark rights in
other terms used herein.

Dropbox is a trademark of Dropbox, Inc.

Firebird is a registered trademark of the Firebird Foundation.

Firefox, Mozilla, and Thunderbird are trademarks of the Mozilla Foundation in the U.S. and other
countries.

Foxit is a registered trademark of Foxit Corporation.

FreeBSD is a registered trademark of The FreeBSD Foundation.

GITHUB is a trademark of GitHub, Inc., registered in the United States and other countries.

Hitachi is a trademark of Hitachi, Ltd.

Huawei, HUAWEI are trademarks of Huawei Technologies Co., Ltd.

ICQ is Trademark and/or Service mark of ICQ LLC.

Java, JavaScript, Oracle, and Solaris are registered trademarks of Oracle and/or its affiliates.

Juniper Networks and JUNOS are trademarks or registered trademarks of Juniper Networks, Inc. in the
United States and other countries

Linux is the registered trademark of Linus Torvalds in the U.S. and other countries.

Logitech is either a registered trademark or trademark of Logitech in the United States and/or other
countries.

MIPS is a trademark or registered trademark of MIPS Technologies, Inc. in the United States and
other countries.

MOTOROLA and the Stylized M Logo are trademarks or registered trademarks of Motorola Trademark
Holdings, LLC.

Node.js is a trademark of Joyent, Inc.

Nokia is the registered trademark of Nokia Corporation.

Norton and Norton Utilities are trademarks or registered trademarks of NortonLifeLock Inc. or its
affiliates in the U.S. and other countries.

Nvidia is a registered trademark of NVIDIA Corporation.

NXP is a trademark of NXP B.V.

OpenSSL is a trademark owned by the OpenSSL Software Foundation.

OpenStreetMap is a trademark of the OpenStreetMap Foundation. This product is not endorsed by or
affiliated with the OpenStreetMap Foundation.

Python is a trademark or registered trademark of the Python Software Foundation.

QT is a trademark or registered trademark of The Qt Company Ltd.

Raspberry Pi is a trademark of the Raspberry Pi Foundation.

SAMSUNG is a trademark of SAMSUNG in the United States or other countries.

Sendmail and other names and product names are trademarks or registered trademarks of Sendmail, Inc.

Siemens is a registered trademark of Siemens AG.

Symbian trademark is owned by the Symbian Foundation Ltd

SPL is a trademark and registered trademark of Splunk Inc. in the United States and other countries.

Trend Micro is trademark or registered trademark of Trend Micro Incorporated.

Ubuntu is a registered trademark of Canonical Ltd.

UNIX is a registered trademark in the United States and other countries, licensed exclusively
through X/Open Company Limited.

VxWorks is a registered trademark (®) or service mark (SM) of Wind River Systems, Inc. This product
is not affiliated with, endorsed, sponsored, supported by the owners of the third-party trademark
mentioned herein.

Websense is a trademark or registered trademark of Forcepoint in the U.S. and other countries.

## Contributing

Only KasperskyOS-specific changes can be approved. See [CONTRIBUTING.md](CONTRIBUTING.md) for
detailed instructions on code contribution.

## License

This project is licensed under the terms of the PHP License. See [LICENSE](LICENSE) for more information.

[⬆ Back to Top](#Table-of-contents)
