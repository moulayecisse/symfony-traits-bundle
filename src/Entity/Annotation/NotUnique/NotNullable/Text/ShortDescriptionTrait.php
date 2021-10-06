<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ShortDescriptionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ShortDescriptionTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $shortDescription;
}
