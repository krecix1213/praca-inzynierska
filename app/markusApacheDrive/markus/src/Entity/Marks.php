<?php

namespace App\Entity;

use App\Repository\MarksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MarksRepository::class)
 */
class Marks
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="marks_id_seq", initialValue=1, allocationSize=1)
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $mark;

    /**
     * @ORM\Column(type="integer")
     */
    private $weight;

    /**
     * @ORM\ManyToOne(targetEntity=Teacher::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fk_id_user_teacher;

    /**
     * @ORM\ManyToOne(targetEntity=Student::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fk_id_user_student;

    /**
     * @ORM\ManyToOne(targetEntity=SchoolSubject::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $fk_id_schoolSubject;

    /**
     * @ORM\Column(type="datetime", nullable=false, options={"default": "now()"})
     */
    private $ts;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMark(): ?float
    {
        return $this->mark;
    }

    public function setMark(float $mark): self
    {
        $this->mark = $mark;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getTeacher(): ?Teacher
    {
        return $this->fk_id_user_teacher;
    }

    public function setTeacher(?Teacher $fk_id_user_teacher): self
    {
        $this->fk_id_user_teacher = $fk_id_user_teacher;

        return $this;
    }

    public function getStudent(): ?Student
    {
        return $this->fk_id_user_student;
    }

    public function setStudent(?Student $fk_id_user_student): self
    {
        $this->fk_id_user_student = $fk_id_user_student;

        return $this;
    }

    public function getFkIdSchoolSubject(): ?SchoolSubject
    {
        return $this->fk_id_schoolSubject;
    }

    public function setFkIdSchoolSubject(?SchoolSubject $fk_id_schoolSubject): self
    {
        $this->fk_id_schoolSubject = $fk_id_schoolSubject;

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
