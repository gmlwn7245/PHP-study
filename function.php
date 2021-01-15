<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>function</title>
    </head>
    <body>
        <h1>function</h1>
        <?php 
            function basic(){
                print("Lorem ipsum dolor1<br>");
                print("Lorem ipsum dolor2<br>");
             }
             basic();
             basic();
        ?>
        <?php
            function sum($n1, $n2){
                print($n1+$n2."<br>");
            }
            sum(1,2);
            sum(3,4);
        ?>

        <?php
            function sum2($n1, $n2){
                return $n1+$n2."<br>";
            }
            echo "huiju num : ".sum2(1,2);
            echo "heeju num : ".sum2(3,4);
            file_put_contents('hello.txt', 'hi'.sum2(2,20));
        ?>
    </body>
</html>