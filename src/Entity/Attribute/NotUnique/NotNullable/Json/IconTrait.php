<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait IconTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\IconTrait;

    #[ORM\Column(type: "json", unique: false, nullable: false)]
    protected array $icon = [];
}
