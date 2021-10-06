<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait SlugsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\SlugsTrait;

    #[ORM\Column(type: "json", unique: false, nullable: true)]
    protected ?array $slugs = [];
}
