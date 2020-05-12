<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    // Polecenie 2
        function writeName($myName){
            for($i=0; $i<10; $i++){
                echo $myName."<br>";
            }
        }
    writeName("Sylwia");


    // Polecenie 3
    function maxNumber(int $a, int $b, int $c){
       $d = $a;
     if($b>=$d) echo $b." "."Jest największą liczbą";
     elseif($c>=$d) echo $c." "."Jest największą liczbą";
     else echo $d." "."Jest największą liczbą";
    }
    maxNumber(23,3,100);
    ?>
    
</body>
</html>