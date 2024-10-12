<?php

    interface car{
        function drive(): void;
        function getTire(): int;
    }

    //implementasi interface pada class childnya
    class avanza implements car{
        public function drive(): void{
            echo "Drive Avanza" . PHP_EOL;
        }

        public function getTire(): int{
            return 4;
        }

    }


?>