<?php

namespace App\Entity;

use App\Repository\HoursOfClassesAndBreaksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HoursOfClassesAndBreaksRepository::class)
 */
class HoursOfClassesAndBreaks
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="hours_of_classes_and_breaks_id_seq", initialValue=1, allocationSize=1)
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="json")
     */
    private $timesJson = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimesJson(): ?array
    {
        return $this->timesJson;
    }

    public function setTimesJson(array $timesJson): self
    {
        $this->timesJson = $timesJson;

        return $this;
    }
}
