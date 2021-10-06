<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait IconTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\IconTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $icon = [];
}
