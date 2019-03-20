<?php

namespace CrowdStar\Iterators;

class Ranger implements \Iterator, \Countable
{
    /**
     * @var int
     */
    private $count;

    /**
     * @var int
     */

    private $start;
    /**
     * @var int
     */
    private $stop;

    /**
     * Ranger constructor.
     * @param int $start
     * @param int $stop
     */
    public function __construct($start, $stop)
    {
        $this->count = $start;
        $this->start = $start;
        $this->stop = $stop;
    }

    /**
     * @param int $start
     * @param int $end
     * @return static
     */
    public static function init($start, $end)
    {
        return new static($start, $end);
    }

    public function current()
    {
        return $this->count;
    }

    public function next()
    {
        $this->count++;
    }

    public function key()
    {
        $this->count;
    }

    public function valid()
    {
        return $this->count <= $this->stop;
    }

    public function rewind()
    {
        $this->count = $this->start;
    }

    public function sliceOnZero()
    {
        return array($this->start, 10);
    }

    public function count()
    {
        return $this->stop;
    }
}
