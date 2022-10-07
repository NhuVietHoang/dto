<?php
namespace module;
use module\interfaces\Jsosable;
use module\interfaces\Arrayable;
class Data implements Jsonable, Arrayable {
    use HasAttributes;

}
