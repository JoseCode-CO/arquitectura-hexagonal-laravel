<?php

namespace Core\BoundedContext\Course\Application\Actions;

use Core\BoundedContext\Course\Application\Response\CoursesResponse;
use Core\BoundedContext\Course\Domain\CourseRepository;

class ListCourses
{
    // Propiedad privada para almacenar el repositorio de cursos
    private CourseRepository $repository;

    /**
     * Constructor de la clase ListCourses.
     *
     * @param CourseRepository $repository El repositorio de cursos.
     */
    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Maneja la acción de listar todos los cursos.
     *
     * @return CoursesResponse Una respuesta con la lista de cursos.
     */
    public function __invoke(): CoursesResponse
    {
        // Obtiene la lista de cursos del repositorio
        $courses = $this->repository->list();

        // Devuelve una respuesta con la lista de cursos
        return CoursesResponse::fromCourses($courses);
    }
}
