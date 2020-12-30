<?php

namespace App\Entity;

use App\Repository\StepRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StepRepository::class)
 */
class Step
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $amount;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress_a;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress_b;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zipe_code_a;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city_a;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $creditor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress_1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress_2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zip_code_or;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city_or;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->company_name;
    }

    public function setCompanyName(string $company_name): self
    {
        $this->company_name = $company_name;

        return $this;
    }

    public function getAdressA(): ?string
    {
        return $this->adress_a;
    }

    public function setAdressA(string $adress_a): self
    {
        $this->adress_a = $adress_a;

        return $this;
    }

    public function getAdressB(): ?string
    {
        return $this->adress_b;
    }

    public function setAdressB(string $adress_b): self
    {
        $this->adress_b = $adress_b;

        return $this;
    }

    public function getZipeCodeA(): ?string
    {
        return $this->zipe_code_a;
    }

    public function setZipeCodeA(string $zipe_code_a): self
    {
        $this->zipe_code_a = $zipe_code_a;

        return $this;
    }

    public function getCityA(): ?string
    {
        return $this->city_a;
    }

    public function setCityA(string $city_a): self
    {
        $this->city_a = $city_a;

        return $this;
    }

    public function getCreditor(): ?string
    {
        return $this->creditor;
    }

    public function setCreditor(string $creditor): self
    {
        $this->creditor = $creditor;

        return $this;
    }

    public function getAdress1(): ?string
    {
        return $this->adress_1;
    }

    public function setAdress1(string $adress_1): self
    {
        $this->adress_1 = $adress_1;

        return $this;
    }

    public function getAdress2(): ?string
    {
        return $this->adress_2;
    }

    public function setAdress2(string $adress_2): self
    {
        $this->adress_2 = $adress_2;

        return $this;
    }

    public function getZipCodeOr(): ?string
    {
        return $this->zip_code_or;
    }

    public function setZipCodeOr(string $zip_code_or): self
    {
        $this->zip_code_or = $zip_code_or;

        return $this;
    }

    public function getCityOr(): ?string
    {
        return $this->city_or;
    }

    public function setCityOr(string $city_or): self
    {
        $this->city_or = $city_or;

        return $this;
    }
}
