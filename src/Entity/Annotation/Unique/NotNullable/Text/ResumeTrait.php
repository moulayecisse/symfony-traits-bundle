<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ResumeTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\NotNullable\Text\ResumeTrait;

    /**
     * @ORM\Column(type="text", unique=true, nullable=false)
     */
    protected string $resume;
}
