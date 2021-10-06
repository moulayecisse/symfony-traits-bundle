<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait LinksTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\LinksTrait;

    #[ORM\Column(type: "json", unique: false, nullable: false)]
    protected array $links = [];
}
