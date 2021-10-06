<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CityTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\CityTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $city;
}
