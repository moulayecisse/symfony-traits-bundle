<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CommentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\CommentTrait;

    #[ORM\Column(type: "text", unique: false, nullable: false)]
    protected string $comment;
}
