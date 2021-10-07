<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Association;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

trait CreatedByTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Association\CreatedByTrait;

    /**
     * @ORM\ManyToOne(targetEntity: "App\Entity\User")
     * @ORM\JoinColumn(unique=true, nullable= false)
     */
    protected UserInterface $createdBy;
}
