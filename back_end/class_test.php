<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>class_test</title>
</head>
<body>
    <?php
        class Person
        {
            public static $name = "Nam";
            public $age;
            public $address;
            public $color;
            function __construct() {
                $this->name = "Huy";
                $this->age = 19;
                $this->address = "Cau_Giay";
                $this->color = "red";
                // echo 'Thong tin User:'
                // . "<br> 1. Name: " . $this->name
                // . "<br> 2. Age: " . $this->age 
                // . "<br> 3. Address: " . $this->address 
                // . "<br> 4. Color: " . $this->color; 
            }
            // public function setColor($color) {
            //     $this->color = $color;
            // }
            protected function getName() {
                return $this->name;
            }

            protected function getAge() {
                return $this->age;
            }

            protected function getAddress() {
                return $this->address;
            }

            protected function getColor() {
                return $this->color;
            }

            public static function sayHello() {
                return "hello world!";
            }          

            public function getInfo() {
                echo 'Thong tin User:'
                . "<br> 1. Name: " . $this->name
                . "<br> 2. Age: " . $this->age 
                . "<br> 3. Address: " . $this->address 
                . "<br> 4. Color: " . $this->color; 
            }          
        }
        $aaa = new Person();
        echo $aaa->name;

        // class Clothes extends Person 
        // {
        //     // function __construct() {
        //     //     parent::__construct();
        //     // }

        //     // public function message() {
        //     //     // echo "Am I a fruit or a berry? <br> "
        //     //     echo 'Thong tin User:'
        //     //     . "<br> 1. Name: " . $this->getName()
        //     //     . "<br> 2. Age: " . $this->getAge() 
        //     //     . "<br> 3. Address: " . $this->address 
        //     //     . "<br> 4. Color: " . $this->color
        //     //     . "<br> 5. He say: " . $this->sayHello();
        //     // }

        //     // public function display() {
        //     //     return $this->message();
        //     // }
        // }

        
        // $Say = new Person();
        // $Nam->getInfo();
        // echo $Say->sayHello();        

        // $Nam->message();      
        // // $Nam = new Person();
        // // $Nam->setColor("yellow");
        // $Nam->getInfo();
        // $Said = new Person();  
        // echo "<br> He is say: " . $Said->sayHello();

        

        
        //     public function getType() {
        //         return $this->type;
        //     }

        //     public function getInfo() {
        //         echo "1.Name: " . $this->getName() . "<br>"
        //         . "2.Age: " . $this->getAge() . "<br>"
        //         . "3.Address: " . $this->getTest() . "<br"
        //         . ""
                
        //     }
        // }

        // echo 'Thong tin Person: <br>';        
        // $person = new Clothes("Huy", "27", "Cau_Giay", "Do", "So_mi");
        // $Info = $person->getInfo();
        // echo $Info;

    ?>

</body>
</html>
