<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait LastNameTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\LastNameTrait;

    /**
     * @ORM\Column(type="text", unique=false, nullable=true)
     */
    protected ?string $lastName;
}
