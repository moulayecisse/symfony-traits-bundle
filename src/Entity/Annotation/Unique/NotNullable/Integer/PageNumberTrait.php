<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PageNumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Integer\PageNumberTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=false)
     */
    protected int $pageNumber;
}
