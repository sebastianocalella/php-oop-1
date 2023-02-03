<?php 

$movieList=[];

$la_teoria_del_tutto = new Movie('La Teoria del Tutto',['Eddie Readmayne', 'Felicity Jones'],'140');
$la_teoria_del_tutto->type=['drama','romance','historical drama'];
array_push($movieList,$la_teoria_del_tutto);

$pretty_woman = new Movie('Pretty Woman', ['Julia Roberts', 'Richard Gere', 'Laura San Giacomo'],'179');
$pretty_woman->type=['romance','romantic comedy','comedy'];
array_push($movieList,$pretty_woman);

$interstellar = new Movie('Interstellar',['Matthew McConaughey','Jessica Chastain','Anne Hathaway','Mackenzie Foy','Timothée Chalamet','Matt Damon'],'169');
$interstellar->type=['Science fiction','Adventure','Mystery','Drama'];
array_push($movieList,$interstellar);

?>