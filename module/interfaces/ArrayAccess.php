<?php
namespace module\interfaces\ArrayAccess;

interface ArrayAccess {
    public function offsetUnset($offset);
    public function offsetGet($offset);
    public function offsetExit($offset);
    public function offsetSet($offset,$value);
}
