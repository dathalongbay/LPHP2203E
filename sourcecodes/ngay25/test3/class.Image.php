<?php
class Image {

    public $src = '';
    public $width = '';
    public $height = '';
    public $alt = '';

    public function __construct($paramSrc, $paramWidth, $paramHeight, $paramAlt)
    {
        $this->src = $paramSrc;
        $this->width = $paramWidth;
        $this->height = $paramHeight;
        $this->alt = $paramAlt;
    }

    public function render(){
        return '<img src="'.$this->src.'" width="'.$this->width.'" height="'.$this->height.'" alt="'.$this->alt.'" />';
    }

}