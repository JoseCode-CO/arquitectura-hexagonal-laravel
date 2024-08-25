<?php

namespace Core\Shared\Domain;

/**
 * Clase que implementa la interfaz CollectionInterface.
 */
class Collection implements CollectionInterface
{
    /**
     * @var array
     */
    private array $items;

    /**
     * Constructor para inicializar la colección.
     *
     * @param array $items Un array opcional de elementos iniciales.
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * Obtiene todos los elementos de la colección.
     *
     * @return array
     */
    public function all(): array
    {
        return $this->items;
    }

    /**
     * Añade un elemento a la colección.
     *
     * @param mixed $item El elemento a añadir.
     * @return void
     */
    public function add($item): void
    {
        $this->items[] = $item;
    }

    /**
     * Elimina un elemento de la colección.
     *
     * @param mixed $item El elemento a eliminar.
     * @return void
     */
    public function remove($item): void
    {
        $this->items = array_filter($this->items, fn($i) => $i !== $item);
    }

    /**
     * Obtiene el número de elementos en la colección.
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->items);
    }
}
