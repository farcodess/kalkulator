<?php

class Calc {
    public $expression;

    public function __construct(string $expression) {
        $this->expression = $expression;
    }

    public function calculator() {
        $result = eval('return ' . $this->expression . ';');
        return $result;
    }
}
?>