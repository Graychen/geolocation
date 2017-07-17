<?php
namespace graychen\Geolocation; 
use graychen\Contracts\geolocationInterface;

class BaiduGeolocation implements geolocationInterface
{

    public function getGeolocation($latitude,$longitude){
        $url="http://api.map.baidu.com/geocoder/v2/?location=".$latitude.",".$longitude."&output=json&pois=1&ak=W21wGbOjjGvNAARxxkyWcNHWzVFNITX0";
        $file_contents=file_get_contents($url);
        $json_content=json_decode($file_contents, true);
        return $json_content;
    }
}
