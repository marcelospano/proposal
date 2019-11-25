<?php

$location = [
    [
        "pais" => 'Eua',
        "capital" => 'Washington'
    ],  
    [
        "pais" => 'Brasil',
        "capital" => 'Brasilia'
    ],
    [
        "pais" => 'Espanha',
        "capital" => 'Madri'
    ]
];

echo "<h3>Array inicial</h3>";
echo '<pre>';
print_r ($location);
echo '</pre>';

function show($location){
    echo "<br>";
    foreach($location as $value){
        echo "<p>A capital do País ".$value['pais']." é ". $value["capital"]."</p>";
    }
}

function sortByCapital(&$location){
    $sort_col = [];
    foreach ($location as $key=> $row) {
        $sort_col[$key] = $row["capital"];
    }
    array_multisort($sort_col, SORT_ASC, $location);
}

function addLocation($location,$array){
    return array_merge($location,$array);
}

sortByCapital($location);

echo "<h3>Países reordenados pelas capitais</h3>";
show($location);


$location = addLocation($location,[["pais" => 'Escocia',"capital" => 'Edimburgo']]);
$location = addLocation($location,[["pais" => 'Alemanha',"capital" => 'Berlim']]);
$location = addLocation($location,[["pais" => 'Irlanda',"capital" => 'Dublim']]);
$location = addLocation($location,[["pais" => 'Egito',"capital" => 'Cairo']]);
$location = addLocation($location,[["pais" => 'Cuba',"capital" => 'Havana']]);

sortByCapital($location);

echo "<h3>Reodenados após receber mais 5 Países e capitais.</h3>";
show($location);



echo '<pre>';
print_r ($location);
echo '</pre>';