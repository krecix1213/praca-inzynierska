<?php

namespace App\Entity;

use App\Repository\SchoolSubjectRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SchoolSubjectRepository::class)
 */
class SchoolSubject
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="school_subject_id_seq", initialValue=1, allocationSize=1)
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $Shortcut;

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

    public function getShortcut(): ?string
    {
        return $this->Shortcut;
    }

    public function setShortcut(string $Shortcut): self
    {
        $this->Shortcut = $Shortcut;

        return $this;
    }
}
