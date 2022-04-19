<?php 

// fechamento opcional - a própria documentação recomenda não fechar o comando php caso esteja em um arquivo com apenas php
/* ?> */ 

define("ESCOLA", "Senac");
$curso = "Técnico em informática para Internet";
$tecnologias = ["HTML", "CSS", "JS", "PHP"];

function verificaIdade(int $idade):string {
    return $idade >= 18 ? "maior" : "menor";
}

