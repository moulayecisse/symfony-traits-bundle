<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ContextsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\ContextsTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=true)
     */
    protected ?array $contexts = [];
}
