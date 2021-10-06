<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait SlugsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\SlugsTrait;

    #[ORM\Column(type: "json", unique: true, nullable: true)]
    protected ?array $slugs = [];
}
