<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ApiTokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ApiTokenTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $apiToken;
}
