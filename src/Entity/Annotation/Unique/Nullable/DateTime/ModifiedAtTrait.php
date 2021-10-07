<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\DateTime;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait ModifiedAtTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\ModifiedAtTrait;

    /**
     * @ORM\Column(type="datetime", unique=true, nullable=true)
     */
    protected ?DateTime $modifiedAt = null;
}
