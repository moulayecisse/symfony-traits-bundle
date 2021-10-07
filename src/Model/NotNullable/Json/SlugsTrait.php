<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;

trait SlugsTrait
{
    protected array $slugs = [];

    public function getSlugs(): array
    {
        return $this->slugs;
    }

    public function setSlugs(array $slugs): self
    {
        $this->slugs = $slugs;

        return $this;
    }

    public function getSlugFr(): string
    {
        return $this->getSlug('fr');
    }

    public function getSlug(string $locale = null): string
    {
        return $this->slugs[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setSlugFr(string $slug): self
    {
        return $this->setSlug($slug, 'fr');
    }

    public function setSlug(string $slug, string $locale = null): self
    {
        $this->slugs[ApplicationUtility::locale($locale)] = $slug;

        return $this;
    }

    public function getSlugEn(): string
    {
        return $this->getSlug('en');
    }

    public function setSlugEn(string $slug): self
    {
        return $this->setSlug($slug, 'en');
    }
}
