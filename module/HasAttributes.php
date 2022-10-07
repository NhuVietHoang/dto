<?php
namespace module;
Trait HasAttributes {
    protected $original = [];
    protected $attributes = [];
    protected $casts = [];
    protected static $default_casts = [];

    public function getsCast(){
        return $this->casts;
    }
    public function setAttributes($attributes){

    }
    public function getAttributes(){
        return $this->attributes;
    }
    public function castAttributes(){

    }
    public function serializeDate($date){

    }
    public function setAttribute($key,$value){

    }
    public function  __getName(){

    }
    public function getCatsTypes(){

    }
    public function isCastsAttributes($key){

    }
    public function GetOriginal(){
        return $this->original;
    }
    public function __set($key,$value){

    }
    public function getAttribute($original){

    }
    public function AttributesToArray(){

    }
}
