<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait ApiTokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\String\ApiTokenTrait;

    /**
     * @ORM\Column(type="string", length=255, unique=false, nullable=false)
     */
    protected string $apiToken;
}
