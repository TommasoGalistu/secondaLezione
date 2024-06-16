<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  phpinfo();

  return;

  $test1 = "Hello World";
  $numero = 2; // intero
  $numeri = 3.4; // float
  $booleani = true; // boolean

  // array 
  // $arrayIndicizzati = array("ciao", "mondo", "come", "stai");
  $arrayIndicizzati = ["ciao", "mondo", "come", "stai"];

  // echo $arrayIndicizzati[1];

  $utente = [
    "nome" => "Mario",
    "cognome" => "Rossi",
    "eta" => 30
  ];

  // echo $utente["nome"];

  echo "";

  $arrayMultidimensionali = [
    [
      "nome" => "Mario",
      "cognome" => "Rossi",
      "eta" => 30
    ],
    [
      "nome" => "Luca",
      "cognome" => "Bianchi",
      "eta" => 25
    ],
    [
      "nome" => "Mario",
      "cognome" => "Bianchi",
      "eta" => 25,
    ]
  ];

  $arrayMultidimensionali[0]['nome'];

  // inserimento in coda
  array_push($arrayIndicizzati, "nuovo elemento");

  //inserimento in testa
  array_unshift($arrayIndicizzati, "nuovo elemento");

  // rimonzione in coda
  array_pop($arrayIndicizzati);

  // rimozione in testa
  array_shift($arrayIndicizzati);

  // se esiste un elemento
  $esisteMario = array_reduce($arrayMultidimensionali, function ($carry, $item) {
    return $carry || $item['nome'] == 'Mario'; // true || false
  });

  // se esiste un elemento
  $mario = array_filter($arrayMultidimensionali, function ($elemento) {
    return $elemento['nome'] == 'Mario';
  });

  $nomi = array_map(function ($elemento) {
    if ($elemento['nome'] === 'Mario') return;

    return [
      "nome" => $elemento['nome'],
      "nomeCompleto" => $elemento['nome'] .  " " . $elemento['cognome'],
      "cognome" => $elemento['cognome'],
    ];
  }, $arrayMultidimensionali);

  var_dump($nomi);


  // iterazione
  for ($i = 0; $i < count($arrayMultidimensionali); $i++) {
    echo $arrayMultidimensionali[$i]['nome'] . " ";
  };

  foreach ($arrayMultidimensionali as $pippo) {
    echo $pippo['nome'];
  }

  // $unione = array_merge($arrayIndicizzati, $arrayIndicizzati2);
  ?>

  <?= $arrayMultidimensionali[0]['nome'] ?>


</body>

</html>