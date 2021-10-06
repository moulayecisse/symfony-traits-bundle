<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ContentsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\ContentsTrait;

    #[ORM\Column(type: "json", unique: false, nullable: false)]
    protected array $contents = [];
}
