<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ValueTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\ValueTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=false)
     */
    protected mixed $value;
}
