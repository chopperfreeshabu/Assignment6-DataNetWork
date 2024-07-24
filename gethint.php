<?php
// Array with names
$a[] = "Aromborjoy";
$a[] = "Borini";
$a[] = "Cucurella";
$a[] = "Dodo";
$a[] = "Edgar";
$a[] = "Felipe";
$a[] = "Gundam";
$a[] = "Harry";
$a[] = "Inacio";
$a[] = "Jake";
$a[] = "KitKat";
$a[] = "Loreal";
$a[] = "Nicky";
$a[] = "OMG";
$a[] = "Ped";
$a[] = "Aroidee";
$a[] = "Raccoon";
$a[] = "Cinderella";
$a[] = "Dominic";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Toto";
$a[] = "Unji";
$a[] = "Viking";
$a[] = "Lizard";
$a[] = "Elizabeth";
$a[] = "Eren";
$a[] = "Wizard";
$a[] = "Vin";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>