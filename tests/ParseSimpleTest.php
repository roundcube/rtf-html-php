<?php

use PHPUnit\Framework\TestCase;
use RtfHtmlPhp\Document;
use RtfHtmlPhp\Html\HtmlFormatter;

class ParseSimpleTest extends TestCase
{
    public function testParseSimple()
    {
        $rtf = file_get_contents("tests/rtf/hello-world.rtf");
        $document = new Document($rtf);
        $this->assertTrue(true);
    }

    public function testParseSimpleHtml()
    {
        $rtf = file_get_contents("tests/rtf/hello-world.rtf");
        $document = new Document($rtf);
        $formatter = new HtmlFormatter();
        $html = $formatter->format($document);

        $this->assertEquals(
            '<p><span style="font-family:Calibri;font-size:15px;">Hello, world.</span></p>',
            $html
        );
    }
}
