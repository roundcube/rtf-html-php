<?php 

namespace RtfHtmlPhp;

class Text extends Element
{
  public $text;

  /*
   * Create a new Text instance with string content.
   */
  public function __construct($text)
  {
    $this->text = $text;
  }

  public function toString($level)
  {
    return str_repeat("  ", $level) . "TEXT {$this->text}\n";
  }
}
