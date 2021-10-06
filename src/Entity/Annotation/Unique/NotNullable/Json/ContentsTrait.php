<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait ContentsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\ContentsTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $contents = [];
}
