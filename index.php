<?php

class Table {
    private $_rows;

    public function __construct() {
        $this->_rows = array();
    }

    public function append($row) {
        $this->_rows[] = $row;
    }

    public function draw() {
        echo '<table border="1">'.PHP_EOL; // Begin van de tabel, border voor de duidelijkheid

        foreach($this->_rows as $row) {
            echo '<tr>' . PHP_EOL;

            foreach($row->getCells() as $cell) {
                echo '<td>' . $cell->getContent() . '</td>' . PHP_EOL;
            }

            echo '</tr>' . PHP_EOL;
        }

        echo '</table>' . PHP_EOL;
    }
}

class Row {
    private $_cells;

    public function __construct() {
        $this->_cells = array();
    }

    public function append($cell) {
        $this->_cells[] = $cell;
    }

    public function getCells() {
        return $this->_cells;
    }
}

class Cell {
    private $_content;

    public function __construct($content) {
        $this->_content = $content;
    }

    public function getContent() {
        return $this->_content;
    }
}

/* Procedurele code */

$rowA = new Row();
$rowA->append(new cell('Dit is cel A1'));
$rowA->append(new cell('Dit is cel A2'));
$rowA->append(new Cell('Dit is cel A3'));

$rowB = new Row();
$rowB->append(new Cell('Dit is cel B1'));
$rowB->append(new Cell('Dit is cel B2'));
$rowB->append(new Cell('Dit is cel B3'));


$table = new Table();
$table->append($rowA);
$table->append($rowB);
$table->draw();


?>