<?php

namespace App\Entity;

use App\Repository\SchoolClassRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SchoolClassRepository::class)
 */
class SchoolClass
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="school_class_id_seq", initialValue=1, allocationSize=1)
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Level;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $symbol;

    /**
     * @ORM\OneToOne(targetEntity=Teacher::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $HeadTeacher;

    /**
     * @ORM\OneToOne(targetEntity=Student::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $HeadStudent;

    /**
     * @ORM\OneToMany(targetEntity=Student::class, mappedBy="class")
     */
    private $students;

    /**
     * @ORM\Column(type="json")
     */
    private $basicTimetable = [];

    public function __construct()
    {
        $this->students = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevel(): ?int
    {
        return $this->Level;
    }

    public function setLevel(int $Level): self
    {
        $this->Level = $Level;

        return $this;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getHeadTeacher(): ?Teacher
    {
        return $this->HeadTeacher;
    }

    public function setHeadTeacher(Teacher $HeadTeacher): self
    {
        $this->HeadTeacher = $HeadTeacher;

        return $this;
    }

    public function getHeadStudent(): ?Student
    {
        return $this->HeadStudent;
    }

    public function setHeadStudent(Student $HeadStudent): self
    {
        $this->HeadStudent = $HeadStudent;

        return $this;
    }

    /**
     * @return Collection<int, Student>
     */
    public function getStudents(): Collection
    {
        return $this->students;
    }

    public function addStudent(Student $student): self
    {
        if (!$this->students->contains($student)) {
            $this->students[] = $student;
            $student->setClass($this);
        }

        return $this;
    }

    public function removeStudent(Student $student): self
    {
        if ($this->students->removeElement($student)) {
            // set the owning side to null (unless already changed)
            if ($student->getClass() === $this) {
                $student->setClass(null);
            }
        }

        return $this;
    }
    public function getBasicTimetable(): ?array
    {
        return $this->basicTimetable;
    }

    public function setBasicTimetable(array $basicTimetable): self
    {
        $this->basicTimetable = $basicTimetable;

        return $this;
    }
}
