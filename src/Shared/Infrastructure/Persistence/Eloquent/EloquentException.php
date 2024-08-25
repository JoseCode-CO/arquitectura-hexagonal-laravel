<?php

namespace Core\Shared\Infrastructure\Persistence\Eloquent;

use Core\Shared\Infrastructure\InfrastructureException;

/**
 * Excepción específica para errores relacionados con Eloquent ORM.
 */
final class EloquentException extends InfrastructureException
{
    /**
     * Constructor para la excepción Eloquent.
     *
     * @param string $message Mensaje de la excepción.
     * @param int $code Código de la excepción (opcional).
     * @param \Throwable|null $previous Excepción previa (opcional).
     */
    public function __construct(
        string $message = "Error en la operación de Eloquent ORM",
        int $code = 0,
        \Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
