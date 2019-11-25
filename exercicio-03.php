<?php

$arquivos=["music.mp4","video.mov","imagem.jpeg"];
//print_r($arquivos);

foreach($arquivos as $value){
    
    $partes_arquivo = pathinfo($value);
    $extensoes = $partes_arquivo['extension'];
    $array_extensoes[] = $extensoes;    
    
}

echo "<h3>Sem ordernar</h3>";
print_r($array_extensoes);
sort($array_extensoes);
echo "<h3>Após ordenação</h3>";
print_r($array_extensoes);



