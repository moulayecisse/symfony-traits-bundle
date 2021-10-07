<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;

trait DescriptionsTrait
{
    protected ?array $descriptions = [];

    public function getDescriptions(): ?array
    {
        return $this->descriptions;
    }

    public function setDescriptions(array $descriptions): self
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    public function getDescriptionFr(): ?string
    {
        return $this->getDescription('fr');
    }

    public function getDescription(?string $locale = null): ?string
    {
        return $this->descriptions[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setDescriptionFr(?string $description): self
    {
        return $this->setDescription($description, 'fr');
    }

    public function setDescription(?string $description, ?string $locale = null): self
    {
        $this->descriptions[ApplicationUtility::locale($locale)] = $description;

        return $this;
    }

    public function getDescriptionEn(): ?string
    {
        return $this->getDescription('en');
    }

    public function setDescriptionEn(?string $description): self
    {
        return $this->setDescription($description, 'en');
    }
}
