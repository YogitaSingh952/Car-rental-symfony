<?php

namespace App\Entity;

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer
{
    // ...

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Rental", mappedBy="customer")
     */
    private $rentals;

   
}
