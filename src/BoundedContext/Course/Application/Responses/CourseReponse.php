<?php

namespace Core\BoundedContext\Course\Application\Response;

use Core\BoundedContext\Course\Domain\Course;

final class CourseResponse
{
    // Propiedades privadas que representan los datos de respuesta del curso
    private string $id;
    private string $name;

    /**
     * Constructor de la clase CourseResponse.
     *
     * @param string $id El identificador del curso.
     * @param string $name El nombre del curso.
     */
    public function __construct(string $id, string $name)
    {
        $this->id = $id;  // Asigna el identificador del curso
        $this->name = $name;  // Asigna el nombre del curso
    }

    /**
     * Crea una instancia de CourseResponse a partir de un objeto Course.
     *
     * @param Course $course El objeto Course del cual se extraen los datos.
     * @return self Una nueva instancia de CourseResponse.
     */
    public static function fromCourse(Course $course): self
    {
        // Crea una nueva instancia de CourseResponse usando el identificador y nombre del curso
        return new self(
            $course->getId()->value(),  // Obtiene el valor del identificador del curso
            $course->getName()->value()  // Obtiene el valor del nombre del curso
        );
    }

    /**
     * Obtiene el identificador del curso.
     *
     * @return string El identificador del curso.
     */
    public function getId(): string
    {
        return $this->id;  // Retorna el identificador del curso
    }

    /**
     * Obtiene el nombre del curso.
     *
     * @return string El nombre del curso.
     */
    public function getName(): string
    {
        return $this->name;  // Retorna el nombre del curso
    }

    /**
     * Convierte la instancia a un array asociativo.
     *
     * @return array Un array asociativo con los datos del curso.
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,      // El identificador del curso
            'name' => $this->name,  // El nombre del curso
        ];
    }
}
