<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait DescriptionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\DescriptionTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $description;
}
