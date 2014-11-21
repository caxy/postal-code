<?php

class PostalCode extends PHPUnit_Framework_TestCase
{
    public function testToState()
    {
        // Leading zeros for Holtsville, NY.
        $this->assertEquals('NY', \Caxy\PostalCode::toState('00501'));

        // Lower Manhattan
        $this->assertEquals('NY', \Caxy\PostalCode::toState('10271'));

        // Chicago loop
        $this->assertEquals('IL', \Caxy\PostalCode::toState('60607'));

        // Not a valid ZIP code.
        $this->assertNull(\Caxy\PostalCode::toState('00000'));
    }
}
