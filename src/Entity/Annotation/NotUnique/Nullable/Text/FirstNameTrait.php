<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait FirstNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\FirstNameTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $firstName;
}
