<h2>estrutura de decisão</h2>
<p>
    as estrutura de condição permitem executar
    blocos distintos de código dado uma condição

<strong>exemplo</strong>
<pre>
    if(condição)
        //instruções executadas
        //caso a condição seja verdadeira
}else{
    //instruções executadas, caso
    //a condição seja falsa.
}
</pre>

</p>

<?php
    $media = 7;

    if($media >= 6){
        echo "o aluno foi aprovado";
    }else{
        echo "o aluno foi reprovado";
    }
?>
10 <= media >= 6 | aprovado
6 < media >= 3  |exame
media < 3       | reprovado 

<?php
    $media = 4;

    if($media >= 6){
        echo "o aluno foi aprovado";
    }else if($media >= 3){
            echo "o aluno foi recuperação";  
    }else{
        echo "o aluno foi reprovado";
    }
?>

<p>
    o php faz a conversão de alguns tipos para verdadeiro ou falso.

<strong>true</strong>
<ul>
    <li>string com texto</li>
    <li>número maior que 0</li>
    <li>vetor com elementos</li>
</ul>

<strong>false</strong>
<ul>
    <li>string vazia</li>
    <li>número igual que 0</li>
    <li>vetor vazio</li>
</ul>
</p>


<?php

if("o loco meu!"){
    echo "verdadeiro";
}else{
    echo "falso";
}
?>

<?php
    $media = 4;
    if($media >=6 || "quero passar de ano"){
        echo "huhuhu, sou esperto";
    }else{
        echo "ihh, me dei mal";
    }