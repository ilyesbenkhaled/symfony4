<?php

namespace App\Entity;

use App\Repository\DateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DateRepository::class)
 */
class Date
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateofservice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateofservice(): ?\DateTimeInterface
    {
        return $this->dateofservice;
    }

    public function setDateofservice(\DateTimeInterface $dateofservice): self
    {
        $this->dateofservice = $dateofservice;

        return $this;
    }
}
