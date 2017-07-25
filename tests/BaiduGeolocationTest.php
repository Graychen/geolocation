<?php
namespace graychen\Tests;

use graychen\Geolocation\BaiduGeolocation;

class BaiduGeolocationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Asserts that the container can set and get a simple closure with args.
     */
    public function testGetGeolocation()
    {
        $geolocation=new BaiduGeolocation();
        $json_contetn=$geolocation->getGeolocation(33, 120);
        assert($json_contetn, 123);
    }
}
