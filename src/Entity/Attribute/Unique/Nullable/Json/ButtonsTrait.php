<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ButtonsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\ButtonsTrait;

    #[ORM\Column(type: "json", unique: true, nullable: true)]
    protected ?array $buttons = [];
}
