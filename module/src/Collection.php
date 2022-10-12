<?php

namespace module\src;

use module\src\interfaces\CollectionInterface;

class Collection implements CollectionInterface
{

    private $elements = [];

    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }
    // __tostring được gọi khi sử dụng ojbect như 1 string
    public function __toString()
    {
        return implode($this->elements);
    }
    
    public function createFrom(array $element)
    {
        return new static($element);
    }

    public function filter($callBack)
    {
        // lọc với hàm callback
        return array_filter($this->elements, $callBack, ARRAY_FILTER_USE_BOTH);
    }

    public function add($element)
    {
        // Implement add() method.
        $this->elements[] = $element;
        return true;
    }

    public function last()
    {
        //  Implement last() method.
        return end($this->elements);
    }

    public function isEmpty()
    {
        //  Implement isEmpty() method.
        return empty($this->elements);
    }

    public function clear()
    {
        // Implement clear() method.
        $this->elements = [];
    }

    public function all()
    {
        return $this->elements;
    }

    public function count()
    {
        //  Implement count() method.
        return $this->count($this->elements);
    }

    public function toArray()
    {
        //  Implement toArray() method.
        $result = [];
        foreach ($this->elements as $element) {
            $result[] = $element->getAttributes();
        }
        return $result;
    }

    public function map($callBack)
    {
        //  Implement map() method.
        return array_map($callBack, $this->elements);
    }

    public function first()
    {
        //  Implement first() method.
        return reset($this->elements);
    }

    public function getIterator()
    {
        // Implement getiterator() method.
    }

    public function offsetExists($offset)
    {
        // Implement offsetExists() method.
        return isset($this->elements[$offset]);
    }

    public function offsetGet($offset)
    {
        //  Implement offsetGet() method.
        if ($this->offsetExists($offset)) {
            return $this->elements[$offset];
        }
        return null;
    }

    public function offsetSet($offset, $value)
    {
        // Implement offsetSet() method.
        $this->elements[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }


    // public function sortBy($key, $mode = 'asc')
    // {
    //     $items = $this->toArray();
    //     if (array_key_exists($key,$items[0])) {
    //         $mode = strtolower($mode);
    //         $array_column = array_column($items, $key);
    //         for ($i = 0; $i < count($array_column) - 1; $i++) {
    //             for ($j = $i + 1; $j < count($array_column); $j++) {
    //                 if ($mode === "asc") {
    //                     if ($array_column[$i] > $array_column[$j]) {
    //                         Helpers::swapArray($items[$i], $items[$j]);
    //                     }
    //                 } else {
    //                     if ($array_column[$i] < $array_column[$j]) {
    //                         Helpers::swapArray($items[$i], $items[$j]);
    //                     }
    //                 }
    //             }
    //         }
    //         return $items;
    //     }
    //     throw  new \Exception("The field is invalid. Please choose again!");
    // }

}