<?php
class Calculate {
    public $total = 0;

    public function add ($x) {
        return $this->total = $this->total + $x;
    }

    public function sub ($x) {
        return $this->total = $this->total - $x;
    }

    public function mult ($x) {
        return $this->total = $this->total * $x;
    }

    public function divide ($x) {
        return $this->total = $this->total / $x;
    }
}

?>