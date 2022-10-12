# Simpale data to object
Thiết kế theo cấu trúc:
* https://drive.google.com/drive/u/0/folders/1iwA7oNz9jw1XTKS5IK_joTBIM7UW8LTS?lfhs=2
* https://docs.google.com/document/d/1UrV8g4zUOtdJGa4d3WaGHtst4uHkXRJN5ef-J5LjUW0/edit

Thực Hiện:Nhữ Việt Hoàng.

* Cách sử dụng : Dowload code và run tại : https://github.com/NhuVietHoang/dto

Kết quả :

```php
Nhu Viet Hoang
viethoangnhu@gmail.com
module\src\Collection Object ( [elements:module\src\Collection:private] => Array ( [0] => module\src\TestData Object ( [original:protected] => Array ( ) [casts:protected] => Array ( ) [attributes:module\src\Data:private] => Array ( [name] => Nhu Viet Hoang [age] => 22 [address] => Ha Nam ) ) [1] => module\src\TestData Object ( [original:protected] => Array ( ) [casts:protected] => Array ( ) [attributes:module\src\Data:private] => Array ( [name] => Nhu Hai Ngoc [age] => 28 [address] => Ha Nam ) ) [2] => module\src\TestData Object ( [original:protected] => Array ( ) [casts:protected] => Array ( ) [attributes:module\src\Data:private] => Array ( [name] => Hoang Thi Thom [age] => 27 [address] => Thanh Hoa ) ) [3] => module\src\TestData Object ( [original:protected] => Array ( ) [casts:protected] => Array ( ) [attributes:module\src\Data:private] => Array ( [name] => Nhu Hoang Minh Khoi [age] => 1 [address] => Ha Nam ) ) ) ) 

```

## Cấu trúc thư mục:
* index
* module :
 - Colection
 - Data
 - HasAtributes
 - User
 - Data
 - Interfaces:


# Interface, Abstract 

## Abstract class
* là 1 class, có các tính chất của 1 class
* chứa các phương thức trìu tượng.
* các class khi kế thừa lại abstract class thì phải định nghĩa lại các phương thức trìu tượng cả abstract class
* có 2 loại method là abstract method và method thường:
    - abstract method là method trống không có thực thi.
    - method thường là medthod có thực thi
* không thể khởi tạo đối tượng với abstract
* không hỗ trợ đã kế thừa
* Phương thức abstract của abstract class không được phép khai báo nội dung phương thức. Nó chỉ có thể định nghĩa tên cũng như các tham số đầu vào.
* Mức truy cập các hàm của abstract phải ở public hoặc protected để lớp kế thừa có thể định nghĩa lại và các thuộc tính của lớp abstract không được khai báo abstract. Ví dụ : khai báo 1 abstract class
VD:
```php
    abstract class BaseClass
    {
        // phương thức ở mức protected
        abstract protected function hello();
    
        // Phương thức ở mức public
        abstract public function hi();
    }
```
VD class kế thừa :
```php
    abstract class Person
    {
        protected $ten;
        protected $cmnd;
        protected $namsinh;
    
        abstract public function showInfo();
    }

    // class extends cần phải viết lại đầy đủ các hàm abstract
    class SinhVien extends Person
    {
        public function showInfo(){
    
        }
    }
```
## Interface

*   Interface là một Template (khuôn mẫu), nó không phải là một lớp đối tượng.
*   Để khai báo một Interface ta dùng từ khóa interface để thay cho từ khóa class.
*   Tất cả các hàm trong interface đều ở dạng khai báo và không được định nghĩa (giống lớp abstract).
*   Là cấu trúc trong OOP cho phép các class khác có thể implements.
*   Một đối tượng implement một interface thì nó phải khai báo và định nghĩa tất cả các hàm trong Interface.
*   Interface không thể khởi tạo.
*   Phương thức trong Interface bắt buộc toàn bộ là các phương thức trừu tượng.
*   Các phương thức trong Interface chỉ có thể được định nghĩa với khả năng là public và cũng không được định nghĩa nội dung.
*   Interface có thể được extends với nhau.
*   1 class có thể implements nhiều Interface.

VD:
```php
    interface MoveInterface
    {
        function run();
    }
    class Dog implements MoveInterface
    {
        public function run () 
        {
            echo 'Con chó chạy bằng 4 chân<br>';
        }
    }
    class Person implements MoveInterface
    {
        public function run ()
        {
            echo 'Loài người đi bằng 2 chân<br>';
        }
    }
    class Car implements MoveInterface
    {
        public function run ()
        {
            echo 'Xe hơi chạy bằng 4 bánh';
        }
    }
Dog::run();
Person::run();
Car::run();
?>
```
## Khi nào dùng interface , khi nào dùng abstract class
Khi một nhóm đối tượng có cùng bản chất kế thừa từ một class thì sử dụng abstract class.

Khi một nhóm đối tượng không có cùng bản chất nhưng chúng có hành động giống nhau thì sử dụng interface.

# Trait
* Traits hiểu đơn giản là một nhóm các methods mà bạn muốn include nó trong một class khác. Một Trait giống với abstract class không thể khởi tạo trên chính nó.

VD:
```php
    trait Sharable {

    public function share($item)
    {
        return 'share this item';
    }
}
```

* có thể include Trait trong class khác
```php 
    class Post {
    use Sharable;
    }

    class Comment {
        use Sharable;
    }

```
* Trait hoạt động như thế nào?
Như những gì bạn thấy ở ví dụ bên trên, cả hai đối tượng Post và Comment đều có sẵn method share() mặc dù nó không được định nghĩa.

Một Trait đơn giản chỉ là cách copy và paste code trong thời gian chạy.

Điều này có nghĩa là một Trait được sao chép vào class Post và Commment bởi vậy khi khởi tạo một đối tượng mới từ class đó, method share() đã có sẵn.

* Traits khác Abstract classes như thế nào?
Traits khác với Abstract class bởi vì chúng không phụ thuộc vào sự kế thừa.

Thử tưởng tượng nếu Post và Comment class kế thừa từ một Abstract class AbstractSocial. Chúng ta có thể muốn nhiều hơn việc chỉ share các posts hay comments trên web mạng xã hội, bởi vậy có lẽ chúng ta có lẽ sẽ sử dụng cây kế thừa phức tạp như sau:
```php
    class AbstractValidate extends AbstractCache {}
    class AbstractSocial extends AbstractValidate {}
    class Post extends AbstractSocial {}
```
* lợi ích
Lợi ích của việc sử dụng Trait đó là bạn giảm việc trùng lặp code trong khi không phải sử dụng đa kế thừa phức tạp mà không có ý nghĩa trong bối cảnh ứng dụng của bạn.

Điều này cho phép bạn xác định Traits đơn giản rõ ràng xúc tích và kết hợp nó trong những chức năng thích hợp.
