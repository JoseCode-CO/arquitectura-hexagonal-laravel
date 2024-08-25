<?php

namespace Core\BoundedContext\Course\Domain;

use Core\BoundedContext\Course\Domain\ValueObjects\{
    CourseId,
    CourseName,
};

class Course
{
    private CourseId $id;
    private CourseName $name;


    /**
     * Constructor para la clase Course.
     *
     * @param CourseId $id Identificador del curso.
     * @param CourseName $name Nombre del curso.
     */
    public function __construct(CourseId $id, CourseName $name)
    {
        $this->id = $id;
        $this->name = $name;
    }



    public static function fromPrimitives(string $id, string $name): self
    {
        return new self(
            new CourseId($id),
            new CourseName($name),
        );
    }


    public static function create(CourseId $id, CourseName $name): self
    {
        return new self($id, $name);
    }

    /**
     * Obtiene el identificador del curso.
     *
     * @return CourseId
     */
    public function getId(): CourseId
    {
        return $this->id;
    }

    /**
     * Obtiene el nombre del curso.
     *
     * @return CourseName
     */
    public function getName(): CourseName
    {
        return $this->name;
    }
}
