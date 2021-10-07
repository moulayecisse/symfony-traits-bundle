<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait EmailTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\EmailTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $email = null;
}
