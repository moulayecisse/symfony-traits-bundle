<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SubTitleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\SubTitleTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=false)
     */
    protected string $subTitle;
}
