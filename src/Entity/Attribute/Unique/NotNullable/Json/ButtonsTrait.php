<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ButtonsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\ButtonsTrait;

    #[ORM\Column(type: "json", unique: true, nullable: false)]
    protected array $buttons = [];
}
