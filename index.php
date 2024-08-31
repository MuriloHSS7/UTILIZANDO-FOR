<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Utilizando o FOR</title>
    </head>
    <body>
        <?php
            for($X = 0; $X <= 10; $X++){
                if($X == 6) break; # PARA NO NÚMERO 6(ELE MOSTRA ATÉ O 5).
                echo"O número é: $X <br>";
            }
            echo "<br>--------------------------------------<br><br>"
        ?>
        <?php
            $cor = array("rosa","azul","verde","cinza");
            foreach($cor as $X){
                echo"$X <br>";
            }
            echo"<br>----------------------------------------<br><br>";
        ?> 
        <?php
            function mensagem(){
                echo "Nada é eterno!";
            }
            mensagem ();
            echo"<br><br>";
            function nome($sobrenome, $ano){
                echo"$sobrenome Murilo, nascido em $ano <br>";
            }
            nome ("Murilo","2003.");
            nome ("Miguel","2008.");
            echo "<br><br>";

            function sum($l,$h){
                $z = $l + $h;
                return $z;
            }
            echo"5 + 10 = " . sum(5,10) . "<br>";
            echo"7 + 13 = " . sum(7,13) . "<br>";
            echo"2 + 4 = " . sum(2,4) . "<br>"; 
            echo"<br><br>";
            function addnumeros(float $W, float $Q) : float{
                return $W + $Q;
            }
            echo addnumeros(1,2,7,3);
            echo "<br><br>";
            $carros = array("Lamborguini", 2.4, "BMW", "Porsh", "Mustang", "Chevett");
            var_dump($carros);
            echo"<br>--------------------------------------------------------<br>";
        ?>
        <?php
            echo $GLOBALS["v"];
            echo $v;
            echo "<br>";
            echo "<br>";
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
            echo $_REQUEST['firstname'];
        ?>
    </body>
</html>