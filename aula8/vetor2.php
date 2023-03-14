<h2>vetor indexado por texto</h2>
<p>
    os vetores podem usar textos para
     indexar (indentificar) os valores armazenados.
    exemplo:

        +----------+
   nome |lala      |
        +----------+
   nota1|9         |
        +----------+
   nota2|7         |
        +----------+
</p>

<?php
$alunos = [
    "nome" => "ivan",
    "nota1" => 9,
    "nota2" => 7
];

$alunos["notaTotal"] = ($alunos["nota1"] + $alunos["nota2"]);
var_dump($alunos);

echo "<p>&nbsp;</p><pre>";
//imprimir todos os valores de um vetor 
//utilizando o foreach
foreach($alunos as $key => $value){
    printf("%23s\n",  "+-----------+");
    printf("%9s | %9s | \n", $key, $value);
}

?>
</pre>