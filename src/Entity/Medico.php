<?php

namespace App\Entity;


use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping as ORM;

#[Entity]


class Medico implements \JsonSerializable
{
    #[Id]
    #[GeneratedValue]
    #[Column(type: "integer")]
    private $id;


    #[Column(type: "integer")]
    private  $crm;

    #[Column(type: "string")]
    private  $nome;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Especialidade $especialidade = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCrm(): ?int
    {
        return $this->crm;
    }

    public function setCrm(int $crm): self
    {
        $this->crm = $crm;
        return $this;
    }


    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }


    public function getEspecialidade(): ?Especialidade
    {
        return $this->especialidade;
    }

    public function setEspecialidade(?Especialidade $especialidade): self
    {
        $this->especialidade = $especialidade;

        return $this;
    }
    public function jsonSerialize()
    {
       return[
           'id'=> $this->getId(),
           'crm'=> $this->getCrm(),
           'nome'=> $this->getNome(),
           'especialidadeId'=> $this->getEspecialidade()->getId()
       ];
    }

}