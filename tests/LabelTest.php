<?php

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use TexLab\Html\Label;

class LabelTest extends TestCase
{

    public function testLabel(): void
    {
        $this->assertIsString(
            (new Label())->html()
        );

        $this->assertEquals(
            "<label for='input22'>Hello!</label>",
            (new Label())
                ->setFor("input22")
                ->setInnerText('Hello!')
                ->html()
        );
    }
}
