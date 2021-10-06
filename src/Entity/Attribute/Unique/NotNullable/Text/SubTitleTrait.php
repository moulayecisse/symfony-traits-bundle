<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait SubTitleTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\SubTitleTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $subTitle;
}
