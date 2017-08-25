<?php
namespace graychen\contracts;

abstract class Geolocation
{
    public $latitude;

    public $longitude;

    public $ak;

    abstract public function getGeolocation();
}
