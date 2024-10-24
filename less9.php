<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Less9</title>
</head>

<body>
    <h1>Less9</h1>
    <p>Scope and constants</p>
    <h3>Scope</h3>
    <?php
    // 1. GLOBAL scope: $a is global scope
    $a = "ayu";
    echo $a;
    echo "<br />";

    function callAyu()
    {
        // you can access 
        global $a;
        // or you can do this (but rarely used)
        $b = $GLOBALS["a"];

        // 2. LOCAL scope: $b is local scope;
        $c = "budi";
        return "$a, $b, $c";
    }
    // echo $b; // error
    echo callAyu();
    echo "<br />";

    // 3. STATIC scope
    // perhatikan fungsi berkut;
    function callNum()
    {
        $d = 1;
        $d++;
        return $d;
    }
    echo callNum();
    echo callNum();
    echo callNum();
    echo "<br />";
    function incNum()
    {
        static $e = 1;
        $e++;
        return $e;
    }
    echo incNum();
    echo incNum();
    echo incNum();

    // 4. CLASS scope (we'll talk about this later)
    class MyClass
    {
        public $f = "fani";
        public function callFani()
        {
            return $this->f;
        }
    }

    ?>
    <h3>Constants</h3>
    <?php
    /*
jika menulis variable seperti berikut:
$name = "ahmad";
*/
    // berikut ini cara menulis constants
    // constants tidak bisa dihapus
    // secara konvensi constans ditulis dengan huruf kapital

    define("NAME", "ahmad");
    const AGE = 20;
    echo NAME . "<br />";
    echo AGE . "<br />";
    $name = "abdul";

    function callName()
    {
        return NAME;
    }

    echo callName();

    ?>
</body>

</html>