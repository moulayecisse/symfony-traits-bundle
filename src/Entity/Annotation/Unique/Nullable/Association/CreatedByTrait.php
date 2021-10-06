<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Association;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

trait CreatedByTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Association\CreatedByTrait;

    /**
     * @ORM\ManyToOne(targetEntity: "App\Entity\User")
     * @ORM\JoinColumn(unique=true, nullable= false)
     */
    protected ?UserInterface $createdBy;
}
