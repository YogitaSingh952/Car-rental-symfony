<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RentalRepository")
 */
class Rental
{
    // ...

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Car", inversedBy="rentals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $car;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="rentals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $customer;

   
}
