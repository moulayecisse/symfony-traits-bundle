<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ValueTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\ValueTrait;

    #[ORM\Column(type: "json", unique: true, nullable: true)]
    protected mixed $value = null;
}
