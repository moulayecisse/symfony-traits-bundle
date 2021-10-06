<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Association;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

trait CreatedByTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Association\CreatedByTrait;

    #[ORM\ManyToOne(targetEntity: User::classt)]
    #[ORM\JoinColumn(unique: true, nullable: true)]
    protected ?UserInterface $createdBy;
}
