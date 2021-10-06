<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait SlugsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\SlugsTrait;

    #[ORM\Column(type: "json", unique: false, nullable: false)]
    protected array $slugs = [];
}
