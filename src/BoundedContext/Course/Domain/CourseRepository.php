<?php

namespace Core\BoundedContext\Course\Domain;

use Core\BoundedContext\Course\Domain\ValueObjects\CourseId;

interface CourseRepository
{
    /**
     * Obtiene la lista de cursos.
     *
     * @return Course[] Una lista de objetos Course.
     */
    public function list(): array;

    /**
     * Guarda un curso en el repositorio.
     *
     * @param Course $course El curso a guardar.
     */
    public function save(Course $course): void;

    /**
     * Encuentra un curso por su identificador.
     *
     * @param CourseId $id El identificador del curso.
     * @return Course|null El curso encontrado o null si no se encuentra.
     */
    public function find(CourseId $id): ?Course;

    /**
     * Elimina un curso por su identificador.
     *
     * @param CourseId $id El identificador del curso a eliminar.
     */
    public function delete(CourseId $id): void;
}
