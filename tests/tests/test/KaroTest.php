<?php

use PHPUnit\Framework\TestCase;

class KaroTest extends TestCase
{
    
    public function testReturnFullname()
    {
        $this->assertEquals('hamed', 'hamed');
    }

}