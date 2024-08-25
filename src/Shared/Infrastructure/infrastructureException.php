<?php

namespace Core\Shared\Infrastructure;

use Exception;

/**
 * Clase base abstracta para excepciones relacionadas con la infraestructura.
 */
abstract class InfrastructureException extends Exception
{
    /**
     * Constructor para la excepción de infraestructura.
     *
     * @param string $message Mensaje de la excepción.
     * @param int $code Código de la excepción (opcional).
     * @param \Throwable|null $previous Excepción previa (opcional).
     */
    public function __construct(
        string $message = "",
        int $code = 0,
        \Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
