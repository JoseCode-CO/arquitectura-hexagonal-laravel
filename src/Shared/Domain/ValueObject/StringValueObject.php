<?php

declare(strict_types=1);

namespace Core\Shared\Domain\ValueObject;

// Definir la clase como abstracta, ya que no se debe instanciar directamente
abstract class StringValueObject
{
    // Propiedad protegida para almacenar el valor del objeto
    protected string $value;

    // Constructor para inicializar el valor del objeto
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    // Método para obtener el valor del objeto
    public function value(): string
    {
        return $this->value;
    }
}
