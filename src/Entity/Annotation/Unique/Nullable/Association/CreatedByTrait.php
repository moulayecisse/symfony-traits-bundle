<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Association;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

trait CreatedByTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Association\CreatedByTrait;

    /**
     * @ORM\ManyToOne(targetEntity: "App\Entity\User")
     * @ORM\JoinColumn(unique=true, nullable= false)
     */
    protected ?UserInterface $createdBy = null;
}
