<?php
    class produkturunan extends product{
        public function info(){
            echo "Name $this->name" . PHP_EOL;
            echo "Price $this->price" . PHP_EOL;
        }
    }

?>