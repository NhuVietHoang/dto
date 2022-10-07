<?php
namespace module;
class Colection implements ColectionInternface {
    private $elements = [];
    public function __construct($elements){
        $this->elements = $elements;
    }
    //Phương thức __toString() sẽ được gọi khi chúng ta dùng đối tượng như một string.
    public function __toString(){
        return expolde($this->elements);
    }

    public function offsetUnset($offset){
        unset($this->elements[$offset]);
    }

    public function  offsetGet($offset){
        return isset($this->elements[$offset]) ? $this->elements[$offset] : null;
    }

    public function offsetExits($offset,$value){
        return isset($this->elements[$offset]);
    }
    public function offsetSet($offset,$value){
        if (is_null($offset)) {
            $this->elements[] = $value;
        } else {
            $this->elements[$offset] = $value;
        }
    }
    public function filter($callback){

    }
    public function clear(){

    }
    public function add($element){

    }
    public function createForm(){

    }
    public function slide($offset,$lenght){

    }
    public function first(){

    }
    public function last(){

    }
    public function count(){

    }
    public function toArray(){

    }
    public function map(){

    }



}
