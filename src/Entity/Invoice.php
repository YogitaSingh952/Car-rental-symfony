<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InvoiceRepository")
 */
class Invoice
{
    // ...

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Rental")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rental;

    
}