<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\String;

trait CommentTrait
{
    protected ?string $comment = null;

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
