<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait PlaceholdersTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\PlaceholdersTrait;

    #[ORM\Column(type: "json", unique: false, nullable: true)]
    protected ?array $placeholders = [];
}
