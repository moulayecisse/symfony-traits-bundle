<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Association;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

trait UpdatedByTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Association\UpdatedByTrait;

    /**
     * @ORM\ManyToOne(targetEntity: "App\Entity\User")
     * @ORM\JoinColumn(unique=false, nullable= false)
     */
    protected UserInterface $updatedBy;
}
