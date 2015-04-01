<?php

/**
 * Třída, umožňující generaci tabulky bez nutnosti psaní HTML.
 *
 * @author Ondřej Reichelt <O.Reichelt@email.cz>
 * @version 1.0
 * @package SI a WAP
 */
class tabulka {

    /**
     * Zde se ukládá hlavní název tabulky.
     * @var string 
     */
    private $nazev;

    /**
     * Zde jsou uloženy jednotlivé řádky tabulky.
     * @var array 
     */
    private $data = array();

    /**
     * Proměnná pro uložení nadpisů jednotlivých sloupců.
     * @var array 
     */
    private $nadpisy = array();

    /**
     * Zde se nastaví, jestli má být tabulka vykreslena s ohraničením.
     * @var boolean 
     */
    private $border = FALSE;

    /**
     * Metoda pro přidání dat do tabulky.
     * @param array $data Zadáme pole s údaji co budou v řádku.
     */
    function pridej($data) {
        $this->data[] = $data;
    }

    /**
     * Vygeneruje tabulku
     * @return string vrátí vygenerovanou tabulku.
     */
    function __toString() {
        $t = rand(0, 999999);
        $vratit = "";
        if ($this->border) {
            $vratit .= "<style>";
            $vratit .= ".a".$t.",.a".$t." tr,.a".$t." td,.a".$t." th {border: 1px black solid;}";
            $vratit .= "</style>";
        }
        $vratit .= "<table class='a".$t."'>";
        $vratit .= "<caption>";
        $vratit .= $this->nazev;
        $vratit .= "</caption>";
        $vratit .= "<tr>";
        foreach ($this->nadpisy as $nadpis) {
            $vratit .= "<th>";
            $vratit .= $nadpis;
            $vratit .= "</th>";
        }
        $vratit .= "</tr>";
        foreach ($this->data as $radek) {
            $vratit .= "<tr>";
            foreach ($radek as $data) {
                $vratit .= "<td>";
                $vratit .= $data;
                $vratit .= "</td>";
            }
            $vratit .= "</tr>";
        }
        $vratit .= "</table>";
        return $vratit;
    }

    /**
     * Nastavení nadpisů pro jednotlivé sloupce.
     * @param array $data zde zadejte pole s nadpisy.
     */
    function nadpisy($data) {
        $this->nadpisy = $data;
    }

    /**
     * Konstruktor třídy.
     * @param string $nazev Při tvorbě třídy musíte zadat název, který bude zobrazen nad tabulkou.
     */
    function __construct($meno, $border = FALSE) {
        $this->nazev = $meno;
        $this->border = $border;
    }

}
