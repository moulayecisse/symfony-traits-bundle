<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ExtrasTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\ExtrasTrait;

    #[ORM\Column(type: "json", unique: false, nullable: true)]
    protected ?array $extras = [];
}
