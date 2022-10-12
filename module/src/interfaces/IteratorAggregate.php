<?php
namespace module\src\interfaces;

interface IteratorAggregate Extends Traveserable{
    public function getIterator();
}
