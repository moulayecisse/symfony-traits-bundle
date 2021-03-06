<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ExtrasTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\ExtrasTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $extras = [];
}
