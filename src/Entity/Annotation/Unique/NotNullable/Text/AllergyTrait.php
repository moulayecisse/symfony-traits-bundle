<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AllergyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\AllergyTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $allergy;
}
