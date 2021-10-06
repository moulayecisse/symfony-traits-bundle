<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ExtrasTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\ExtrasTrait;

    #[ORM\Column(type: "json", unique: true, nullable: true)]
    protected ?array $extras = [];
}
