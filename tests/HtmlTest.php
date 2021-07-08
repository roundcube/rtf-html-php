<?php

use PHPUnit\Framework\TestCase;
use RtfHtmlPhp\Document;
use RtfHtmlPhp\Html\HtmlFormatter;

class HtmlTest extends TestCase
{
  public function testHtml1()
  {
    $rtf = file_get_contents("tests/rtf/html1.rtf");
    $document = new Document($rtf);
    $formatter = new HtmlFormatter();
    $html = $formatter->Format($document);

    $this->assertEquals(
      "<html><style>v\\:* {\tcolor:red;}\n</style>"
      . "<span style='font-size:11pt;'>&nbsp;</span>",
      $html
    );
  }

  public function testHtml2()
  {
    $rtf = file_get_contents("tests/rtf/html2.rtf");
    $document = new Document($rtf);
    $formatter = new HtmlFormatter();
    $html = $formatter->Format($document);

    $expected = <<<EOT
<HTML><head>
<style>
<!--
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal {font-family:Arial;}
-->
</style>
	<!-- This is a HTML comment.
There is a horizontal tab (%x09) character before the comment, 
and some new lines inside the comment. -->
</head>
<body>
<p
class="MsoNormal">Note the line break inside a P tag. <b>This is a bold text</b> 

</p>
<p class="MsoNormal">
This is a normal text with a character references:&nbsp; &lt; &uml;<br>

characters that have special meaning in RTF: {}\<br>


</p>
<ol>
    <li class="MsoNormal">This is a list item

</ol>
</body>
</HTML>

EOT;
    $this->assertEquals($expected, $html);
  }

  public function testHtml3()
  {
    $rtf = file_get_contents("tests/rtf/html3.rtf");
    $document = new Document($rtf);
    $formatter = new HtmlFormatter('UTF-8');
    $html = $formatter->Format($document);

    $expected = <<<EOT
<div dir="ltr">這是一個文本字符串<br>
זהו   מחרוזת  טקסט.<br clear="all"><div><br>

</div><div dir="ltr" class="gmail_signature" data-smartmail="gmail_signature"><div dir="ltr"><div><div dir="ltr"><div><div dir="ltr"><div dir="ltr"><div style="font-size:12.8px">This is your third encoding.... maybe?
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div>

EOT;
    $this->assertEquals($expected, $html);
  }
}
