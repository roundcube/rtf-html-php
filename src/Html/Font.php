<?php

namespace RtfHtmlPhp\Html;

class Font
{
    public $family;
    public $name;
    public $charset;
    public $codepage;

    public function toStyle()
    {
        $list = array();

        if ($this->name) {
            $list[] = $this->name;
        }

        if ($this->family) {
            $list[] = $this->family;
        }

        if (sizeof($list) == 0) {
            return '';
        }

        return "font-family:" . implode(',', $list);
    }
}
