<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait FirstNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\String\FirstNameTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=true)
     */
    protected ?string $firstName = null;
}
