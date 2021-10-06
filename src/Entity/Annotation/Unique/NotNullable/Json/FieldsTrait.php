<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait FieldsTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\FieldsTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $fields = [];
}
