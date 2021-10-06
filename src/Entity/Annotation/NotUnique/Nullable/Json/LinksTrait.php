<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait LinksTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\LinksTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=true)
     */
    protected ?array $links = [];
}
