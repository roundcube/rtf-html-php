<?php

use PHPUnit\Framework\TestCase;
use RtfHtmlPhp\Document;

final class EmptyStringTest extends TestCase
{
  public function testParseEmptyString()
  {
    $document = new Document("");
    $this->assertTrue(true);
  }
}
