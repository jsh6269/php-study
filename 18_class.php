<?php 
    class Student{
        private $name;
        private $age;

        // 클래스의 생성자
        public function __construct(){
            // 멤버변수 접근시 -> 사용 
            $this->name = "suhan";
            $this->age = 20;
        }

        public function greet(){
            echo "Hello, $this->name! I'm {$this->age} years old<br>";
        }

        public function addAge($age){
            $this->age += $age;
            return $this;
        }

        public static function factory(){
            // factory
            return new Student();
        }

        public static function adder($x, $y){
            return $x + $y;
        }

        public static function addFour($x, $y, $z, $w){
            // 클래스 변수, 메소드를 내부에서 사용시 self사용
            return self::adder(self::adder($x, $y), self::adder($z, $w));
        }
    }

    $stuA = new Student();
    $stuA->greet();

    // 클래스 메소드 사용
    Student::factory()->addAge(3)->greet();
    echo Student::addFour(1, 2, 3, 4);

?>