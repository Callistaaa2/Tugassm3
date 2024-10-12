<?php

    interface HasBrand{
        function getBrand(): string;
    }

    interface IsMaintenance{
        function isMaintenance(): bool;
    }

    interface car extends HasBrand{
        function drive(): void;
        function getTire(): int;
    }

    //implementasi interface pada class childnya
    class avanza implements car, IsMaintenance{
        public function drive(): void{
            echo "Drive Avanza" . PHP_EOL;
        }

        public function getTire(): int{
            return 4;
        }

        public function getBrand(): string{
            return "Toyota";
        }
        public function isMaintenance(): bool{
            return true;
        }

    }


?>