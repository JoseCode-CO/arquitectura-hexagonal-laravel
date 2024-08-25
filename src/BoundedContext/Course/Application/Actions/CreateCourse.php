<?php

namespace Core\BoundedContext\Course\Application\Action;

use Core\BoundedContext\Course\Domain\Course;
use Core\BoundedContext\Course\Domain\CourseRepository;
use Core\BoundedContext\Course\Domain\ValueObjects\CourseId;
use Core\BoundedContext\Course\Domain\ValueObjects\CourseName;
use Core\BoundedContext\Course\Application\Response\CourseResponse;
use Core\BoundedContext\Course\Domain\Exception\CourseAlreadyExists;
use Core\BoundedContext\Domain\CourseAlreadyExists as DomainCourseAlreadyExists;

final class CreateCourse
{
    // Propiedad privada para almacenar el repositorio de cursos
    private CourseRepository $repository;

    /**
     * Constructor de la clase CreateCourse.
     *
     * @param CourseRepository $repository El repositorio de cursos.
     */
    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Maneja la creación de un nuevo curso.
     *
     * @param string $id El identificador del curso.
     * @param string $name El nombre del curso.
     * @return CourseResponse Una respuesta con la información del curso creado.
     * @throws CourseAlreadyExists Si el curso ya existe.
     */
    public function __invoke(string $id, string $name): CourseResponse
    {
        // Crea un objeto CourseId a partir del identificador proporcionado
        $courseId = new CourseId($id);

        // Verifica si el curso ya existe
        $existingCourse = $this->repository->find($courseId);

        if (null !== $existingCourse) {
            // Si el curso ya existe, lanza una excepción
            throw new DomainCourseAlreadyExists();
        }

        // Si el curso no existe, crea un nuevo objeto Course
        $courseName = new CourseName($name);
        $course = new Course($courseId, $courseName);

        // Guarda el nuevo curso en el repositorio
        $this->repository->save($course);

        // Devuelve una respuesta con la información del curso creado
        return CourseResponse::fromCourse($course);
    }
}
