<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Text;

trait BriefContentTrait
{
    protected string $briefContent;

    public function getBriefContent(): string
    {
        return $this->briefContent;
    }

    public function setBriefContent(string $briefContent): self
    {
        $this->briefContent = $briefContent;

        return $this;
    }
}
