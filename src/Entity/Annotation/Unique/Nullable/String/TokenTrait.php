<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;

trait TokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\String\TokenTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     */
    protected ?string $token = null;
}
