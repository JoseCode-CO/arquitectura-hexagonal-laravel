<?php

namespace Core\Shared\Domain;

interface CollectionInterface
{
    /**
     * Obtiene todos los elementos de la colección.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Añade un elemento a la colección.
     *
     * @param mixed $item
     * @return void
     */
    public function add($item): void;

    /**
     * Elimina un elemento de la colección.
     *
     * @param mixed $item
     * @return void
     */
    public function remove($item): void;

    /**
     * Obtiene el número de elementos en la colección.
     *
     * @return int
     */
    public function count(): int;
}
