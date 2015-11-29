[Tracy BlueScreen](https://tracy.nette.org) panel for Exception::__debugInfo for [Nette](https://nette.org)
===========================================================================================================

[![Build Status](https://img.shields.io/travis/nella/tracy-debug-info-nette/master.svg?style=flat-square)](https://travis-ci.org/nella/tracy-debug-info-nette)
[![SensioLabsInsight Status](https://img.shields.io/sensiolabs/i/0359efa5-f917-4808-9462-7362f496f815.svg?style=flat-square)](https://insight.sensiolabs.com/projects/0359efa5-f917-4808-9462-7362f496f815)
[![Latest Stable Version](https://img.shields.io/packagist/v/nella/tracy-debug-info-nette.svg?style=flat-square)](https://packagist.org/packages/nella/tracy-debug-info-nette)
[![Composer Downloads](https://img.shields.io/packagist/dt/nella/tracy-debug-info-nette.svg?style=flat-square)](https://packagist.org/packages/nella/tracy-debug-info-nette)
[![Dependency Status](https://img.shields.io/versioneye/d/user/projects/565b8b134052e8003b000001.svg?style=flat-square)](https://www.versioneye.com/user/projects/565b8b134052e8003b000001)
[![HHVM Status](https://img.shields.io/hhvm/nella/tracy-debug-info-nette.svg?style=flat-square)](http://hhvm.h4cc.de/package/nella/tracy-debug-info-nette)

Nette integration for [Tracy BlueScreen panel for Exception::__debugInfo](https://github.com/nella/tracy-debug-info).

Requirements
------------
- Tracy >=2.3.0 (2.3.x support will be removed on 31 Jan 2017)
- Nette\DI >=2.3.0 (2.3.x support will be removed on 31 Jan 2017)
- PHP >=5.5.0 (5.5.x support will be removed on 10 Jul 2016)

Installation
------------

```
composer require nella/tracy-debug-info-nette
```

Usage
------

```yaml

extensions:
	tracyDebugInfo: Nella\Tracy\DebugInfoExtension

```

License
-------
Tracy BlueScreen panel for Exception::__debugInfo is licensed under the MIT License - see the LICENSE file for details
