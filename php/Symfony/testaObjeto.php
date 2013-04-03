<?php
$a = array('produtos'=>array('id'=>2,'nome'=>'deusdede','preco'=>10, 'descricao'=>'TV LED', 'categoria'=>array('id1'=>1,'nome'=>'ELETRONICO')));
$b=json_encode($a);
$c= json_decode($b);

echo "<pre>";
echo" a<br>";
print_r($a);
echo" b<br>";
print_r($b);
echo"<br>c<br>";
print_r($c);
echo "</pre>";
echo "<br>";
echo $c->nome;
echo "<br>";
echo $c->cidade;
echo "<br>";
