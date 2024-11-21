<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Less1</title>
</head>

<body>
    <h1>PHP OOP Less1</h1>


    <!-- CLASS - OBJECT - PROPERTY - METHOD -->
    <h2>Class, Object, Property, Method</h2>
    <ul>
        <li>Class: Template untuk membuat object</li>
        <li>Object: Instance dari class</li>
        <li>Property: Variabel dari object</li>
        <li>Method: Fungsi dari object</li>
    </ul>
    <?php
    // CLASS
    class Class_basic
    {
        // PROPERTY

        // public $id;
        // public $name;
        // or you can write like this
        public $id = 1, $name = "default name";

        // METHOD
        public function callName($name)
        {
            return "hello $name, product name is $this->name";
        }
    };
    // OBJECT
    $obj_basic = new Class_basic();
    ?>
    <?= $obj_basic->id; ?><br />
    <?= $obj_basic->callName("John"); ?>


    <!-- CONSTRUCTOR - OBJECT TYPE -->
    <h2>Constructor, object type</h2>
    <ul>
        <li>Constructor: Fungsi yang dijalankan ketika object dibuat, default valui pindah ke parameter constructor</li>
        <li>Object type: Tipe data object</li>
    </ul>
    <?php
    class Class_constructor
    {
        public $name, $price;
        public function __construct($name = "default name", $price = 1000)
        {
            $this->name = $name;
            $this->price = $price;
        }
        public function callProduct($name)
        {
            return "Hello $name,Product name $this->name and price $this->price";
        }
    }

    $obj_constructor_laptop = new Class_constructor("Laptop", 5000000);
    $obj_constructor_tablet = new Class_constructor("Tablet", 1000000);

    class Class2Panggil
    {
        public function panggil(Class_constructor $class2)
        {
            return "Product name $class2->name and price $class2->price";
        }
    }

    $obj_constructor_panggil = new Class2Panggil();

    ?>
    <?= $obj_constructor_laptop->callProduct("Ahmad"); ?><br />
    <?= $obj_constructor_tablet->callProduct("ABdul"); ?><br />
    <?= $obj_constructor_panggil->panggil($obj_constructor_laptop); ?><br />
    <?= $obj_constructor_panggil->panggil($obj_constructor_tablet); ?>


    <!-- ##### INHERITACE - OVERRIDING -->
    <h2>Inheritance and overriding</h2>
    <ul>
        <li>Inheritance: Mewarisi property dan method dari class parent</li>
        <li>Overriding: Mengganti property dan method dari class parent</li>
    </ul>
    <?php
    // INHERITANCE
    class Class_parent
    {
        public $id, $name;
        public function __construct($id = 0, $name = "default name")
        {
            $this->id = $id;
            $this->name = $name;
        }
    }
    class Class_child_buku extends Class_parent
    {
        public $jml_hal = 80;
    }
    class Class_child_laptop extends Class_parent
    {
        public $ram = "8GB";
    }

    $obj_child_buku = new Class_child_buku(1, "buku cerita");
    $obj_child_laptop = new Class_child_laptop(2, "laptop asus");

    // OVERRIDING
    class Class_child_overriding extends Class_parent
    {
        public $price;
        public function __construct($id = 0, $name = "default name", $price = 0)
        {
            parent::__construct($id, $name);
            $this->price = $price;
        }
    }
    $obj_child_overriding = new Class_child_overriding(1, "produk pertama", 10000);
    ?>
    <?php echo "Book name: $obj_child_buku->name, Laptop name: $obj_child_laptop->name" ?><br />
    <?php echo "Product overriding: $obj_child_overriding->name, $obj_child_overriding->name, $obj_child_overriding->price"; ?>



</body>

</html>