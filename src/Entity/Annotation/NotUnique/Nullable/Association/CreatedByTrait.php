<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Association;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

trait CreatedByTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Association\CreatedByTrait;

    /**
     * @ORM\ManyToOne(targetEntity: User::classt)
     * @ORM\JoinColumn(unique=false, nullable= false)
     */
    protected ?UserInterface $createdBy;
}
