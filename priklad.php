<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabulka</title>
    </head>
    <body>
        <?php
        include 'tabulka.php';
        $tabulka = new tabulka("test", TRUE); //vytvoření tabulky s rámečkem
        $tabulka->nadpisy(array("test", "123asd", "dalsi")); // zadaní naspisů
        $tabulka->pridej(array("asd", "123asd", "asfasd asdf ")); // vložení položek tabulky
        $tabulka->pridej(array("asd", "123asd", "asfasd asdf")); // vložení položek tabulky
        $tabulka->pridej(array("asd", "123asd", "asfasd asdf")); // vložení položek tabulky
        echo $tabulka; // vypsání tabulky
        
        $tabulka1 = new tabulka("test"); //vytvoření tabulky
        $tabulka1->nadpisy(array("test", "123asd", "dalsi")); // zadaní naspisů
        $tabulka->pridej(array("asd", "123asd", "asfasd asdf ")); // vložení položek tabulky
        $tabulka->pridej(array("asd", "123asd", "asfasd asdf")); // vložení položek tabulky
        $tabulka->pridej(array("asd", "123asd", "asfasd asdf")); // vložení položek tabulky
        echo $tabulka1; // vypsání tabulky
        ?>
    </body>
</html>
