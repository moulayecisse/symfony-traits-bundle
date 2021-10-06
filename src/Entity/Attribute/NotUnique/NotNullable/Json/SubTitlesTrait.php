<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait SubTitlesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\SubTitlesTrait;

    #[ORM\Column(type: "json", unique: false, nullable: false)]
    protected array $subTitles = [];
}
