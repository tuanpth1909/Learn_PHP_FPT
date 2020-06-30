<!--Snippet1-->
<?php

function test1(int $x){
    echo 'integer $x = '.$x;
}
test1(10.124);
?>

<!--Snippet2-->
<HTML>
<BODY>
<?php
function test2(float $x){
    echo 'float $x = '.$x;
}
test2(true);
?>
</BODY>
<fHTML>

<!--    Snippet3-->
    <HTML>
    <BODY>
        <?php

     function test3(bool $a){
     echo $a;
      }
       test3(10.34);
     ?>
        </BODY>
    </HTML>

//    Snippet4
    <HTML>
    <BODY>
    <?php
    function test4(string $a){
    echo $a;
    }
    test4(10.1234);
    ?>
    </BODY>
    </HTML>


//    Snippet5
    <?php declare(strict_types=1);
    function test5(int $a]{

    echo $a;

    }

    test5(true);
    ?>



//    Snippet6
    <?php
$anon_class_obj = new class{
    public $greeting = 'hello';

    public $id = 754;

    const SETT = 'some configuration';
    public function getValuet()

    {

    // do some operation

    return 'some returned value';

    }

    public function getValueWithArg($str1)
    {

    // do some operation

    return 'returted value is '.$str1;
    }

    };
    echo '</br>';
    echo $anon_class_cbj—>greeting;
    echo '</br>';
    echo $anon_class_cbj->Id;
    echo '</br>';
    echo $anon_class_cbj::SBTT;
    echo '</br>';
    echo $anon_class_cbj—>getValue();
    echo '</br>';
    echo $anon_class_obj->getValueWithArg('Aptech');
    echo '</br>';
    echo '</br>';
    ?>
}
