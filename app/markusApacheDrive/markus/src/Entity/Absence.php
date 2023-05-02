<?php

namespace App\Entity;

use App\Repository\AbsenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AbsenceRepository::class)
 */
class Absence
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="absence_id_seq", initialValue=1, allocationSize=1)
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="json")
     */
    private $students = [];

    /**
     * @ORM\ManyToOne(targetEntity=SchoolSubject::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fk_id_school_lesson;

    /**
     * @ORM\ManyToOne(targetEntity=Teacher::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fk_teacher_id;

    /**
     * @ORM\Column(type="datetime",nullable=false, options={"default": "now()"})
     */
    private $date;

    /**
     * @ORM\Column(type="datetime",nullable=false, options={"default": "now()"})
     */
    private $ts;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudents(): ?array
    {
        return $this->students;
    }

    public function setStudents(array $students): self
    {
        $this->students = $students;

        return $this;
    }

    public function getFkIdSchoolLesson(): ?SchoolSubject
    {
        return $this->fk_id_school_lesson;
    }

    public function setFkIdSchoolLesson(?SchoolSubject $fk_id_school_lesson): self
    {
        $this->fk_id_school_lesson = $fk_id_school_lesson;

        return $this;
    }

    public function getFkTeacherId(): ?Teacher
    {
        return $this->fk_teacher_id;
    }

    public function setFkTeacherId(?Teacher $fk_teacher_id): self
    {
        $this->fk_teacher_id = $fk_teacher_id;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTs(): ?\DateTimeInterface
    {
        return $this->ts;
    }

    public function setTs(\DateTimeInterface $ts): self
    {
        $this->ts = $ts;

        return $this;
    }
}
