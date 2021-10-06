<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait TitlesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\TitlesTrait;

    #[ORM\Column(type: "json", unique: true, nullable: true)]
    protected ?array $titles = [];
}
