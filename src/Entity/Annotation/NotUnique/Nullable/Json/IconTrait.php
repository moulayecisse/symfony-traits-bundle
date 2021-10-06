<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait IconTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\IconTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=true)
     */
    protected ?array $icon = [];
}
