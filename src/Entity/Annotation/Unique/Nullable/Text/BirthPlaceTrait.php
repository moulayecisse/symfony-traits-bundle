<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait BirthPlaceTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\BirthPlaceTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $birthPlace;
}
