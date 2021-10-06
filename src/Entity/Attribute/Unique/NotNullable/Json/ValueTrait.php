<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ValueTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\ValueTrait;

    #[ORM\Column(type: "json", unique: true, nullable: false)]
    protected mixed $value;
}
