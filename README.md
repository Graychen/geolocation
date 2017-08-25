# geolocation
composer包
根据经纬度得到地理位置信息，暂时还只有baidu地图api接口
# this is a library for generate string
[![Latest Stable Version](https://poser.pugx.org/graychen/geolocation/version)](https://packagist.org/packages/graychen/geolocation)
[![Total Downloads](https://poser.pugx.org/graychen/geolocation/downloads)](https://packagist.org/packages/graychen/geolocation)
[![License](https://poser.pugx.org/graychen/geolocation/license)](https://packagist.org/packages/graychen/geolocation)
[![StyleCI](https://styleci.io/repos/92368125/shield?branch=master)](https://styleci.io/repos/92368125)
[![Build Status](https://travis-ci.org/Graychen/yii2-post.svg?branch=master)](https://travis-ci.org/Graychen/yii2-post)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Graychen/geolocation/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Graychen/geolocation/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/Graychen/geolocation/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Graychen/geolocation/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Graychen/geolocation/badges/build.png?b=master)](https://scrutinizer-ci.com/g/Graychen/geolocation/build-status/master)



## how to use
``` php
<?php
namespace graychen\Tests;

use PHPUnit\Framework\TestCase;
use graychen\geolocation\BaiduGeolocation;

class BaiduGeolocationTest extends TestCase
{
    private $geolocation;

    public function setUp()
    {
        $this->geolocation=new BaiduGeolocation();
    }

    /**
     * Asserts that the container can set and get a simple closure with args.
     */
    public function testGetgeolocation()
    {
        $this->geolocation->latitude= "your latitude";
        $this->geolocation->longitude= "your longitude";
        $this->geolocation->ak= "your ak";
        $json_content=$this->geolocation->getGeolocation();
        $province=$json_content["result"]["addressComponent"]["province"];
        $this->assertEquals("江苏省", $province);
    }
}

```



