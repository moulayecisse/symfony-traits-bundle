<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait PlaceholdersTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\PlaceholdersTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=true)
     */
    protected ?array $placeholders = [];
}
