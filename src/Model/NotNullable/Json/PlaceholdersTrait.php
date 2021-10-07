<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;

trait PlaceholdersTrait
{
    protected array $placeholders = [];

    public function getPlaceholders(): array
    {
        return $this->placeholders;
    }

    public function setPlaceholders(array $placeholders): self
    {
        $this->placeholders = $placeholders;

        return $this;
    }

    public function getPlaceholderFr(): string
    {
        return $this->getPlaceholder('fr');
    }

    public function getPlaceholder(string $locale = null): string
    {
        return $this->placeholders[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setPlaceholderFr(string $placeholder): self
    {
        return $this->setPlaceholder($placeholder, 'fr');
    }

    public function setPlaceholder(string $placeholder, string $locale = null): self
    {
        $this->placeholders[ApplicationUtility::locale($locale)] = $placeholder;

        return $this;
    }

    public function getPlaceholderEn(): string
    {
        return $this->getPlaceholder('en');
    }

    public function setPlaceholderEn(string $placeholder): self
    {
        return $this->setPlaceholder($placeholder, 'en');
    }
}
