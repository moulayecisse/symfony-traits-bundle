<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Text;

trait TemplateTrait
{
    protected ?string $template;

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(?string $template): self
    {
        $this->template = $template;

        return $this;
    }
}
