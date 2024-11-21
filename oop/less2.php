<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Less2</title>
</head>

<body>
    <h1>PHP OOP Less2</h1>

    <!-- ##### VISIBILITY - GETTER - SETTER -->
    <h2>Visibility (public, protected, private), Getter, Setter</h2>
    <ul>
        <li>Visibility Public: Bisa diakses dimanapun</li>
        <li>Visibility Protected: Hanya bisa diakses di class itu sendiri dan turunannya</li>
        <li>Visibility Private: Hanya bisa diakses di class itu sendiri</li>
        <li>Sebaiknya property jangan diatur public. Adapun untuk mengaksesnya bisa dnegan getter dan setter sehingga bisa menambah validasi</li>
    </ul>

    <?php
    class Class_visibility
    {
        public $public_name;
        protected $protected_name;
        private $private_name;
        public function __construct($public_name = "default public name", $protected_name = "default protected name", $private_name = "default private name")
        {
            $this->public_name = $public_name;
            $this->protected_name = $protected_name;
            $this->private_name = $private_name;
        }
        // getter dan setter
        public function get_protected_name()
        {
            // contoh dengan validasi
            if (isset($this->protected_name)) return $this->protected_name;
            return "default protected name";
        }
        public function get_private_name()
        {
            return $this->private_name;
        }
        public function set_private_name($private_name)
        {
            $this->private_name = $private_name;
        }
    }
    class Class_visibility_child extends Class_visibility
    {
        public function get_protected_name_from_child()
        {
            return $this->protected_name;
        }
    }
    $obj_visibility_ahmad = new Class_visibility("public ahmad", "protected ahmad", "private ahmad");
    $obj_visibility_child_abdul = new Class_visibility_child("public abdul", "protected abdul", "private abdul");

    $obj_visibility_ahmad->set_private_name("private ahmad setted");
    ?>

    <?php echo "Public name: $obj_visibility_ahmad->public_name"; ?><br />
    <?php echo "Protected name: " . $obj_visibility_ahmad->get_protected_name(); ?><br />
    <?php echo "Private name: " . $obj_visibility_ahmad->get_private_name(); ?><br />
    <?php echo "Protected name from child: " . $obj_visibility_child_abdul->get_protected_name_from_child(); ?>


    <!-- ##### STATIC KEYWORD -->
    <h2>Static Keyword</h2>
    <ul>
        <li>Static keyword memungkinkan kita mengakses property dan method secara langsung dari class tanpa instansiasi object</li>
        <li>Nilai static akan selalu tetap meski object di-instansiasi berulang kali.</li>
        <li>Biasanya digunakan untuk membuat fungsi bantuan/helper atau di class-class utility pada framework.</li>
    </ul>
    <?php
    class Class_static
    {
        public static $number = 1;
        public static function inc_number()
        {
            return "Class statis number: " . self::$number++ . "<br />";
        }
    }
    echo Class_static::$number;
    echo "<br/>";
    echo Class_static::inc_number();
    echo Class_static::inc_number();

    $obj_static = new Class_static();
    echo $obj_static->inc_number();
    echo $obj_static->inc_number();
    $obj_static_2 = new Class_static();
    echo $obj_static_2->inc_number();
    echo $obj_static_2->inc_number();
    // contoh perbedaan nilai berubah dan tetap
    class Class_biasa
    {
        public $number = 1;
        public function inc_number()
        {
            return "Class biasa number: " . $this->number++ . "<br />";
        }
    }
    $obj_biasa = new Class_biasa();
    echo $obj_biasa->inc_number();
    echo $obj_biasa->inc_number();
    $obj_biasa_2 = new Class_biasa();
    echo $obj_biasa_2->inc_number();
    echo $obj_biasa_2->inc_number();
    ?>

    <!-- ##### CONSTANTS - MAGIC CONSTANTS -->
    <h2>Constants & Magic Constatns</h2>
    <ul>
        <li>dengan define dan const</li>
        <li>constants di dalam class terkait langsung dengan class walaupun tanpa keyword static</li>
        <li>magic constants: line, file, dir; function, class, trait, method, namespace</li>
    </ul>

    <?php
    class Class_constants
    {
        const NAMA = "ahmad";
    }
    echo Class_constants::NAMA;
    echo __LINE__ . "<br/ >";
    echo __FILE__ . "<br/ >";
    echo __DIR__ . "<br/ >";

    function cobaFunction()
    {
        echo __FUNCTION__;
    }
    cobaFunction();
    ?>
</body>

</html>