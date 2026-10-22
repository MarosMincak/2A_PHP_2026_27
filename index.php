<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>peter</p>

  <?php 
  // Jednoriadkový komentár
  // Vytvorenie premennej a definovanie hodnoty
  $premenna = "text";
  $meno = "Maroš";

  /*
  Viacriadkový komentár 
  Znak "." sa v PHP používa na spájanie stringov
  */
  echo "<p>Ahoj, moje meno je " . $meno . "</p>";

  $vysledok = 4 + 6;
  echo $vysledok;

  if($vysledok == 10){
    echo "Výsledok je 10";
  }else{
    echo "Výsledok nie je 10";
  }

  if($vysledok == 10)
    {echo "Výsledok je 10";}
  else{
    echo "Výsledok nie je 10";
  }

  echo "</br>";

  for($i = 0; $i < 6; $i++){
    if($i == 5){
      echo $i;
    }else{
      echo $i . ", ";
    }
  }

  /*
  
  Vytvorte cyklus v ktorom vypíšete 
  všetky čísla od 0 po náhodné číslo od 0 do 1000
  pričom 
  ak náhodné číslo bude párne, tak 
  chceme vypísať všetky párne čísla od 0 po náhodné číslo
  ak náhodné číslo bude nepárne, tak
  chceme vypísať všetky nepárne čísla od 0 po náhodné číslo

  NADSTAVBA resp. bonus :)
  Každé piaté číslo bude mať 
  náhodnú veľkosť (od 10px do 50px) a farbu. 
  */

  echo "</br>";

  $nahodneCislo = rand(0, 1000);
  $counter = 1;

  if($nahodneCislo % 2 == 0){
    for($i = 0; $i <= $nahodneCislo; $i+=2){
      $nahodnaVelkost = rand(10,50);
      if($counter % 5 == 0){
        echo "<span style='font-size: {$nahodnaVelkost}px; color: rgb(40, 20, 200);'>$i</span>" . ", ";
        //  <p style="color: rgb(40, 20, 200);">peter</p>
      }else{
        echo $i . ", ";
      }
      $counter++;
    }
  }else{
    for($i = 1; $i <= $nahodneCislo; $i+=2){
      if($counter % 5 == 0){
        echo $i . ", ";
      }
      $counter++;
    }
  }

  // 2 8 4 32 10 8
  //          __
  // 3 99 47 43 17
  //            __

  

  //var_dump($nahodneCislo);
  ?>




</body>
</html>