<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait TextsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\TextsTrait;

    #[ORM\Column(type: "json", unique: false, nullable: false)]
    protected array $texts = [];
}
