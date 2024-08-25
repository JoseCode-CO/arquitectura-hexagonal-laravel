<?php

namespace Core\Shared\Domain;

use Exception;

abstract class DomainException extends Exception
{
    /*public function someMethod($value)
    {
        if ($value < 0) {
            throw new DomainException("El valor no puede ser negativo.");
        }

        // Resto del código...
    }*/
}

// Ejemplo de uso
/*try {
    $domainClass = new SomeDomainClass();
    $domainClass->someMethod(-1);
} catch (DomainException $e) {
    echo "Se produjo un error del dominio: " . $e->getMessage();
}*/
