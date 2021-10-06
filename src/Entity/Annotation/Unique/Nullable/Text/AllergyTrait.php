<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait AllergyTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\AllergyTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=true)
     */
    protected ?string $allergy;
}
