<?php

namespace iamopk\SpatieWeightConversionsCourse\Tests;

use iamopk\SpatieWeightConversionsCourse\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_pounds()
    {
        $pounds = Weight::kilograms(100)->toPounds();

        $this->assertEquals(220.46, $pounds);
    }
}
