<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ContentsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\ContentsTrait;

    #[ORM\Column(type: "json", unique: true, nullable: true)]
    protected ?array $contents = [];
}
