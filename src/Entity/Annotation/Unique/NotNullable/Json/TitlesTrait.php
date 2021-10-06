<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait TitlesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\TitlesTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $titles = [];
}
