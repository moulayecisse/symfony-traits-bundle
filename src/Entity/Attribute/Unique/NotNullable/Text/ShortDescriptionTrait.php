<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ShortDescriptionTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ShortDescriptionTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $shortDescription;
}
