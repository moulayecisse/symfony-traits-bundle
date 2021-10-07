<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;

trait ContentsTrait
{
    protected ?array $contents = [];

    public function getContents(): ?array
    {
        return $this->contents;
    }

    public function setContents(array $contents): self
    {
        $this->contents = $contents;

        return $this;
    }

    public function getContentFr(): ?string
    {
        return $this->getContent('fr');
    }

    public function getContent(?string $locale = null): ?string
    {
        return $this->contents[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setContentFr(?string $content): self
    {
        return $this->setContent($content, 'fr');
    }

    public function setContent(?string $content, ?string $locale = null): self
    {
        $this->contents[ApplicationUtility::locale($locale)] = $content;

        return $this;
    }

    public function getContentEn(): ?string
    {
        return $this->getContent('en');
    }

    public function setContentEn(?string $content): self
    {
        return $this->setContent($content, 'en');
    }
}
