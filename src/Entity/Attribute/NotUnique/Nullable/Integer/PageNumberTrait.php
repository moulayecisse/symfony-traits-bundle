<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PageNumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\PageNumberTrait;

    #[ORM\Column(type: "integer", unique: false, nullable: true)]
    protected ?int $pageNumber;
}
