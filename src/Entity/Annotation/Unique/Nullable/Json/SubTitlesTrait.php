<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Json;

use Doctrine\ORM\Mapping as ORM;

trait SubTitlesTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Json\SubTitlesTrait;

    /**
     * @ORM\Column(type="json", unique=true, nullable=true)
     */
    protected ?array $subTitles = [];
}
