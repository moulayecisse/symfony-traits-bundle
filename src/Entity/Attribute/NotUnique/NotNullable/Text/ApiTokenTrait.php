<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ApiTokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ApiTokenTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $apiToken;
}