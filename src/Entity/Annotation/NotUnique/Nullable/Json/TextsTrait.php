<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait TextsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\TextsTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=true)
     */
    protected ?array $texts = [];
}
