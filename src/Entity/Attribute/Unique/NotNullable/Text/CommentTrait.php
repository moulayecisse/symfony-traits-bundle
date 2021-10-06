<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CommentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\CommentTrait;

    #[ORM\Column(type: "text", unique: true, nullable: false)]
    protected string $comment;
}
