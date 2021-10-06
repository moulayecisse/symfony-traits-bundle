<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait UpdatedAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\DateTime\UpdatedAtTrait;

    /**
     * @ORM\Column(type="datetime", unique=true, nullable=false)
     */
    protected DateTime $updatedAt;
}
