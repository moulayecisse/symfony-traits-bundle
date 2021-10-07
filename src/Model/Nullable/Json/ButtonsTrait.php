<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Json;

use Cisse\Bundle\TraitsBundle\Utility\ApplicationUtility;

trait ButtonsTrait
{
    protected ?array $buttons = [];

    public function getButtons(): ?array
    {
        return $this->buttons;
    }

    public function setButtons(array $buttons): self
    {
        $this->buttons = $buttons;

        return $this;
    }

    public function getButtonFr(): ?string
    {
        return $this->getButton('fr');
    }

    public function getButton(?string $locale = null): ?string
    {
        return $this->buttons[ApplicationUtility::locale($locale)] ?? '';
    }

    public function setButtonFr(?string $button): self
    {
        return $this->setButton($button, 'fr');
    }

    public function setButton(?string $button, ?string $locale = null): self
    {
        $this->buttons[ApplicationUtility::locale($locale)] = $button;

        return $this;
    }

    public function getButtonEn(): ?string
    {
        return $this->getButton('en');
    }

    public function setButtonEn(?string $button): self
    {
        return $this->setButton($button, 'en');
    }
}
