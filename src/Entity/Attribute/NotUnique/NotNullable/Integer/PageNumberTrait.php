<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PageNumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\PageNumberTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: false)]
    protected int $pageNumber;
}
