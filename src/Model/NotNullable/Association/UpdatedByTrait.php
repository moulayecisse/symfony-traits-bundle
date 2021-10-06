<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Association;

use Symfony\Component\Security\Core\User\UserInterface;

trait UpdatedByTrait
{
    protected UserInterface $updatedBy;

    public function getUpdatedBy(): UserInterface
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(UserInterface $user): self
    {
        $this->updatedBy = $user;

        return $this;
    }
}
