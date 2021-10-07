<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ValueTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\ValueTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=true)
     */
    protected mixed $value = null;
}
