<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="student_id_seq", initialValue=1, allocationSize=1)
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $Surname;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $NumberIdentGoverment;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $fk_id_user;

    /**
     * @ORM\ManyToOne(targetEntity=SchoolClass::class, inversedBy="students")
     */
    private $class;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->Surname;
    }

    public function setSurname(string $Surname): self
    {
        $this->Surname = $Surname;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(?string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getNumberIdentGoverment(): ?string
    {
        return $this->NumberIdentGoverment;
    }

    public function setNumberIdentGoverment(?string $NumberIdentGoverment): self
    {
        $this->NumberIdentGoverment = $NumberIdentGoverment;

        return $this;
    }

    public function getFkIdUser(): ?User
    {
        return $this->fk_id_user;
    }

    public function setFkIdUser(User $fk_id_user): self
    {
        $this->fk_id_user = $fk_id_user;

        return $this;
    }

    public function getClass(): ?SchoolClass
    {
        return $this->class;
    }

    public function setClass(?SchoolClass $class): self
    {
        $this->class = $class;

        return $this;
    }
}
