<?php

namespace Core\Shared\Domain;

/**
 * Interfaz para un generador de UUID.
 */
interface UuidGeneratorInterface
{
    /**
     * Genera un nuevo UUID.
     *
     * @return string El UUID generado.
     */
    public function generate(): string;
}
