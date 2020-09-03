<!-- Snack 1 -->
<?php 

    $partite = [

        [

            "casa" => "Olimpia Milano",
            "ospite" => "Cantù",
            "punti-casa" => 55,
            "punti-ospite" => 60,
        ],
        [

            "casa" => "Treviso",
            "ospite" => "Trieste",
            "punti-casa" => 100,
            "punti-ospite" => 91,
        ],
        [

            "casa" => "Trento",
            "ospite" => "Venezia",
            "punti-casa" => 71,
            "punti-ospite" => 93,
        ],
        [

            "casa" => "Sassari",
            "ospite" => "Virtus",
            "punti-casa" => 102,
            "punti-ospite" => 15,
        ],
        
    ];

    for ($i=0; $i <= count($partite)-1; $i++){

        echo $partite[$i]["casa"] . " - " . $partite[$i]["ospite"] . " | " . $partite[$i]["punti-casa"] . " - " . $partite[$i]["punti-ospite"];
        echo "<br>";
    };

?> 

<!-- Snack 2 -->
<?php

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $eta = $_GET["eta"];

    echo $nome . "<br>" . $email ."<br>" . $eta . "<br>";

    if (strlen($nome) > 3 && strpos($email , "@") == true && strpos($email , ".") == true && is_numeric($eta) == true ){

        echo "Accesso riuscito";
    }else {

        echo "Accesso negato";

    }

?>

<!-- Snack 4 -->
<?php

    $arr = [];

    while (count($arr) < 15) {

        $num = rand(0 , 100);

        if (!in_array($num, $arr)) {

            $arr[] = $num;

        }

    };

    var_dump($arr);

?>
