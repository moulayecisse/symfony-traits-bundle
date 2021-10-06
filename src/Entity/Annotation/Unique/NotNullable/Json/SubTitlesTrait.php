<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait SubTitlesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Json\SubTitlesTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=false)
     */
    protected array $subTitles = [];
}
