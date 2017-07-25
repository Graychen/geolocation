<?php
namespace graychen\Geolocation;

use graychen\Contracts\geolocationInterface;

class BaiduGeolocation implements geolocationInterface
{
    public function getGeolocation()
    {
        $url="http://api.map.baidu.com/geocoder/v2/?location=".$this->latitude.",".$this->longitude."&output=json&pois=1&ak=".$this->ak;
        $file_contents=file_get_contents($url);
        $json_content=json_decode($file_contents, true);
        return $json_content;
    }
}
