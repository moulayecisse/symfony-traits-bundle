<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullDescriptionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\FullDescriptionTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $fullDescription;
}
