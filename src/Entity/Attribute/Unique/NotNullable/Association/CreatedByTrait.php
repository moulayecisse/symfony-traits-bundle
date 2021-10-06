<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Association;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

trait CreatedByTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Association\CreatedByTrait;

    #[ORM\ManyToOne(targetEntity: User::classt)]
    #[ORM\JoinColumn(unique: true, nullable: false)]
    protected UserInterface $createdBy;
}
