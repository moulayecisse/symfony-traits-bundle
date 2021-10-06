<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LinkTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\LinkTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $link;
}
