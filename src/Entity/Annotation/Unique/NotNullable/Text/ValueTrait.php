<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ValueTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ValueTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $value;
}
