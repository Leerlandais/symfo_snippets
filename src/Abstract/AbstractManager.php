<?php

namespace App\Abstract;

use Doctrine\ORM\EntityManagerInterface;

abstract class AbstractManager
{
    protected EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
}
