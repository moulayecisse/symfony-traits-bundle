<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ButtonsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\ButtonsTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=true)
     */
    protected ?array $buttons = [];
}
