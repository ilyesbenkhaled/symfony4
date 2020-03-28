<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity( repositoryClass = "App\Repository\ContactRepository" )
*/

class Contact {
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue()
    * @ORM\Column( type = "integer" )
    */
    private $id;

    /**
    * @ORM\Column( type = "string", length = 255 )
    */
    private $firstname;

    /**
    * @ORM\Column( type = "string", length = 255 )
    */
    private $lastname;

    /**
    * @ORM\Column( type = "string", length = 255 )
    */
    private $email;

    /**
    * @ORM\Column( type = "integer" )
    */
    private $telephone;

    public function getId(): ?int {
        return $this->id;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname( string $firstname ) {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string {
        return $this->lastname;
    }

    public function setLastname( string $lastname ): self {
        $this->lastname = $lastname;

        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail( string $email ) {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int {
        return $this->telephone;
    }

    public function setTelephone( int $telephone ): self {
        $this->telephone = $telephone;

        return $this;
    }
}
