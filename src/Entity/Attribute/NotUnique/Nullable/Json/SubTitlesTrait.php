<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait SubTitlesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\SubTitlesTrait;

    #[ORM\Column(type: "json", unique: false, nullable: true)]
    protected ?array $subTitles = [];
}
