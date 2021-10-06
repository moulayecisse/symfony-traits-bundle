<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait LabelsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\LabelsTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $labels = [];
}
