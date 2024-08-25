<?php

namespace Core\BoundedContext\Course\Application\Response;

use Core\BoundedContext\Course\Domain\Course;
use Core\BoundedContext\Course\Domain\Courses;

final class CoursesResponse
{
    public function __construct(private array $courses) {}

    public static function fromCourses(Courses $courses): self
    {
        // Convierte cada objeto Course en un objeto CourseResponse
        $courseResponses = array_map(
            function (Course $course) {
                return CourseResponse::fromCourse($course);
            },
            $courses->all() // Obtiene todos los cursos del objeto Courses
        );

        return new self($courseResponses); // Crea una nueva instancia de CoursesResponse
    }


    public function toArray(): array
    {
        // Convierte cada objeto CourseResponse a un array asociativo
        return array_map(function (CourseResponse $courseResponse) {
            return $courseResponse->toArray();
        }, $this->courses);
    }
}
