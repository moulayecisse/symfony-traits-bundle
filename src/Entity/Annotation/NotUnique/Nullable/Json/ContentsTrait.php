<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ContentsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\ContentsTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=true)
     */
    protected ?array $contents = [];
}
