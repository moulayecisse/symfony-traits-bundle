<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BirthPlaceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\BirthPlaceTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $birthPlace;
}
