<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DescriptionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\DescriptionTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $description;
}
