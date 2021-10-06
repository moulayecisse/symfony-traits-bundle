<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CountryTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\CountryTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $country;
}
