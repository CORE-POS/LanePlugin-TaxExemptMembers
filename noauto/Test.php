<?php

use COREPOS\pos\lib\FormLib;

class Test extends PHPUnit_Framework_TestCase
{
    public function testPlugin()
    {
        $obj = new TaxExemptPlugin();
    }

    public function testAction()
    {
        $t = new TaxExemptMemAction();
        $this->assertEquals(true, $t->apply());
        $t->card_no = 1;
        $t->message = 'foo';
        $this->assertEquals(true, $t->apply());
    }
}

