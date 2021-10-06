<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ContextsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\ContextsTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=false)
     */
    protected array $contexts = [];
}
