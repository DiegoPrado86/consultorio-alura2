<?php

namespace App\Entity;


use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping as ORM;

#[Entity]


class Medico
{
    #[Id]
    #[GeneratedValue]
    #[Column(type: "integer")]
    public $id;


    #[Column(type: "integer")]
    public  $crm;

    #[Column(type: "string")]
    public  $nome;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Especialidade $especialidade = null;

    public function getEspecialidade(): ?Especialidade
    {
        return $this->especialidade;
    }

    public function setEspecialidade(?Especialidade $especialidade): self
    {
        $this->especialidade = $especialidade;

        return $this;
    }


}