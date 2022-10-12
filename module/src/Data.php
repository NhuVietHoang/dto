<?php

namespace module\src;

use module\src\interfaces\Arrayable;
use module\src\interfaces\Jsonable;

class Data implements Jsonable, Arrayable
{
    use  HasAttributes;

    public function toJsonable($option = 0)
    {
        // TODO: Implement toJson() method.

    }

    public function toArray()
    {
        // TODO: Implement toArray() method.


    }

    public static function from(array $attributes)
    {
        $instance = new static();
        return $instance->setAttributes($attributes);

    }
    // callback là truyền vào 1 hàm 1 hàm khác như 1 tham số với mục địch hàm chuyền vào sẽ được thực hiện trực hiện trược hoặc sau hàm được chuyền vào
    /*
    Hàm array_map  có các giá trị truyền vào gồm $callback – là hàm được gọi tới,
     $array1 là mảng được truyền vào, có thể truyền vào nhiều mảng khác nhau để xử lý. 
     Hàm này sẽ trả về kết quả dựa theo hàm callback được gọi tới
     */ 
    public static function collection(array $items)
    {
        $items = array_map(function ($item) {
            if ($item instanceof static) {
                return $item;
            }
            return static::from($item);


        }, $items);

        return new Collection($items);
    }


}

