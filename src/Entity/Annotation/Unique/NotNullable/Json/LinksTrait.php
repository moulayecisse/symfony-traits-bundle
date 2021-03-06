<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait LinksTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\LinksTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $links = [];
}
