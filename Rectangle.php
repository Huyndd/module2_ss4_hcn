<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 24/01/2019
 * Time: 09:29
 */

class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    //dien tich
    public function getArea()
    {
        return $this->width * $this->height;
    }

    //chu vi
    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
?>