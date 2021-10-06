<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Association;

use Symfony\Component\Security\Core\User\UserInterface;

trait CreatedByTrait
{
    protected UserInterface $createdBy;

    public function getCreatedBy(): UserInterface
    {
        return $this->createdBy;
    }

    public function setCreatedBy(UserInterface $user): self
    {
        $this->createdBy = $user;

        return $this;
    }
}
