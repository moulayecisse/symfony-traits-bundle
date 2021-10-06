<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait DescriptionsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\DescriptionsTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $descriptions = [];
}
