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
        $this->geolocation->latitude=33;
        $this->geolocation->longitude=120;
        $this->geolocation->ak="W21wGbOjjGvNAARxxkyWcNHWzVFNITX0";
        $json_content=$this->geolocation->getGeolocation();
        $province=$json_content["result"]["addressComponent"]["province"];
        $this->assertEquals("江苏省", $province);
    }
}
