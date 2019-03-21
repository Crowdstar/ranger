<?php

namespace CrowdStar\Tests\Ranger;

use CrowdStar\Iterators\Ranger;

/**
 * Tests for class \CrowdStar\Iterators\Ranger
 */
class RangerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function it_tests_a_ranger_is_iterable()
    {
        $ranger = Ranger::init(1, 20);
        $i = 0;

        foreach($ranger as $iteration) {
            $i++;
        }

        $this->assertEquals($i, 20);

    }

    /**
     * @test
     */
    public function it_tests_a_ranger_is_countable()
    {
        $ranger = Ranger::init(1, 20);
        $count = count($ranger);
        $this->assertEquals($count, 20);
    }
}
