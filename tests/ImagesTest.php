<?php

use PHPUnit\Framework\TestCase;
use RtfHtmlPhp\Document;
use RtfHtmlPhp\Html\HtmlFormatter;

class ImagesTest extends TestCase
{
    public function testImages1()
    {
        $rtf = file_get_contents("tests/rtf/image1.rtf");
        $document = new Document($rtf);
        $formatter = new HtmlFormatter();
        $html = $formatter->format($document);

        $this->assertEquals(
            '<img src="data:image/jpeg;base64,'
            . '/9j/4AAQSkZJRgABAQEASABIAAD/2wBDABkRExYTEBkWFBYcGxkeJT4pJSIiJU'
            . 'w3Oi0+WlBfXllQV1ZkcJB6ZGqIbFZXfap+iJSZoaKhYXiwva+cu5CeoZr/2wBD'
            . 'ARscHCUhJUkpKUmaZ1dnmpqampqampqampqampqampqampqampqampqampqamp'
            . 'qampqampqampqampqampqampr/wAARCABNAGQDAREAAhEBAxEB/8QAGQAAAgMB'
            . 'AAAAAAAAAAAAAAAAAQIAAwQF/8QALhAAAgECAwYGAQUBAAAAAAAAAQIAAxESIT'
            . 'EEE0FRUpEiYWJxgaEyI0JDwdHh/8QAGAEBAQEBAQAAAAAAAAAAAAAAAAECAwT/'
            . 'xAAlEQEBAAICAgMAAAcAAAAAAAAAAQIRAyESMUFRcQQTIjJCYdH/2gAMAwEAAh'
            . 'EDEQA/AHwL0jtOjQ4F6R2kEsnSO0KFl6B2hdVBg6R2hBwr0jtCpgXpHaBCi9I7'
            . 'QhSi9I7QFKr0jtKgFV6R2gAqvIdoFFZVxaDTlCN8KUm8i6FELuFBAJ4mY5M/DG'
            . '5abxm1qkoTScWYTOOcznlHaddEexPjX5E3P9M5a+YXAdUN/LjLti4fQB+BErA3'
            . 'vABgKYQplAMIorfkPaEbjpI1EVLi8m3TxWLTDA8hCfiNTNUBWY7xPxbmORnlyx'
            . 'vFlvH1XfHKWdluVA3gBXgw0/5OuPJMv1bAKcVM6bc7j9IbHJx8x+JdX2RkYZqbi'
            . 'XbNw+iY+crA3gKYQphFFY+Ie0Dc2kKINgCQSAcwDa4mM5bLMfbtjZPa4Ns7PZKj'
            . 'IeliReeTy58esu3SfhnuhHgbLS75TUtzmvJqSFvTKtUwMC2TqDYAznMc5l4W+vV'
            . 'O/RFWljCqKqE6eMWM6ZXlwm7Zr8N77DChJUrUxA53e01LyWblhZAZUTM06o895L'
            . 'rk+4akLVpIlW12sVBzNyDNcWeWU3Wc/Gztj2qsNnZQAWvqRwnXbhce0TaEqcc+U'
            . 'su2bLD3lRRWIxD2hHRtcQoI1mzzHESVuUHXKzAEQdwEZ6eVNyB0nMTnlxY5e46T'
            . 'kvz2up1lsRUpWuMymY7Tz58Wc7xu3SZeXqgaLFb0mWoh5f5NY/xE9ZzTNx7+i7w'
            . 'jw1VYgadS/wCy+H+XHWt69r6a48sQdBmba/ImM+Wyas1Vt0z1SpVqrNnrb+p3wn'
            . 'jJImcjnH8yahJyztoJvc3289l1tmfAKhwC44yudtRdoqAkIcvONolWuWYFlF7a8'
            . '42rtiaUGW+Y1hShrZHsZFlGwOhseRheqniU8QYXuHQlxuwbMc0Pnynm5cfC+fx8'
            . 'u2Ge/YrVqfyAOo6h/cXhxs3hdG9XViwNS3QKPunq2IxHUDznn3l5/wBU8pGrLtk'
            . '2t3p1Aa9PwAEB10LHS/MCd8Ljf7Kl9MtNk3Lqx/UPPlO2u3K2aY9oILXFveVxqh'
            . 'ahS/nzjSLsSkAmwvGl1a7YnQGBCAdYUpS34mQQMVyMaamVgnA3EqeclnWmsbN7W'
            . 'NSO0C4ZVOji/wBieSZXi3je/r/jt9M+0VUZmf8AjUWHsJ24sfHHv2xne9MlTbql'
            . 'B0RQHQ5mm2YjPjl79U/m3bHUJxZnCdbcJuenHLulN/3L8rLuM2VSRdrDOVlrahk'
            . 'tmGnaZd7jZ1HXE6OQwDeFSBDY6yBCg4ZQpGU+fxJZK3jyZY+mfa6hCKKdK5BuQO'
            . 'QjSXLbAimrXZjlc3tymWEqgjW5HnCVWlRgbc40sq2nhY47aRNtSS9lqAFrmDW3b'
            . 'E6MDAMCQqQBIAYUjKDnCMm1bO1SzJa4+CZLEu2Bg6thqAr5mTSbQGzqEFxxa2pk'
            . '0q0gL4RkNYdZNdK3Oci11996fudXEd96fuBN96fuBN96fuBN96fuAN96fuQA1vT'
            . '9woGt6fuAhq+n7gI9RWUh0DDkYRjxBWIAOEaC8zWsZ2XHfM8ZK3jfkjNnpItr/9k=" />',
            $html
        );
    }
}
