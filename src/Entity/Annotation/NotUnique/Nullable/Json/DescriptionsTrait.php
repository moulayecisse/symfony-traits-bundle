<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait DescriptionsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\DescriptionsTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=true)
     */
    protected ?array $descriptions = [];
}
