<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PageNumberTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Integer\PageNumberTrait;

    /**
     * @ORM\Column(type="integer", unique=true, nullable=true)
     */
    protected ?int $pageNumber = null;
}
