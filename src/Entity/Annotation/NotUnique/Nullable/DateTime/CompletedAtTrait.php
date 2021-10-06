<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait CompletedAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\CompletedAtTrait;

    /**
     * @ORM\Column(type="datetime", unique=false, nullable=true)
     */
    protected ?DateTime $completedAt;
}
