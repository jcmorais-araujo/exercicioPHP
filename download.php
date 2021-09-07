<?php

$link = "https://sm.ign.com/ign_br/news/r/rick-morty/rick-morty-season-5-is-getting-an-hour-long-finale_89y8.jpg";

$content = file_get_contents($link);

// var_dump($content);

// Como está totalemnte desformatado... temos que ajudar na interpretação dos valores

$parse = parse_url($link);

var_dump($parse);

// Como desejo a informação do caminho (path)

$basename = basename($parse["path"]);

//Criar o arquivo

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?= $basename ?>" alt="imagem">