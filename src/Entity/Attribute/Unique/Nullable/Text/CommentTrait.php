<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait CommentTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\CommentTrait;

    #[ORM\Column(type: "text", unique: true, nullable: true)]
    protected ?string $comment;
}
