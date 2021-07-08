<?php

namespace RtfHtmlPhp;

class ControlWord extends Element
{
    public $word;
    public $parameter;

    public function toString($level)
    {
        return str_repeat("  ", $level) . "WORD {$this->word} ({$this->parameter})\n";
    }
}
