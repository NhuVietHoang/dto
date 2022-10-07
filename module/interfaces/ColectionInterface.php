<?php
namespace module\interfaces\ColectionInternface;

interface ColectionInterface Extends Countable, Arrayable,ArrayAccess, IteratorAggregate {
    public function isEmpty();
    public function filter($callback);
    public function clear();
    public function add($element);
    public function first();
    public function last();
    public function map($callback);
}