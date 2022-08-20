<?php

namespace App\Entity;


use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

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

}