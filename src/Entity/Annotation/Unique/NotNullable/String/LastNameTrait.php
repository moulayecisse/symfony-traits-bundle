<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait LastNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\LastNameTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=false)
     */
    protected string $lastName;
}
