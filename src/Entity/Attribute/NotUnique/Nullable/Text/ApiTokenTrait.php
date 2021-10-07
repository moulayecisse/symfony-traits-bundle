<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ApiTokenTrait
{
    use \Cisse\Bundle\TraitsBundle\Model\Nullable\Text\ApiTokenTrait;

    #[ORM\Column(type: "text", unique: false, nullable: true)]
    protected ?string $apiToken = null;
}
