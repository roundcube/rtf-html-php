<?php

use PHPUnit\Framework\TestCase;
use RtfHtmlPhp\Document;
use RtfHtmlPhp\Html\HtmlFormatter;

class FontFamilyTestTest extends TestCase
{
    public function testParseFontFamilyHtml()
    {
        $rtf = file_get_contents("tests/rtf/fonts.rtf");
        $document = new Document($rtf);
        $formatter = new HtmlFormatter();
        $html = $formatter->format($document);

        $this->assertEquals(
            '<p><span style="font-family:Arial,sans-serif;font-size:15px;">Hello, world.</span></p>',
            $html
        );

        $expected = <<<EOT
{
  WORD rtf (1)
  WORD ansi (1)
  WORD ansicpg (1252)
  WORD deff (0)
  WORD nouicompat (1)
  WORD deflang (1033)
  {
    WORD fonttbl (1)
    {
      WORD f (0)
      WORD fswiss (1)
      WORD fcharset (0)
      TEXT Arial;
    }
  }
  {
    SYMBOL * (0)
    WORD generator (1)
    TEXT Riched20 10.0.18362
  }
  WORD viewkind (4)
  WORD uc (1)
  WORD pard (1)
  WORD sa (200)
  WORD sl (276)
  WORD slmult (1)
  WORD fs (22)
  WORD lang (9)
  TEXT Hello, world.
  WORD par (1)
}

EOT;

        $this->assertSame($expected, (string) $document);
    }
}
