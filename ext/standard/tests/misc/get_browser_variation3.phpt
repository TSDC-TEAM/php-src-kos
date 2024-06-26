--TEST--
Test get_browser() against a larger corpus
--INI--
browscap={PWD}/browscap_lite_2016_12_06.ini
--SKIPIF--
<?php if (PHP_OS_FAMILY == "KOS") die("skip KOS failed test"); ?>
--FILE--
<?php

$lst = file(__DIR__ . "/user_agents.txt", FILE_IGNORE_NEW_LINES);
foreach ($lst as $agent) {
    $pattern = get_browser($agent, true)['browser_name_pattern'];
    echo "Agent $agent\n    Matched by: $pattern\n";
}
?>
--EXPECT--
Agent -
    Matched by: *
Agent AHC/1.0
    Matched by: *
Agent Airmail 1.4.1 rv:249 (Macintosh; Mac OS X 10.11.6; de_DE)
    Matched by: *
Agent Apache/2.4.10 (Debian) OpenSSL/1.0.1k (internal dummy connection)
    Matched by: *
Agent BaiduSpider
    Matched by: *
Agent Baiduspider+(+http://www.baidu.com/search/spider.htm)
    Matched by: *
Agent Baiduspider-image+(+http://www.baidu.com/search/spider.htm)
    Matched by: *
Agent BigDataCloud
    Matched by: *
Agent BlackBerry9000/4.6.0.167 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/102 ips-agent
    Matched by: *
Agent BPImageWalker/2.0 (www.bdbrandprotect.com)
    Matched by: *
Agent BUFF library user agent
    Matched by: *
Agent CCBot/2.0 (http://commoncrawl.org/faq/)
    Matched by: *
Agent censys.io internet census
    Matched by: *
Agent compatible;Baiduspider/2.0; +http://www.baidu.com/search/spider.html
    Matched by: *
Agent core-project/1.0
    Matched by: *
Agent Crawler powered by contentDetection (www.mindup.de)
    Matched by: *
Agent CRAZYWEBCRAWLER 0.9.10, http://www.crazywebcrawler.com
    Matched by: *
Agent curl/7.19.7 (x86_64-redhat-linux-gnu) libcurl/7.19.7 NSS/3.15.3 zlib/1.2.3 libidn/1.18 libssh2/1.4.2
    Matched by: *
Agent curl/7.19.7 (x86_64-redhat-linux-gnu) libcurl/7.19.7 NSS/3.21 Basic ECC zlib/1.2.3 libidn/1.18 libssh2/1.4.2
    Matched by: *
Agent curl/7.19.7 (x86_64-unknown-linux-gnu) libcurl/7.19.7 NSS/3.12.6.2 zlib/1.2.3 libidn/1.18 libssh2/1.2.2
    Matched by: *
Agent curl/7.26.0
    Matched by: *
Agent curl/7.29.0
    Matched by: *
Agent curl/7.38.0
    Matched by: *
Agent Dalvik/1.6.0 (Linux; U; Android 4.3; C5303 Build/12.1.A.1.205)
    Matched by: *
Agent Dalvik/2.1.0 (Linux; U; Android 5.0; SM-N9005 Build/LRX21V)
    Matched by: *
Agent Dalvik/2.1.0 (Linux; U; Android 6.0.1; SM-A510F Build/MMB29K)
    Matched by: *
Agent Digg Feed Fetcher 1.0 (Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_1) AppleWebKit/534.48.3 (KHTML, like Gecko) Version/5.1 Safari/534.48.3)
    Matched by: *
Agent facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)
    Matched by: *
Agent Feedbin feed-id:156831 - 1 subscribers
    Matched by: *
Agent Feedly/1.0 (+http://www.feedly.com/fetcher.html; like FeedFetcher-Google)
    Matched by: *
Agent GarlikCrawler/1.2 (http://garlik.com/, crawler@garlik.com)
    Matched by: *
Agent Go-http-client/1.1
    Matched by: *
Agent Googlebot/2.1 (+http://www.google.com/bot.html)
    Matched by: *
Agent Googlebot-Image/1.0
    Matched by: *
Agent Googlebot/Nutch-1.7
    Matched by: *
Agent Goose/1.0.25
    Matched by: *
Agent GridBot/1.0 crawler@sysomos.com
    Matched by: *
Agent http://tools.geek-tools.org/link-counter/
    Matched by: *
Agent ia_archiver
    Matched by: *
Agent Java/1.6.0_04
    Matched by: *
Agent Java/1.7.0_75
    Matched by: *
Agent libwww-perl/5.833
    Matched by: *
Agent libwww-perl/6.08
    Matched by: *
Agent libwww-perl/6.13
    Matched by: *
Agent libwww-perl/6.15
    Matched by: *
Agent LinkWalker/3.0 (http://www.brandprotect.com)
    Matched by: *
Agent lr_http_client
    Matched by: *
Agent ltx71 - (http://ltx71.com/)
    Matched by: *
Agent LWP::Simple/6.00 libwww-perl/6.05
    Matched by: *
Agent LWP::Simple/6.00 libwww-perl/6.08
    Matched by: *
Agent Lynx/2.8.5rel.1 libwww-FM/2.15FC SSL-MM/1.4.1c OpenSSL/0.9.7e-dev
    Matched by: *
Agent Lynx/2.8.8pre.4 libwww-FM/2.14 SSL-MM/1.4.1 GNUTLS/2.12.23
    Matched by: *
Agent masscan/1.0 (https://github.com/robertdavidgraham/masscan)
    Matched by: *
Agent Mediapartners-Google
    Matched by: *
Agent mindUpBot (datenbutler.de)
    Matched by: *
Agent mj12bot
    Matched by: *
Agent MobileSafari/601.1 CFNetwork/758.5.3 Darwin/15.6.0
    Matched by: MobileSafari/* CFNetwork/*
Agent MobileSafari/602.1 CFNetwork/808.0.2 Darwin/16.0.0
    Matched by: MobileSafari/* CFNetwork/*
Agent MobileSafari/602.1 CFNetwork/808.1.4 Darwin/16.1.0
    Matched by: MobileSafari/* CFNetwork/*
Agent Morfeus Fucking Scanner
    Matched by: *
Agent Mozilla
    Matched by: *
Agent Mozilla/0.6 Beta (Windows)
    Matched by: *
Agent Mozilla/0.91 Beta (Windows)
    Matched by: *
Agent Mozilla/10.0 (Windows NT 7.100) Gecko/20112301 Firefox/17.0
    Matched by: *
Agent Mozilla/1.22 (compatible; MSIE 2.0d; Windows NT)
    Matched by: *
Agent Mozilla/1.22 (compatible; MSIE 2.0; Windows 95)
    Matched by: *
Agent Mozilla/2.0 (compatible; MSIE 3.02; Windows CE; 240x320)
    Matched by: *
Agent Mozilla/3.0 (compatible; Indy Library)
    Matched by: *
Agent Mozilla/3.0 (compatible; WebCapture 2.0; Auto; Windows)
    Matched by: *
Agent mozilla/3.0 (Windows NT 6.1; rv:2.0.1) Gecko/20100101 Firefox/5.0.1
    Matched by: *
Agent Mozilla/3.0 (x86 [en] Windows NT 5.1; Sun)
    Matched by: *
Agent Mozilla/37.0.2 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)
    Matched by: *
Agent Mozilla 4.0
    Matched by: *
Agent Mozilla/4.0
    Matched by: *
Agent Mozilla/4.0 (CMS Crawler: http://www.cmscrawler.com)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 4.01; Digital AlphaServer 1000A 4/233; Windows NT; Powered By 64-Bit Alpha Processor)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.01; Windows 95; MSIECrawler)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.01; Windows NT)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.0; Windows 2000) Opera 6.0 [en]
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.0; Windows 3.1)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) Opera 6.01 [en]
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; DigExt)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.5; Windows 95)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.5; Windows 95; BCD2000)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 4.0)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 4.0; .NET CLR 1.0.2914)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.0; .NET CLR 1.1.4322)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 5.0; T312461)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 6.0)
    Matched by: Mozilla/4.0 (*MSIE 6.0*)*
Agent Mozilla/4.0 (compatible; MSIE 6.0; America Online Browser 1.1; rev1.2; Windows NT 5.1; SV1; .NET CLR 1.1.4322)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; AOL 9.0; Windows NT 5.1)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 4.0) Opera 7.0 [en]
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.0) Opera 7.02 Bork-edition [en]
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; MSIE 5.5; Windows NT 5.1) Opera 7.01 [en]
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Update a; AOL 6.0; Windows 98)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows 98)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; Win 9x 4.90)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; Win 9x 4.90; Creative)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows ME) Opera 7.11 [en]
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; APC; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.50215; InfoPath.1)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; Avant Browser [avantbrowser.com]; Hotbar 4.4.5.0)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; KTXN)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; .NET CLR 1.0.3705; .NET CLR 1.1.4322)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0; T312461)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0+(compatible;+MSIE+6.0;+Windows+NT+5.1)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Crazy Browser 1.0.5)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Deepnet Explorer 1.5.0; .NET CLR 1.0.3705)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.00
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.50
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 9.0
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; FREE; .NET CLR 1.1.4322)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; KKman2.0)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Maxthon; .NET CLR 1.1.4322)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; MRA 4.3 (build 01218); .NET CLR 1.1.4322)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; MRA 4.6 (build 01425))
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; MyIE2; Deepnet Explorer)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.0.3705)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; (R1 1.5))
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322; FDM)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Netscape/8.0.4
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1) Opera 7.54 [en]
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; Q312461)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; ru) Opera 8.01
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; ru) Opera 8.50
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1;)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Crazy Browser 2.0.0 Beta 1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; FunWebProducts)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; FunWebProducts; MRA 4.6 (build 01425); .NET CLR 1.1.4322; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; FunWebProducts; .NET CLR 1.1.4322; PeoplePal 6.2)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; InfoPath.1
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; InfoPath.1)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Media Center PC
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) )
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 1.0.3705)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 2.0.50727 ; .NET CLR 4.0.30319)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; MRA 4.6 (build 01425); MRSPUTNIK 1, 5, 0, 19 SW)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; .NET CLR 2.0.40607)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible- MSIE 6.0- Windows NT 5.1- SV1- .NET CLR 1.1.4322
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322) Babya Discoverer 8.0:
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322) NS8/0.9.6
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; XMPP Tiscali Communicator v.10.0.2; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727; .NET CLR 1.1.4322)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; TencentTraveler ; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; YPC 3.0.2; .NET CLR 1.1.4322; yplus 4.4.02b)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; TheFreeDictionary.com; .NET CLR 1.1.4322; .NET CLR 1.0.3705; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; .NET CLR 1.0.3705;)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; Win64; AMD64)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; Win64; x64; SV1; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows NT) ::ELNSB50::000061100320025802a00111000000000507000900000000
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 6.0; Windows XP)
    Matched by: Mozilla/4.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 6.0)
    Matched by: Mozilla/4.0 (compatible*; MSIE 7.0b*; *Windows NT 6.0*
Agent Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 6.0 ; .NET CLR 2.0.50215; SL Commerce Client v1.0; Tablet PC 2.0
    Matched by: Mozilla/4.0 (compatible*; MSIE 7.0b*; *Windows NT 6.0*
Agent Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; MRSPUTNIK 2, 4, 0, 270; MRA 5.8 (build 4598); GTB7.2; AskTbFF/5.11.3.15590; .NET CLR 1.1.4322)
    Matched by: Mozilla/4.0 (compatible*; MSIE 7.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)
    Matched by: Mozilla/4.0 (compatible*; MSIE 7.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible*; MSIE 7.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible*; MSIE 7.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 1.0.3705; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)
    Matched by: Mozilla/4.0 (compatible; MSIE 7.0; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2)
    Matched by: Mozilla/4.0 (compatible*; MSIE 7.0*; *Windows*
Agent Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; WOW64; Trident/5.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.30729; .NET CLR 3.5.30729; .NET4.0C; .NET4.0E)
    Matched by: Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.0*Trident/5.0*)*
Agent Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)
    Matched by: Mozilla/4.0 (compatible*; MSIE 7.0*; *Windows NT 6.1*
Agent Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/7.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; ms-office)
    Matched by: Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.1*Trident/7.0*
Agent Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.2; WOW64; Trident/7.0; .NET4.0E; .NET4.0C; .NET CLR 3.5.30729; .NET CLR 2.0.50727; .NET CLR 3.0.30729)
    Matched by: Mozilla/4.0 (compatible; MSIE 7.0; *Windows NT 6.2*Trident/7.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; ; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)
    Matched by: *
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; GTB6.5; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; InfoPath.3)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; GTB6.5; .NET CLR 2.0.50727; InfoPath.2)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; GTB6; InfoPath.1; .NET CLR 2.0.50727; Dealio Toolbar 3.4; .NET CLR 3.0.04506.30; .NET CLR 3.0.04506.648; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; GTB7.5; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; InfoPath.3; .NET4.0C; .NET4.0E)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET4.0C)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; InfoPath.2)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; InfoPath.2)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1) ; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.0.30729; .NET CLR 3.5.30729)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.0*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0; SLCC1; .NET CLR 2.0.50727; OfficeLiveConnector.1.3; OfficeLivePatch.0.0; .NET CLR 3.5.30729; .NET CLR 3.0.30618; MS-RTC LM 8; yie8)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.0*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; Avant Browser; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; GTB7.2; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; InfoPath.2; SV1; .NET CLR 3.8.36926; WOW64; en-US)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Tablet PC 2.0)
    Matched by: Mozilla/4.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4.0*
Agent Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1)
    Matched by: Mozilla/4.0 (compatible; MSIE 9.0*; *Windows NT 6.1*
Agent Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; 125LA; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022)
    Matched by: Mozilla/4.0 (compatible; MSIE 9.0*; *Windows NT 6.1*
Agent Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)
    Matched by: Mozilla/4.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5.0*
Agent Mozilla/4.0 (compatible; Netcraft Web Server Survey)
    Matched by: *
Agent Mozilla/4.0 (compatible; Powermarks/3.5; Windows 95/98/2000/NT)
    Matched by: *
Agent Mozilla/4.0 (compatible; Synapse)
    Matched by: *
Agent Mozilla/4.0 (compatible; Win32; WinHttp.WinHttpRequest.5)
    Matched by: *
Agent Mozilla/4.0 (compatible; Windows;)
    Matched by: *
Agent Mozilla/4.0 (Windows NT 6.2) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.70 Safari/537.17
    Matched by: *
Agent Mozilla/4.0 (X11; MSIE 6.0; i686; .NET CLR 1.1.4322; .NET CLR 2.0.50727; FDM)
    Matched by: Mozilla/4.0 (*MSIE 6.0*)*
Agent Mozilla/4.61 [en] (X11; U; ) - BrowseX (2.0.0 Windows)
    Matched by: *
Agent Mozilla/4.76 [en] (Windows NT 5.0; U)
    Matched by: *
Agent Mozilla/4.79 [en] (Windows NT 5.0; U)
    Matched by: *
Agent Mozilla/4.7 (compatible; OffByOne; Windows 2000) Webster Pro V3.4
    Matched by: *
Agent Mozilla 5.0
    Matched by: *
Agent Mozilla/5.0
    Matched by: *
Agent Mozilla/5.0 (Android 2.2; Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) *Version/* Safari/*
Agent Mozilla/5.0 (Android 5.1.1; Tablet; rv:50.0.1) Gecko/50.0.1 Firefox/50.0.1
    Matched by: Mozilla/5.0 (*Android*Tablet*) Gecko* Firefox/50.*
Agent Mozilla/5.0 (Android 5.1.1; Tablet; rv:50.0) Gecko/50.0 Firefox/50.0
    Matched by: Mozilla/5.0 (*Android*Tablet*) Gecko* Firefox/50.*
Agent Mozilla/5.0 (Android 5.1; Mobile; rv:49.0.2) Gecko/49.0.2 Firefox/49.0.2
    Matched by: Mozilla/5.0 (*Android*Mobile*) Gecko* Firefox/49.*
Agent Mozilla/5.0 (Android 5.1; Mobile; rv:49.0) Gecko/49.0 Firefox/49.0
    Matched by: Mozilla/5.0 (*Android*Mobile*) Gecko* Firefox/49.*
Agent Mozilla/5.0 (Android 6.0.1; Mobile; rv:50.0) Gecko/50.0 Firefox/50.0
    Matched by: Mozilla/5.0 (*Android*Mobile*) Gecko* Firefox/50.*
Agent Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; Google Web Preview Analytics) Chrome/27.0.1453 Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
    Matched by: *
Agent Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.346 Mobile Safari/534.11+
    Matched by: *
Agent Mozilla/5.0 (compatible)
    Matched by: *
Agent Mozilla/5.0 (compatible; AhrefsBot/5.1; +http://ahrefs.com/robot/)
    Matched by: *
Agent Mozilla/5.0 (compatible; archive.org_bot +http://www.archive.org/details/archive.org_bot)
    Matched by: *
Agent Mozilla/5.0 (compatible; archive.org_bot; Wayback Machine Live Record; +http://archive.org/details/archive.org_bot)
    Matched by: *
Agent Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)
    Matched by: *
Agent Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)
    Matched by: *
Agent Mozilla/5.0 (compatible; BLEXBot/1.0; +http://webmeup-crawler.com/)
    Matched by: *
Agent Mozilla/5.0 (compatible; Cliqzbot/1.0 +http://cliqz.com/company/cliqzbot)
    Matched by: *
Agent Mozilla/5.0 (compatible; coccocbot-image/1.0; +http://help.coccoc.com/searchengine)
    Matched by: *
Agent Mozilla/5.0 (compatible; coccocbot-web/1.0; +http://help.coccoc.com/searchengine)
    Matched by: *
Agent Mozilla/5.0+(compatible;+CukBot;+Not+a+spammer;+++https://www.companiesintheuk.co.uk/bot.html)
    Matched by: *
Agent Mozilla/5.0 (compatible; Dataprovider/6.101; +https://www.dataprovider.com/)
    Matched by: *
Agent Mozilla/5.0 (compatible; Dataprovider; https://www.dataprovider.com/spider/)
    Matched by: *
Agent Mozilla/5.0 (compatible; DeuSu/5.0.2; +https://deusu.de/robot.html)
    Matched by: *
Agent Mozilla/5.0 (compatible; DotBot/1.1; http://www.opensiteexplorer.org/dotbot, help@moz.com)
    Matched by: *
Agent Mozilla/5.0 (compatible; DuckDuckGo-Favicons-Bot/1.0; +http://duckduckgo.com)
    Matched by: *
Agent Mozilla/5.0 (compatible; Exabot/3.0; +http://www.exabot.com/go/robot)
    Matched by: *
Agent Mozilla/5.0 (compatible; Gluten Free Crawler/1.0; +http://glutenfreepleasure.com/)
    Matched by: *
Agent Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
    Matched by: *
Agent Mozilla/5.0 (compatible; Google-Site-Verification/1.0)
    Matched by: *
Agent Mozilla/5.0 (compatible; GrapeshotCrawler/2.0; +http://www.grapeshot.co.uk/crawler.php)
    Matched by: *
Agent Mozilla/5.0 (compatible; inoreader.com-like FeedFetcher-Google)
    Matched by: *
Agent Mozilla/5.0 (compatible; Linux x86_64; Mail.RU_Bot/2.0; +http://go.mail.ru/help/robots)
    Matched by: *
Agent Mozilla/5.0 (compatible; MegaIndex.ru/2.0; +http://megaindex.com/crawler)
    Matched by: *
Agent Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)
    Matched by: *
Agent Mozilla/5.0 (compatible; MJ12bot/v1.4.6; http://mj12bot.com/)
    Matched by: *
Agent Mozilla/5.0 (compatible; MJ12bot/v1.4.7; http://mj12bot.com/)
    Matched by: *
Agent Mozilla/5.0 (compatible; MojeekBot/0.6; +https://www.mojeek.com/bot.html)
    Matched by: *
Agent Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)
    Matched by: Mozilla/5.0 (compatible; MSIE 10.0*Windows NT 6.1*Trident/6.0*)*
Agent Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET4.0C; .NET4.0E; AskTbORJ/5.14.1.20007; BOIE9;NLNL)
    Matched by: Mozilla/5.0 (compatible; MSIE 10.0*Windows NT 6.1*Trident/6.0*)*
Agent Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)
    Matched by: Mozilla/5.0 (compatible; MSIE 10.0*Windows NT 6.1*Trident/6.0*)*
Agent Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0; SLCC2; .NET CLR 2.0.50727; Media Center PC 6.0; InfoPath.2; .NET4.0C; .NET4.0E; AskTbORJ/5.15.14.29495; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 1.1.4322; EIE10;ENAUMSN)
    Matched by: Mozilla/5.0 (compatible; MSIE 10.0*Windows NT 6.1*Trident/6.0*)*
Agent Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; AskTbFXTV5/5.15.2.23037)
    Matched by: Mozilla/5.0 (compatible; MSIE 10.0*Windows NT 6.1*Trident/6.0*)*
Agent Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)
    Matched by: Mozilla/5.0 (compatible; MSIE 10.0*Windows NT 6.2*Trident/6.0*)*
Agent Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; .NET4.0E; .NET4.0C; InfoPath.3; .NET CLR 3.5.30729; .NET CLR 2.0.50727; .NET CLR 3.0.30729; MS-RTC LM 8)
    Matched by: Mozilla/5.0 (compatible; MSIE 10.0*Windows NT 6.2*Trident/6.0*)*
Agent Mozilla/5.0 (compatible, MSIE 11, Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.3*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1)
    Matched by: Mozilla/5.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/5.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727)
    Matched by: Mozilla/5.0 (compatible; MSIE 6.0*; *Windows*
Agent Mozilla/5.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 1.0.3705; .NET CLR 1.1.4322)
    Matched by: Mozilla/5.0 (compatible; MSIE 8.0*; *Windows NT 6.1*Trident/4.0*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; NP06)
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.0*Trident/5.0*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; InfoPath.2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.0*Trident/5.0*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; MDDC; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E)
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.0*Trident/5.0*
Agent 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)'
    Matched by: *
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5.0*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0); 360Spider
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5.0*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET4.0C; .NET4.0E; MS-RTC LM 8; SFIEAUTH1)
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5.0*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; Trident/5.0)
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5.0*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5.0*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; .NET4.0C; .NET4.0E; .NET CLR 1.1.4322; MS-RTC LM 8)
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5.0*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; AlexaToolbar/amzni-3.0; .NET4.0E)
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5.0*
Agent Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; HPDTDF; InfoPath.3)
    Matched by: Mozilla/5.0 (compatible; MSIE 9.0*; *Windows NT 6.1*Trident/5.0*
Agent Mozilla/5.0 (compatible; MSIE or Firefox mutant;) Daum 4.1
    Matched by: *
Agent Mozilla/5.0 (compatible; NetcraftSurveyAgent/1.0; +info@netcraft.com)
    Matched by: *
Agent Mozilla/5.0 (compatible; Nmap Scripting Engine; http://nmap.org/book/nse.html)
    Matched by: *
Agent Mozilla/5.0 (compatible; oBot/2.3.1; http://filterdb.iss.net/crawler/)
    Matched by: *
Agent Mozilla/5.0 (compatible; Qwantify/2.3w; +https://www.qwant.com/)/2.3w
    Matched by: *
Agent Mozilla/5.0 (compatible; SemrushBot/1.1~bl; +http://www.semrush.com/bot.html)
    Matched by: *
Agent Mozilla/5.0 (compatible; SEOkicks-Robot; +http://www.seokicks.de/robot.html)
    Matched by: *
Agent Mozilla/5.0 (compatible; SeznamBot/3.2; +http://napoveda.seznam.cz/en/seznambot-intro/)
    Matched by: *
Agent Mozilla/5.0 (compatible; SiteExplorer/1.1b; +http://siteexplorer.info/Backlink-Checker-Spider/)
    Matched by: *
Agent Mozilla/5.0 (compatible; Sonic/1.0; http://www.yama.info.waseda.ac.jp/~crawler/info.html)
    Matched by: *
Agent Mozilla/5.0 (compatible; spbot/5.0.3; +http://OpenLinkProfiler.org/bot )
    Matched by: *
Agent Mozilla/5.0 (compatible; SurdotlyBot/1.0; +http://sur.ly/bot.html)
    Matched by: *
Agent Mozilla/5.0 (compatible; Uptimebot/1.0; +http://www.uptime.com/uptimebot)
    Matched by: *
Agent Mozilla/5.0 (compatible; Wappalyzer; +https://github.com/AliasIO/Wappalyzer)
    Matched by: *
Agent Mozilla/5.0 (compatible; XoviBot/2.0; +http://www.xovibot.net/)
    Matched by: *
Agent Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)
    Matched by: *
Agent Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)
    Matched by: *
Agent Mozilla/5.0 (compatible;YoudaoFeedFetcher/1.0;http://www.youdao.com/help/reader/faq/topic006/;1 subscribers;)
    Matched by: *
Agent Mozilla/5.0 (iPad; CPU OS 10_1_1 like Mac OS X) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0 Mobile/14B100 Safari/602.1
    Matched by: Mozilla/5.0 (iPad*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/*Safari/*
Agent Mozilla/5.0 (iPad; CPU OS 10_1_1 like Mac OS X) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0 Mobile/14B150 Safari/602.1
    Matched by: Mozilla/5.0 (iPad*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/*Safari/*
Agent Mozilla/5.0 (iPad; CPU OS 10_1 like Mac OS X) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0 Mobile/14B72 Safari/602.1
    Matched by: Mozilla/5.0 (iPad*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/*Safari/*
Agent Mozilla/5.0 (iPad; CPU OS 10_2 like Mac OS X) AppleWebKit/602.3.12 (KHTML, like Gecko) OPiOS/14.0.0.104835 Mobile/14C92 Safari/9537.53
    Matched by: Mozilla/5.0 (iPad*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Mobile*
Agent Mozilla/5.0 (iPad; CPU OS 9_3_5 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13G36 Safari/601.1
    Matched by: Mozilla/5.0 (iPad*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/9.0*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 10_0_2 like Mac OS X) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Mobile/14A456 Safari/602.1
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 10_0 like Mac OS X) AppleWebKit/602.1.38 (KHTML, like Gecko) Version/10.0 Mobile/14A300 Safari/602.1
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 10_1_1 like Mac OS X) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0 Mobile/14B100 Safari/602.1
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 10_1_1 like Mac OS X) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0 Mobile/14B150 Safari/602.1
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 10_1 like Mac OS X) AppleWebKit/602.2.8 (KHTML, like Gecko) OPiOS/15.00.00000 Mobile/14B55c Safari/7534.48.3
    Matched by: Mozilla/5.0*(iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Mobile*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 10_2 like Mac OS X) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0 Mobile/14C92 Safari/602.1
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 5_0 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A334 Safari/7534.48.3
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/6.0*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53 BingPreview/1.0b
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/7.0*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/7.0*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 8_0 like Mac OS X) AppleWebKit/600.1.3 (KHTML, like Gecko) Version/8.0 Mobile/12A4345d Safari/600.1.4
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/8.0*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 8_1_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12B466 Safari/600.1.4
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/8.0*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) Version/8.0 Mobile/12F70 Safari/600.1.4
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/8.0*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_3 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13G34 Safari/601.1
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/9.0*Safari/*
Agent Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_3 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13G34 Safari/601.1 BMID/E679DA49AC
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/9.0*Safari/*
Agent Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.161481015402482
    Matched by: Mozilla/5.0 (iPhone*CPU*OS* like Mac OS X*)*AppleWebKit/*(*KHTML* like Gecko*)*Version/*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.05; Galaxy Nexus Build/IMM76B) AppleWebKit/535.25 (KHTML, like Gecko) Chrome/17.0.1025.133 Mobile Safari/536.19
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML, like Gecko*) Chrome/*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.1.2; GT-S5310B Build/JZO54K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.124 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.2.2; GT-S7580 Build/JDQ39) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.114 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML, like Gecko*) Chrome/*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.3; C5303 Build/12.1.A.1.205) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.4.2; de-de; SAMSUNG GT-I9205 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/1.5 Chrome/28.0.1500.94 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*) AppleWebKit/* (KHTML,*like Gecko*) Version/1.5*Chrome*Safari*
Agent Mozilla/5.0 (Linux; Android 4.4.2; GT-I9195 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.98 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/52.*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.4.2; GT-P5210 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.68 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.4.2; HP 7 VoiceTab Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.105 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/49.*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.4.2; LENNY Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/30.0.0.0 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*) AppleWebKit/* (KHTML,*like Gecko*) Version/4.0*Chrome*Safari*
Agent Mozilla/5.0 (Linux; Android 4.4.2; LG-V500 Build/KOT49I.V50020f) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.4.2; Panasonic ELUGA Z Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.4.2; RAINBOW Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/30.0.0.0 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*) AppleWebKit/* (KHTML,*like Gecko*) Version/4.0*Chrome*Safari*
Agent Mozilla/5.0 (Linux; Android 4.4.2; SM-T230 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 4.4.2; SUNSET2 Build/KOT49H) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Linux; Android 5.0.1; ALE-L02 Build/HuaweiALE-L02) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 5.0.1; GT-I9295 Build/LRX22C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 5.0.1; GT-I9515 Build/LRX22C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 5.0.1; SAMSUNG GT-I9505 Build/LRX22C) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/4.0 Chrome/44.0.2403.133 Mobile Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Linux; Android 5.0.2; Lenovo TAB 2 A8-50LC Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.93 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML, like Gecko*) Chrome/*Safari/*
Agent Mozilla/5.0 (Linux; Android 5.0.2; LG-D693TR Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/34.0.1847.118 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*) AppleWebKit/* (KHTML,*like Gecko*) Version/4.0*Chrome*Safari*
Agent Mozilla/5.0 (Linux; Android 5.0; Lenovo K50-t5 Build/LRX21M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 5.0; SAMSUNG SM-N9005 Build/LRX21V) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/4.0 Chrome/44.0.2403.133 Mobile Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Linux; Android 5.0; SM-N900V Build/LRX21V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 5.0; VOYAGER2_DG310 Build/LRX21M) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/37.0.0.0 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*) AppleWebKit/* (KHTML,*like Gecko*) Version/4.0*Chrome*Safari*
Agent Mozilla/5.0 (Linux; Android 5.1.1; Redmi 3 Build/LMY47V; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/54.0.2840.68 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*) AppleWebKit/* (KHTML,*like Gecko*) Version/4.0*Chrome*Safari*
Agent Mozilla/5.0 (Linux; Android 5.1; Lenovo P70-A Build/LMY47D) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Linux; Android 5.1; LG-X210 Build/LMY47I) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.68 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML, like Gecko*) Chrome/*Safari/*
Agent Mozilla/5.0 (Linux; Android 6.0.1; SAMSUNG SM-A510F/A510FXXS3BPI9 Build/MMB29K) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/4.0 Chrome/44.0.2403.133 Mobile Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Linux; Android 6.0.1; SAMSUNG SM-G900F Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/4.0 Chrome/44.0.2403.133 Mobile Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Linux; Android 6.0.1; SAMSUNG SM-J700T1 Build/MMB29K) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/4.0 Chrome/44.0.2403.133 Mobile Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Linux; Android 6.0.1; SM-G920F Build/MMB29K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 6.0.1; SM-G920F Build/MMB29K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/54.0.2840.85 Mobile Safari/537.36 [FB_IAB/MESSENGER;FBAV/99.0.0.20.136;]
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*) AppleWebKit/* (KHTML,*like Gecko*) Version/4.0*Chrome*Safari*
Agent Mozilla/5.0 (Linux; Android 6.0.1; SM-N920I Build/MMB29K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; Android 6.0.1; SM-N920P Build/MMB29K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.81 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/51.*Safari/*
Agent Mozilla/5.0 (Linux; Android 6.0; LG-H961N Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.85 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Linux; U; Android 2.2.1; en-us; Nexus One Build/FRG83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*)*AppleWebKit/*(*KHTML,*like Gecko*)*Version/4.0*Safari*
Agent Mozilla/5.0 (Linux; U; Android 2.2.2; ru-ru; HTC Desire Build/FRG83G) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*)*AppleWebKit/*(*KHTML,*like Gecko*)*Version/4.0*Safari*
Agent Mozilla/5.0 (Linux; U; Android 4.2.2; de-de; Cynus F4 Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*)*AppleWebKit/*(*KHTML,*like Gecko*)*Version/4.0*Safari*
Agent Mozilla/5.0 (Linux; U; Android 4.3; de-de; HUAWEI Y530-U00 Build/HuaweiY530-U00) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*)*AppleWebKit/*(*KHTML,*like Gecko*)*Version/4.0*Safari*
Agent Mozilla/5.0 (Linux; U; Android 4.4.4; en-US; Coolpad 8297L-I00 Build/KTU84P) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/11.0.5.850 U3/0.8.0 Mobile Safari/534.30
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*)*AppleWebKit/*(*KHTML,*like Gecko*)*Version/4.0*Safari*
Agent Mozilla/5.0 (Linux; U; Android 5.0.2; zh-CN; Redmi Note 3 Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 OPR/11.2.3.102637 Mobile Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*Android* Build/*)*AppleWebKit/*(*KHTML,*like Gecko*)*Version/4.0*Safari*
Agent Mozilla/5.0 (Linux; U; Linux Ventana; ru-ru; Transformer TF101 Build/HTK75) AppleWebKit/534.13 (KHTML, like Gecko) Chrome/8.0 Safari/534.13
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/412982
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/600.2.5 (KHTML, like Gecko) Version/8.0.2 Safari/600.2.5
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/8.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.89 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.65 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/600.5.17 (KHTML, like Gecko) Version/8.0.5 Safari/600.5.17
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/8.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/600.6.3 (KHTML, like Gecko) Version/8.0.6 Safari/600.6.3
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/8.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/602.2.14 (KHTML, like Gecko)
    Matched by: *
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:27.0) Gecko/20100101 Firefox/27.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:29.0) Gecko/20100101 Firefox/29.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:31.0) Gecko/20100101 Firefox/31.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/31.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:34.0) Gecko/20100101 Firefox/34.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/34.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:37.0) Gecko/20100101 Firefox/37.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/37.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:38.0) Gecko/20100101 Firefox/38.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/38.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:43.0) Gecko/20100101 Firefox/43.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/43.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:47.0) Gecko/20100101 Firefox/47.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/47.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2386.61 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/601.4.4 (KHTML, like Gecko) Version/9.0.3 Safari/601.4.4
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/9.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/50.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_4) AppleWebKit/601.5.17 (KHTML, like Gecko) Version/9.1 Safari/601.5.17
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/9.1* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/50.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/52.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.82 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/52.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2907.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/601.7.7 (KHTML, like Gecko) Version/9.1.2 Safari/601.7.7
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/9.1* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/602.1.43 (KHTML, like Gecko) Version/10.0 Safari/602.1.43
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/10.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/602.1.50 (KHTML, like Gecko)
    Matched by: *
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/602.2.14 (KHTML, like Gecko)
    Matched by: *
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/10.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/10.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:33.0) Gecko/20100101 Firefox/33.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/33.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:45.0) Gecko/20100101 Firefox/45.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/45.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:47.0) Gecko/20100101 Firefox/47.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/47.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:51.0) Gecko/20100101 Firefox/51.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.59 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.98 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.44 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko)
    Matched by: *
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/602.2.14 (KHTML, like Gecko) Version/10.0.1 Safari/602.2.14
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/10.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_1) AppleWebKit/603.1.10 (KHTML, like Gecko)
    Matched by: *
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_2) AppleWebKit/602.3.12 (KHTML, like Gecko) Version/10.0.2 Safari/602.3.12
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/10.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12) AppleWebKit/602.1.50 (KHTML, like Gecko)
    Matched by: *
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Safari/602.1.50
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/10.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/50.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.59.10 (KHTML, like Gecko) Version/5.1.9 Safari/534.59.10
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.59.8 (KHTML, like Gecko) Version/5.1.9 Safari/534.59.8
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/13.0.782.24 Safari/535.1
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.13+ (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:30.0) Gecko/20100101 Firefox/30.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/30.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_2) AppleWebKit/534.51.22 (KHTML, like Gecko) Version/5.1.1 Safari/534.51.22
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_2) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/14.0.835.186 Safari/535.1
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.71 (KHTML, like Gecko) Version/6.1 Safari/537.71
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/6.1* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.73.11 (KHTML, like Gecko) Version/6.1.1 Safari/537.73.11
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/6.1* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:34.0) Gecko/20100101 Firefox/34.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/34.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.65 Safari/537.31
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 1084) AppleWebKit/536.29.13 (KHTML like Gecko) Version/6.0.4 Safari/536.29.13
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/6.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.110 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/536.30.1 (KHTML, like Gecko) Version/6.0.5 Safari/536.30.1
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/6.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.71 (KHTML, like Gecko) Version/6.1 Safari/537.71
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/6.1* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.73.11 (KHTML, like Gecko) Version/6.1.1 Safari/537.73.11
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/6.1* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:43.0) Gecko/20100101 Firefox/43.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/43.0*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.68 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_1) AppleWebKit/537.73.11 (KHTML, like Gecko) Version/7.0.1 Safari/537.73.11
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/7.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_2) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/537.75.14
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/7.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.124 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.122 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2183.55 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9) AppleWebKit/537.71 (KHTML, like Gecko) Version/7.0 Safari/537.71
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/7.0* Safari/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:25.0) Gecko/20100101 Firefox/25.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:29.0) Gecko/20100101 Firefox/29.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/*
Agent Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:35.0) Gecko/20100101 Firefox/35.0
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/35.0*
Agent Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; zh-cn) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5
    Matched by: Mozilla/5.0 (*Mac OS X*) AppleWebKit/* (KHTML* like Gecko) *Version/* Safari/*
Agent Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; fr; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8
    Matched by: Mozilla/5.0 (*Mac OS X*) Gecko* Firefox/*
Agent Mozilla/5.0 (Mobile; Windows Phone 8.1; Android 4.0; ARM; Trident/7.0; Touch; rv:11.0; IEMobile/11.0; NOKIA; Lumia 930; Vodafone) like iPhone OS 7_0_3 Mac OS X AppleWebKit/537 (KHTML, like Gecko) Mobile Safari/537
    Matched by: Mozilla/5.0*(*Windows Phone 8.1*Trident/7.0*rv:11*IEMobile?11.0; NOKIA; Lumia 930*
Agent Mozilla/5.0 Moreover/5.1 (+http://www.moreover.com; webmaster@moreover.com)
    Matched by: *
Agent Mozilla/5.0 Project 25499 (project25499.com)
    Matched by: *
Agent Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaN95/31.0.017; Profile/MIDP-2.0 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413
    Matched by: *
Agent Mozilla/5.0 (Unknown; Linux x86_64) AppleWebKit/538.1 (KHTML, like Gecko) PhantomJS/2.1.1 Safari/538.1
    Matched by: *
Agent Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/* Safari/* Edge/13.*
Agent Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/50.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; rv:46.0) Gecko/20100101 Firefox/46.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:46.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:50.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; rv:52.0) Gecko/20100101 Firefox/52.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; Trident/7.0; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 10.0*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2301.96 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.10240
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/* Safari/* Edge/12.*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/* Safari/* Edge/14.*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.14970
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/* Safari/* Edge/15.*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36 FirePHP/4Chrome
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2922.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2922.1 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.14 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:40.0) Gecko/20100101 Firefox/40.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) Gecko* Firefox/40.0*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:48.0) Gecko/20100101 Firefox/48.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:48.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:49.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:50.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:51.0) Gecko/20100101 Firefox/51.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; Win64; x64; Trident/7.0; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 10.0*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64)
    Matched by: *
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.122 Safari/537.36 SE 2.X MetaSr 1.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36 OPR/30.0.1835.59 (Edition Rambler)
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko)*Chrome/*Safari/*OPR/30.0*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/45.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.93 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/45.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/46.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/47.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.103 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36 OPR/36.0.2130.32
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko)*Chrome/*Safari/*OPR/36.0*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/49.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/50.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/51.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/52.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.116 YaBrowser/16.10.0.2564 Yowser/2.5 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 YaBrowser/16.10.1.1114 Yowser/2.5 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36 OPR/41.0.2353.69
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML, like Gecko)*Chrome/*Safari/*OPR/41.0*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36 OPR/42.0.2393.85
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML, like Gecko)*Chrome/*Safari/*OPR/42.0*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) Gecko* Firefox/38.0*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) Gecko* Firefox/39.0*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*) Gecko* Firefox/40.0*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64; rv:41.0) Gecko/20100101 Firefox/41.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:41.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:43.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:44.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:46.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:49.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Windows NT 10.0*rv:50.0*) Gecko* Firefox*
Agent Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 10.0*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.46 Safari/535.11 MRCHROME
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/14.0.810.0 Safari/535.1
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1468.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36 OPR/26.0.1656.60
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/45.*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/49.*Safari/*
Agent Mozilla/5.0 (Windows NT 5.1; ru-RU; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:2.0b13pre) Gecko/20110223 Firefox/4.0b13pre
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:25.0) Gecko/20100101 Firefox/25.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:32.0) Gecko/20100101 Firefox/31.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:34.0) Gecko/20100101 Firefox/34.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:35.0) Gecko/20100101 Firefox/35.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:38.0) Gecko/20100101 Firefox/38.0 K-Meleon/76.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:43.0) Gecko/20100101 Firefox/43.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:47.0) Gecko/20100101 Firefox/47.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:48.0) Gecko/20100101 Firefox/48.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:6.0.2) Gecko/20100101 Firefox/6.0.2
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:7.0.1) Gecko/20100101 Firefox/7.0.1
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; rv:9.0.1) Gecko/20100101 Firefox/9.0.1
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.00
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; U; en) Opera 8.01
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1996.45 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 5.2; rv:43.0) Gecko/20100101 Firefox/43.0
    Matched by: *
Agent Mozilla/5.0 (Windows NT 5.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/49.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.0) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/14.0.792.0 Safari/535.1
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.17 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.0; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.0; rv:34.0) Gecko/20100101 Firefox/34.0
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) Gecko* Firefox/34.0*
Agent Mozilla/5.0 (Windows NT 6.0; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (Windows NT 6.0; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) Gecko* Firefox/50.0*
Agent Mozilla/5.0 (Windows NT 6.0; WOW64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/11.0.696.34 Safari/534.24
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.0; WOW64) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.91 Safari/534.30
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.0; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.0; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) Gecko* Firefox/40.0*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.5 (KHTML like Gecko) Chrome/19.0.1084.56 Safari/536.5
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.90 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.72 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36 OPR/20.0.1387.91
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 YaBrowser/14.10.2062.12521 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36 OPR/26.0.1656.60
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/47.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.21 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36 OPR/41.0.2353.69
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML, like Gecko)*Chrome/*Safari/*OPR/41.0*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Dragon/36.1.1.21 Chrome/36.0.1985.97 Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Iron/32.0.1750.1 Chrome/32.0.1750.1 Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Windows NT 6.1; rv:12.0) Gecko/ 20120405 Firefox/14.0.1
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:18.0) Gecko/20100101 Firefox/18.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:1.9) Gecko/20100101 Firefox/4.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:2.0b10pre) Gecko/20110113 Firefox/4.0b10pre
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:2.0b6pre) Gecko/20100903 Firefox/4.0b6pre Firefox/4.0b6pre
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20100101 Firefox/24.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:24.0) Gecko/20140329 Firefox/24.0 PaleMoon/24.4.2
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:25.0) Gecko/20100101 Firefox/25.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:28.0) Gecko/20100101 Firefox/28.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/31.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/32.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:34.0) Gecko/20100101 Firefox/34.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/34.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:35.0) Gecko/20100101 Firefox/35.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/35.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:38.0) Gecko/20100101 Firefox/38.0 K-Meleon/76.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/38.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:39.0) Gecko/20100101 Firefox/39.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/39.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:43.0) Gecko/20100101 Firefox/43.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/43.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:44.0) Gecko/20100101 Firefox/44.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/44.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:45.0) Gecko/20100101 Firefox/45.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/45.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/50.0*
Agent Mozilla/5.0 (Windows NT 6.1; rv:5.0) Gecko/20100101 Firefox/5.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/19.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; rv:9.0.1) Gecko/20100101 Firefox/9.0.1
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like C9CF7
    Matched by: Mozilla/5.0 (*Windows NT 6.1*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.1*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 6.1; U;WOW64; de;rv:11.0) Gecko Firefox/11.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.85 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.82 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/52.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.59 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:2.0b11pre) Gecko/20110128 Firefox/4.0b11pre
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:2.2a1pre) Gecko/20110324 Firefox/4.2a1pre
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:24.0) Gecko/20100101 Firefox/24.0 Waterfox/24.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:44.0) Gecko/20100101 Firefox/44.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/44.0*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:5.0) Gecko/20110619 Firefox/5.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64; Trident/7.0; CTL_IE11; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.1*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 6.1; Win64; x64; Trident/7.0; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.1*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/11.0.696.12 Safari/534.24
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534+ (KHTML, like Gecko) BingPreview/1.0b
    Matched by: *
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/15.0.874.121 Safari/535.2
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1468.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.72 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 YaBrowser/13.10.1500.9323 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36 OPR/16.0.1196.73
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML like Gecko) Chrome/35.0.1916.114 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36 OPR/26.0.1656.60
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.65 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.125 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 YaBrowser/15.12.1.6475 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/46.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/47.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/47.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36 OPR/34.0.2036.50
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko)*Chrome/*Safari/*OPR/34.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 YaBrowser/16.2.0.3539 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/47.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.103 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.82 Safari/537.36 OPR/35.0.2066.37
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko)*Chrome/*Safari/*OPR/35.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/51.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 YaBrowser/16.10.1.1114 Yowser/2.5 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36 OPR/41.0.2353.69
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML, like Gecko)*Chrome/*Safari/*OPR/41.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Dragon/36.1.1.21 Chrome/36.0.1985.97 Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Iron/29.0.1600.1 Chrome/29.0.1600.1 Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Maxthon/4.4.3.4000 Chrome/30.0.1599.101 Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Maxthon/4.4.4.600 Chrome/30.0.1599.101 Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:16.0) Gecko/20100101 Firefox/36.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/36.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:19.0) Gecko/20100101 Firefox/19.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0b11pre) Gecko/20110128 Firefox/4.0b11pre
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0b7) Gecko/20100101 Firefox/4.0b7
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:22.0) Gecko/20100101 Firefox/22.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.3) Gecko/20100101 Firefox/27.3
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/31.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20130401 Firefox/31.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/31.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/33.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/34.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/35.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/36.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/37.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/38.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.1
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/43.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/44.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/45.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/46.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/47.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/50.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.1*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; CTL_IE11; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.1*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.1*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML like Gecko) Chrome/27.0.1453.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36 QIHU 360SE; 360Spider
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2;en-US) AppleWebKit/537.36 (KHTML, live Gecko) Chrome/39.0.2206.79 Safari/537
    Matched by: *
Agent Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2477.75 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/45.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:27.0) Gecko/20100101 Firefox/27.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:36.0) Gecko/20100101 Firefox/36.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/36.0*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.58 Safari/537.31
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML like Gecko) Chrome/28.0.1469.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML like Gecko) Chrome/30.0.1599.69 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36 OPR/19.0.1326.63 (Edition Campaign 21)
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.5 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML like Gecko) Chrome/34.0.1847.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2227.1 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/46.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64; rv:19.0) Gecko/20100101 Firefox/19.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/34.0*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/35.0*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/36.0*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/44.0*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Windows NT 6.2*) Gecko* Firefox/50.0*
Agent Mozilla/5.0 (Windows NT 6.2; WOW64; Trident/7.0; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.2*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2049.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2220.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (Windows NT 6.3; Win64; x64; Trident/7.0; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.3*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.72 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.76 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1788.0 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.143 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.115 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.65 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/45.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/47.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.109 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:29.0) Gecko/20100101 Firefox/29.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/31.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:32.0) Gecko/20100101 Firefox/32.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/32.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/34.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:35.0) Gecko/20100101 Firefox/35.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/35.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/37.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/43.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:44.0) Gecko/20100101 Firefox/44.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/44.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/45.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Windows NT 6.3*) Gecko* Firefox/50.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.3*Trident/7.0*rv:11.0*
Agent Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko
    Matched by: Mozilla/5.0 (*Windows NT 6.3*Trident/7.0*Touch*rv:11.0*)*
Agent Mozilla/5.0 (Windows NT 8.1; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0
    Matched by: *
Agent Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; en-US)
    Matched by: Mozilla/5.0 (*MSIE 7.0*
Agent Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)
    Matched by: *
Agent Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US)
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en; rv:1.9.0.13) Gecko/2009073022 Firefox/3.5.2 (.NET CLR 3.5.30729) SurveyBot/2.3 (DomainTools)
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.1 (KHTML, like Gecko)Chrome/4.0.219.6 Safari/532.1
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.99 Safari/533.4
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.634.0 Safari/534.16
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en-us; rv:1.7.12) Gecko/20050919 Firefox/1.0.7
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 (.NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.8) Gecko/20100721 Firefox/3.6.8
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:2.0.1) Gecko/20110606 Firefox/4.0.1
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; it; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; pt-PT; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 (.NET CLR 3.5.30729)
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.0.7) Gecko/2009021910 Firefox/3.0.7 (.NET CLR 3.5.30729)
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.2.26) Gecko/20120128 Firefox/3.6.26 GTB7.1 ( .NET CLR 3.5.30729)
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9.2.2) Gecko/20100316 Firefox/3.6.2 (.NET CLR 3.5.30729)
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.172.30 Safari/530.5
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/534.17 (KHTML, like Gecko) Chrome/11.0.652.0 Safari/534.17
    Matched by: Mozilla/5.0 (*Windows*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3(.NET CLR 3.5.30729)
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.4
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 GTB6 (.NET CLR 3.5.30729)
    Matched by: Mozilla/5.0 (*Windows NT 6.0*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; en; rv:1.9.1.3) Gecko/20090824 Firefox/3.5.3(.NET CLR 3.5.30729)
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) *Version/* Safari/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.13 (KHTML, like Gecko) Chrome/9.0.597.107 Safari/534.13 BuiltWith/1.2
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent =Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.1) Gecko/20090718 Firefox/3.5.1
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.23) Gecko/20110920 Firefox/3.6.23
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.28)
    Matched by: *
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.28) Gecko/20120306 Firefox/3.6.28
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2b1) Gecko/20091014 Firefox/3.6b1 GTB5
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2b5) Gecko/20091204 Firefox/3.6b5
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; ru; rv:1.9.2.2) Gecko/20100316 Firefox/3.6.2 WebMoney Advisor
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; ru; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko* Firefox/*
Agent Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201
    Matched by: Mozilla/5.0 (*Windows NT 6.1*) Gecko*/*
Agent Mozilla/5.0 (Windows; Windows NT 5.1; en-US) Firefox/3.5.0
    Matched by: *
Agent Mozilla/5.0 (X11; CrOS i686 1660.57.0) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.46 Safari/535.19
    Matched by: *
Agent Mozilla/5.0 (X11; CrOS x86_64 6310.68.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.96 Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/50.0*
Agent Mozilla/5.0 (X11; FreeBSD amd64; rv:45.0) Gecko/20100101 Firefox/45.0
    Matched by: *
Agent Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.30 (KHTML, like Gecko) Ubuntu/10.10 Chromium/12.0.742.112 Chrome/12.0.742.112 Safari/534.30
    Matched by: *
Agent Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.34 (KHTML, like Gecko) Qt/4.8.4 Safari/534.34
    Matched by: *
Agent Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.11 (KHTML, like Gecko) Ubuntu/11.10 Chromium/17.0.963.65 Chrome/17.0.963.65 Safari/535.11
    Matched by: *
Agent Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.1 (KHTML, like Gecko) Ubuntu/10.04 Chromium/14.0.813.0 Chrome/14.0.813.0 Safari/535.1
    Matched by: *
Agent Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.66 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2303.22 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2315.18 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/31.0.1650.63 Chrome/31.0.1650.63 Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (X11; Linux i686 on x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1870.93 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux i686 on x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2447.81 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux i686 on x86_64; rv:28.0) Gecko/20100101 Firefox/28.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Linux i686; rv:17.0) Gecko/20100101 Firefox/17.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Linux i686; rv:21.0) Gecko/20100101 Firefox/21.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Linux i686; rv:3.0) Gecko/20100101 Goanna/20161003 PaleMoon/27.0.0b1
    Matched by: *
Agent Mozilla/5.0 (X11; Linux i686; rv:45.0) Gecko/20100101 Firefox/45.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/45.0*
Agent Mozilla/5.0 (X11; Linux ppc; rv:5.0) Gecko/20100101 Firefox/5.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/11.0.696.34 Safari/534.24
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/11.0.696.3 Safari/534.24
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.30 (KHTML, like Gecko) Ubuntu/10.10 Chromium/12.0.742.112 Chrome/12.0.742.112 Safari/534.30
    Matched by: *
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.34 (KHTML, like Gecko) Qt/4.8.2
    Matched by: *
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.34 (KHTML, like Gecko) Qt/4.8.2 Safari/534.34
    Matched by: *
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.11 (KHTML, like Gecko) Ubuntu/11.04 Chromium/17.0.963.65 Chrome/17.0.963.65 Safari/535.11
    Matched by: *
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.19 (KHTML, like Gecko) Ubuntu/11.10 Chromium/18.0.1025.142 Chrome/18.0.1025.142 Safari/535.19
    Matched by: *
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/14.0.803.0 Safari/535.1
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.9 Safari/536.5
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.114 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.57 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1787.44 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.99 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.111 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/47.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/48.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36 Google Favicon
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/49.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/50.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.86 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/50.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.116 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.89 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/53.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.100 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.59 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.71 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.90 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/54.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.75 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/55.*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko; Google Web Preview) Chrome/27.0.1453 Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/31.0.1650.63 Chrome/31.0.1650.63 Safari/537.36
    Matched by: *
Agent Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/53.0.2785.143 Chrome/53.0.2785.143 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko)*Chromium/53.*Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Linux x86_64) Gecko Firefox/5.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Linux x86_64; rv:18.0) Gecko/20100101 Firefox/18.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Linux x86_64; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Linux x86_64; rv:29.0) Gecko/20100101 Firefox/29.0 Iceweasel/29.0a2
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Linux x86_64; rv:45.0) Gecko/20100101 Firefox/45.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/45.0*
Agent Mozilla/5.0 (X11; Linux x86_64; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (X11; Linux x86_64; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/50.0*
Agent Mozilla/5.0 (X11; Linux x86_64; rv:51.0) Gecko/20100101 Firefox/51.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Ubuntu; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2446.66 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Ubuntu; Linux i686 on x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1907.88 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0) Gecko/20100101 Firefox/14.0.1
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:34.0) Gecko/20100101 Firefox/34.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/34.0*
Agent Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:42.0) Gecko/20100101 Firefox/42.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/42.0*
Agent Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/50.0*
Agent Mozilla/5.0 (X11; Ubuntu; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1992.77 Safari/537.36
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:25.0) Gecko/20100101 Firefox/25.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:26.0) Gecko/20100101 Firefox/26.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/47.0*
Agent Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:49.0) Gecko/20100101 Firefox/49.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/49.0*
Agent Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:50.0) Gecko/20100101 Firefox/50.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/50.0*
Agent Mozilla/5.0 (X11; U; Linux Core i7-4980HQ; de; rv:32.0; compatible; JobboerseBot; http://www.jobboerse.com/bot.htm) Gecko/20100101 Firefox/38.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/38.0*
Agent Mozilla/5.0 (X11; U; Linux i586; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.1 Safari/533.2
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.8) Gecko/20050511
    Matched by: *
Agent Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.16) Gecko/20120421 Firefox/11.0
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.4) Gecko/20100625 Gentoo Firefox/3.6.4
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; U; Linux i686; pt-BR; rv:1.9.0.15) Gecko/2009102815 Ubuntu/9.04 (jaunty) Firefox/3.0.15
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/533.2 (KHTML, like Gecko) Chrome/5.0.342.1 Safari/533.2
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.11 Safari/534.16
    Matched by: Mozilla/5.0 (*Linux*) AppleWebKit/* (KHTML* like Gecko) Chrome/*Safari/*
Agent Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.3) Gecko/20090913 Firefox/3.5.3
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.4) Gecko/20100614 Ubuntu/10.04 (lucid) Firefox/3.6.4
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2a1pre) Gecko/20090405 Firefox/3.6a1pre
    Matched by: Mozilla/5.0 (*Linux*) Gecko* Firefox/*
Agent Mozilla/5.0 zgrab/0.x
    Matched by: *
Agent Mozilla/6.0 (compatible)
    Matched by: *
Agent Mozilla/6.0 (compatible; MSIE 7.0a1; Windows NT 5.2; SV1)
    Matched by: *
Agent node-fetch/1.0 (+https://github.com/node-fetch/node-fetch)
    Matched by: *
Agent nutch-1.4/Nutch-1.4
    Matched by: *
Agent Opera/7.11 (Windows NT 5.1; U) [en]
    Matched by: *
Agent Opera/7.54 (Windows NT 5.1; U) [pl]
    Matched by: *
Agent Opera/7.60 (Windows NT 5.2; U) [en] (IBM EVV/3.0/EAK01AG9/LE)
    Matched by: *
Agent Opera/8.00 (Windows NT 5.1; U; en)
    Matched by: *
Agent Opera/8.01 (Windows NT 5.1)
    Matched by: *
Agent Opera/9.00 (Windows NT 4.0; U; en)
    Matched by: *
Agent Opera/9.00 (Windows NT 5.1; U; en)
    Matched by: *
Agent Opera/9.00 (Windows NT 5.1; U; ru)
    Matched by: *
Agent Opera/9.01 (Windows NT 5.1; U; en)
    Matched by: *
Agent Opera/9.0 (Windows NT 5.1; U; en)
    Matched by: *
Agent Opera/9.80 (Android; Opera Mini/13.0.2036/37.9093; U; az) Presto/2.12.423 Version/12.16
    Matched by: *
Agent Opera/9.80 (Android; Opera Mini/7.5.33725/37.9154; U; en) Presto/2.12.423 Version/12.16
    Matched by: *
Agent Opera/9.80 (SpreadTrum; Opera Mini/4.4.31492/37.9178; U; en) Presto/2.12.423 Version/12.16
    Matched by: *
Agent Opera/9.80 (Windows NT 5.1; U; en) Presto/2.10.229 Version/11.60
    Matched by: *
Agent Opera/9.80 (Windows NT 5.1; U; en) Presto/2.2.15 Version/10.10
    Matched by: *
Agent Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.9.168 Version/11.50
    Matched by: *
Agent Opera/9.80 (Windows NT 5.1; U; sk) Presto/2.10.229 Version/11.64
    Matched by: *
Agent Opera/9.80 (Windows NT 6.1; MRA 8.4 (build 7786)) Presto/2.12.388 Version/12.17
    Matched by: *
Agent Opera/9.80 (Windows NT 6.1; WOW64) Presto/2.12.388 Version/12.16
    Matched by: *
Agent Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.17
    Matched by: *
Agent Opera/9.80 (X11; Linux x86_64) Presto/2.12.388 Version/12.16
    Matched by: *
Agent panscient.com
    Matched by: *
Agent Pcore-HTTP/v0.24.5
    Matched by: *
Agent peopleman/1.6
    Matched by: *
Agent perl post
    Matched by: *
Agent Phantom.js bot
    Matched by: *
Agent PHP/5.2.00
    Matched by: *
Agent PHP/5.2.03
    Matched by: *
Agent PHP/5.2.04
    Matched by: *
Agent PHP/5.2.06
    Matched by: *
Agent PHP/5.2.07
    Matched by: *
Agent PHP/5.2.10
    Matched by: *
Agent PHP/5.2.12
    Matched by: *
Agent PHP/5.2.14
    Matched by: *
Agent PHP/5.2.15
    Matched by: *
Agent PHP/5.2.20
    Matched by: *
Agent PHP/5.2.21
    Matched by: *
Agent PHP/5.2.22
    Matched by: *
Agent PHP/5.2.26
    Matched by: *
Agent PHP/5.2.30
    Matched by: *
Agent PHP/5.2.32
    Matched by: *
Agent PHP/5.2.37
    Matched by: *
Agent PHP/5.2.38
    Matched by: *
Agent PHP/5.2.39
    Matched by: *
Agent PHP/5.2.42
    Matched by: *
Agent PHP/5.2.45
    Matched by: *
Agent PHP/5.2.47
    Matched by: *
Agent PHP/5.2.48
    Matched by: *
Agent PHP/5.2.49
    Matched by: *
Agent PHP/5.2.50
    Matched by: *
Agent PHP/5.2.52
    Matched by: *
Agent PHP/5.2.54
    Matched by: *
Agent PHP/5.2.55
    Matched by: *
Agent PHP/5.2.56
    Matched by: *
Agent PHP/5.2.61
    Matched by: *
Agent PHP/5.2.64
    Matched by: *
Agent PHP/5.2.67
    Matched by: *
Agent PHP/5.2.68
    Matched by: *
Agent PHP/5.2.71
    Matched by: *
Agent PHP/5.2.72
    Matched by: *
Agent PHP/5.2.73
    Matched by: *
Agent PHP/5.2.74
    Matched by: *
Agent PHP/5.2.76
    Matched by: *
Agent PHP/5.2.77
    Matched by: *
Agent PHP/5.2.79
    Matched by: *
Agent PHP/5.2.80
    Matched by: *
Agent PHP/5.2.82
    Matched by: *
Agent PHP/5.2.86
    Matched by: *
Agent PHP/5.2.89
    Matched by: *
Agent PHP/5.2.90
    Matched by: *
Agent PHP/5.2.91
    Matched by: *
Agent PHP/5.2.92
    Matched by: *
Agent PHP/5.2.95
    Matched by: *
Agent PHP/5.2.96
    Matched by: *
Agent PHP/5.3.02
    Matched by: *
Agent PHP/5.3.04
    Matched by: *
Agent PHP/5.3.10
    Matched by: *
Agent PHP/5.3.11
    Matched by: *
Agent PHP/5.3.14
    Matched by: *
Agent PHP/5.3.15
    Matched by: *
Agent PHP/5.{3|2}.{1|2|3|4|5|6|7|8|9|0}{1|2|3|4|5|6|7|8|9|0}
    Matched by: *
Agent PHP/5.3.22
    Matched by: *
Agent PHP/5.3.23
    Matched by: *
Agent PHP/5.3.25
    Matched by: *
Agent PHP/5.3.26
    Matched by: *
Agent PHP/5.3.30
    Matched by: *
Agent PHP/5.3.32
    Matched by: *
Agent PHP/5.3.34
    Matched by: *
Agent PHP/5.3.39
    Matched by: *
Agent PHP/5.3.41
    Matched by: *
Agent PHP/5.3.48
    Matched by: *
Agent PHP/5.3.49
    Matched by: *
Agent PHP/5.3.51
    Matched by: *
Agent PHP/5.3.53
    Matched by: *
Agent PHP/5.3.57
    Matched by: *
Agent PHP/5.3.58
    Matched by: *
Agent PHP/5.3.59
    Matched by: *
Agent PHP/5.3.61
    Matched by: *
Agent PHP/5.3.64
    Matched by: *
Agent PHP/5.3.65
    Matched by: *
Agent PHP/5.3.66
    Matched by: *
Agent PHP/5.3.67
    Matched by: *
Agent PHP/5.3.69
    Matched by: *
Agent PHP/5.3.73
    Matched by: *
Agent PHP/5.3.78
    Matched by: *
Agent PHP/5.3.79
    Matched by: *
Agent PHP/5.3.80
    Matched by: *
Agent PHP/5.3.81
    Matched by: *
Agent PHP/5.3.82
    Matched by: *
Agent PHP/5.3.86
    Matched by: *
Agent PHP/5.3.88
    Matched by: *
Agent PHP/5.3.89
    Matched by: *
Agent PHP/5.3.90
    Matched by: *
Agent PHP/5.3.91
    Matched by: *
Agent PHP/5.3.92
    Matched by: *
Agent PHP/5.3.97
    Matched by: *
Agent PHP/5.3.98
    Matched by: *
Agent PHPCrawl
    Matched by: *
Agent python-requests/2.11.1
    Matched by: *
Agent python-requests/2.12.3
    Matched by: *
Agent python-requests/2.2.1 CPython/2.7.6 Linux/3.13.0-24-generic
    Matched by: *
Agent python-requests/2.2.1 CPython/3.4.3 Linux/3.13.0-96-generic
    Matched by: *
Agent python-requests/2.4.3 CPython/3.4.2 Linux/3.16.0-4-amd64
    Matched by: *
Agent Python-urllib/1.17
    Matched by: *
Agent Python-urllib/2.6
    Matched by: *
Agent Python-urllib/2.7
    Matched by: *
Agent Qwantify/1.0
    Matched by: *
Agent redback/v0-570-g26f8c96
    Matched by: *
Agent RedesScrapy/0.24.1 (+http://g2pi.tsc.uc3m.es/es)
    Matched by: *
Agent rogerbot
    Matched by: *
Agent Ruby
    Matched by: *
Agent Safari/10602.2.14.0.7 CFNetwork/720.5.7 Darwin/14.5.0 (x86_64)
    Matched by: Safari/10???.* CFNetwork/*
Agent Safari/11602.1.50.0.10 CFNetwork/760.6.3 Darwin/15.6.0 (x86_64)
    Matched by: Safari/* CFNetwork/*
Agent Safari/11602.2.14.0.7 CFNetwork/760.6.3 Darwin/15.6.0 (x86_64)
    Matched by: Safari/* CFNetwork/*
Agent Safari/12602.1.50.0.10 CFNetwork/807.0.4 Darwin/16.0.0 (x86_64)
    Matched by: Safari/* CFNetwork/*
Agent Safari/12602.2.14.0.7 CFNetwork/807.1.3 Darwin/16.1.0 (x86_64)
    Matched by: Safari/* CFNetwork/*
Agent Safari%20Technology%20Preview/12603.1.10 CFNetwork/807.1.3 Darwin/16.1.0 (x86_64)
    Matched by: *
Agent SafeDNSBot (https://www.safedns.com/searchbot)
    Matched by: *
Agent SalesIntelligent (+https://www.salesintelligent.com)
    Matched by: *
Agent Scanbot
    Matched by: *
Agent Searchie/1.0 (a Storm-based crawler; https://www.searchie.org; admin@searchie.org)
    Matched by: *
Agent Sogou web spider/4.0(+http://www.sogou.com/docs/help/webmasters.htm#07)
    Matched by: *
Agent spiderman
    Matched by: *
Agent ; success; BB-code not working; message must go through moderation;
    Matched by: *
Agent Telesphoreo
    Matched by: *
Agent }__test|O:21:
    Matched by: *
Agent Tiny Tiny RSS/16.3 (638fdf7) (http://tt-rss.org/)
    Matched by: *
Agent Twitterbot/1.0
    Matched by: *
Agent User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31
    Matched by: *
Agent vebidoobot
    Matched by: *
Agent W3C_Validator/1.3 http://validator.w3.org/services
    Matched by: *
Agent WEBDAV Client
    Matched by: *
Agent Wget/1.15 (linux-gnu)
    Matched by: *
Agent Wget(linux)
    Matched by: *
Agent Windows-Media-Player/11.0.5721.5145
    Matched by: *
Agent Wotbox/2.01 (+http://www.wotbox.com/bot/)
    Matched by: *
Agent www.matthowlett.com
    Matched by: *
Agent WWW-Mechanize/1.73
    Matched by: *
Agent www.probethenet.com scanner
    Matched by: *
Agent ZmEu
    Matched by: *
