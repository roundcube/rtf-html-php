<?php

use PHPUnit\Framework\TestCase;
use RtfHtmlPhp\Document;

class EmptyStringTest extends TestCase
{
  public function testParseEmptyString()
  {
    $document = new Document("");
    $this->assertTrue(true);
  }
}
