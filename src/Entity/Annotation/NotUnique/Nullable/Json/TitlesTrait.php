<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait TitlesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\TitlesTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=true)
     */
    protected ?array $titles = [];
}
