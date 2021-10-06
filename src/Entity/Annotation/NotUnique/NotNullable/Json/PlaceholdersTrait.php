<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait PlaceholdersTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\PlaceholdersTrait;

    /**
     * @ORM\Column(type="json", unique=false, nullable=false)
     */
    protected array $placeholders = [];
}
