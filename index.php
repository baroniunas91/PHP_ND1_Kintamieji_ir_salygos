<?php
echo '1) -------------------------------------------';
echo '<br>';
echo '<br>';

// Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
// Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

$name = 'Edgaras';
$lastName = 'Baroniūnas';
$birthDay = 1991;
$currentYear = 2020;
$age = $currentYear - $birthDay;
echo "Aš esu $name $lastName. Man yra $age metai(ų).";
echo '<br>';
echo '<br>';
echo '2) -------------------------------------------';
echo '<br>';
echo '<br>';
// Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite 
// atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. 
// Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
$firstNum = rand(0,4);
$secondNum = rand(0,4);

if($firstNum > $secondNum && $secondNum != 0) {
    $rez = $firstNum/$secondNum;
    $rez = round($rez, 2);
} else if($firstNum < $secondNum && $firstNum != 0) {
    $rez = $secondNum/$firstNum;
    $rez = round($rez, 2);
} else if($firstNum == $secondNum && $firstNum != 0 && $secondNum != 0) {
    $rez = $firstNum/$secondNum;
} else {
    $rez = 'Dalyba iš nulio negalima!';
}
echo $firstNum;
echo '<br>';
echo $secondNum;
echo '<br>';
echo $rez;
echo '<br>';
echo '<br>';
echo '3) -------------------------------------------';
echo '<br>';
echo '<br>';

// Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems 
// priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

$num1 = rand(0, 25);
$num2 = rand(0, 25);
$num3 = rand(0, 25);

echo $num1;
echo '-';
echo $num2;
echo '-';
echo $num3;
echo '<br>';

if($num1 > $num2 && $num1 < $num3) {
    $middleNum = $num1;
} else if($num1 > $num3 && $num1 < $num2) {
    $middleNum = $num1;
} else if($num2 > $num1 && $num2 < $num3) {
    $middleNum = $num2;
} else if($num2 > $num3 && $num2 < $num1) {
    $middleNum = $num2;
} else if($num3 > $num1 && $num3 < $num2) {
    $middleNum = $num3;
} else if($num3 > $num2 && $num3 < $num1) {
    $middleNum = $num3;
} else {
    $middleNum = 'vidurinio skaičiaus nėra';
}
echo $middleNum;

echo '<br>';
echo '<br>';
echo '4) -------------------------------------------';
echo '<br>';
echo '<br>';

// Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 

$side1 = rand(1, 10);
$side2 = rand(1, 10);
$side3 = rand(1, 10);

echo "Pirma $side1\r";
echo "Antra $side2\r";
echo "Trečia $side3\r";
echo '<br>';

if($side1 + $side2 > $side3 && $side1 + $side3 > $side2 && $side2 + $side3 > $side1) {
    echo "Galima";
} else {
    echo "Negalima";
}

echo '<br>';
echo '<br>';
echo '5) -------------------------------------------';
echo '<br>';
echo '<br>';

// Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

$number1 = rand(0, 2);
$number2 = rand(0, 2);
$number3 = rand(0, 2);
$number4 = rand(0, 2);
echo "$number1 - $number2 - $number3 - $number4";
echo '<br>';
$count0 = 0;
$count1 = 0;
$count2 = 0;

if($number1 == 0) {
    $count0 +=1;
}
if($number1 == 1) {
    $count1 +=1;
}
if($number1 == 2) {
    $count2 +=1;
}
if($number2 == 0) {
    $count0 +=1;
}
if($number2 == 1) {
    $count1 +=1;
}
if($number2 == 2) {
    $count2 +=1;
}
if($number3 == 0) {
    $count0 +=1;
}
if($number3 == 1) {
    $count1 +=1;
}
if($number3 == 2) {
    $count2 +=1;
}
if($number4 == 0) {
    $count0 +=1;
}
if($number4 == 1) {
    $count1 +=1;
}
if($number4 == 2) {
    $count2 +=1;
}
echo "0 sugeneravo $count0 kartų";
echo '<br>';
echo "1 sugeneravo $count1 kartų";
echo '<br>';
echo "2 sugeneravo $count2 kartų";

echo '<br>';
echo '<br>';
echo '6) -------------------------------------------';
echo '<br>';
echo '<br>';

// Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. 
// Pvz skaičius 3- rezultatas: <h3>3</h3>
$hTag = rand(1, 6);
echo "<h$hTag>$hTag</h$hTag>";
echo '<br>';
echo '7) -------------------------------------------';
echo '<br>';
echo '<br>';

// Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
// Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

$number1 = rand(-10, 10);
$number2 = rand(-10, 10);
$number3 = rand(-10, 10);

if($number1 == 0) {
    $color = 'red';
} else {
    $color = 'blue';
}
echo ($number1<0) ? "<h3 style=\"color: green\">$number1</h3>" : "<h3 style=\"color: $color\">$number1</h3>";
echo ' ';

if($number2 == 0) {
    $color = 'red';
} else {
    $color = 'blue';
}
echo ($number2<0) ? "<h3 style=\"color: green\">$number2</h3>" : "<h3 style=\"color: $color\">$number2</h3>";
echo ' ';
if($number3 == 0) {
    $color = 'red';
} else {
    $color = 'blue';
}
echo ($number3<0) ? "<h3 style=\"color: green\">$number3</h3>" : "<h3 style=\"color: $color\">$number3</h3>";

echo '<br>';
echo '<br>';
echo '8) -------------------------------------------';
echo '<br>';
echo '<br>';

// Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, 
// daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir 
// atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

$candlesQty = rand(5, 3000);

if($candlesQty < 1000) {
    $sum = $candlesQty * 1;
    echo "Perkama $candlesQty žvakės už $sum Eur";
} else if ($candlesQty >= 1000 && $candlesQty < 2000) {
    $sum = ($candlesQty * 1) * 0.97;
    echo "Perkama $candlesQty žvakės už $sum Eur";
    echo '<br>';
    echo 'Nuolaida 3%';
} else if ($candlesQty >= 2000) {
    $sum = ($candlesQty * 1) * 0.96;
    echo "Perkama $candlesQty žvakės už $sum Eur";
    echo '<br>';
    echo 'Nuolaida 4%';
} else {
    echo 'klaida';
}

// Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
// Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, 
// kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. 
// Rezultatus apvalinkite iki sveiko skaičiaus.

echo '<br>';
echo '<br>';
echo '9) -------------------------------------------';
echo '<br>';
echo '<br>';

$kint1 = rand(0, 100);
$kint2 = rand(0, 100);
$kint3 = rand(0, 100);

echo $kint1;
echo '<br>';
echo $kint2;
echo '<br>';
echo $kint3;
echo '<br>';

$average = round(($kint1 + $kint2 + $kint3)/3);
echo "Virdurkis - $average";
echo '<br>';
$count = 3;

if($kint1 < 10 || $kint1 > 90) {
    $count -= 1;
    $kint1 = 0;
}
if($kint2 < 10 || $kint2 > 90) {
    $count -= 1;
    $kint2 = 0;
}
if($kint3 < 10 || $kint3 > 90) {
    $count -= 1;
    $kint3 = 0;
}
if($count == 0) {
    echo 'Dalyba iš nulio negalima';
} else {
    $average = round(($kint1 + $kint2 + $kint3)/$count);
    echo "Virdurkis - $average";
}

echo '<br>';
echo '<br>';
echo '10) -------------------------------------------';
echo '<br>';
echo '<br>';

// Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm 
// sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. 
// Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir 
// pridedamų sekundžių skaičių.
$val = rand(0, 23);
$min = rand(0, 59);
$sec = rand(0, 59);
if ($val < 10) {
    $val = "0$val";
}
if ($min < 10) {
    $min = "0$min";
}
if ($sec < 10) {
    $sec = "0$sec";
}
$additional = rand(0, 300);

echo "$val:$min:$sec";
echo '<br>';
echo "Papildomai pridėti $additional sekundžių";

$val = $val * 3600;
$min = $min * 60;
$sec = $val + $min + $sec;
$sec = $sec + $additional;

if(floor($sec/3600) >=24) {
    $sec = $sec - (floor($sec/3600) * 3600);
}

$val = floor($sec / 3600);

$min = $sec - $val * 3600;
$min = floor($min / 60);

$sec = $sec - ($val * 3600) - ($min * 60);

if ($val < 10) {
    $val = "0$val";
}
if ($min < 10) {
    $min = "0$min";
}
if ($sec < 10) {
    $sec = "0$sec";
}

echo '<br>';
echo "$val:$min:$sec";
echo '<br>';

echo '<br>';
echo '11) -------------------------------------------';
echo '<br>';
echo '<br>';

// Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. 
// Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. 
// Naudoti ciklų ir masyvų NEGALIMA.

$nr1 = rand(1000, 9999);
$nr2 = rand(1000, 9999);
$nr3 = rand(1000, 9999);
$nr4 = rand(1000, 9999);
$nr5 = rand(1000, 9999);
$nr6 = rand(1000, 9999);
echo "$nr1 $nr2 $nr3 $nr4 $nr5 $nr6";
echo '<br>';

$didziausias = 0;
$maziausias = 10000;

// Randam didžiausią
if($nr1 > $didziausias) {
    $didziausias = $nr1;
}
if($nr2 > $didziausias) {
    $didziausias = $nr2;
}
if($nr3 > $didziausias) {
    $didziausias = $nr3;
}
if($nr4 > $didziausias) {
    $didziausias = $nr4;
}
if($nr5 > $didziausias) {
    $didziausias = $nr5;
}
if($nr6 > $didziausias) {
    $didziausias = $nr6;
}

// Randam mažiausią
if($nr1 < $maziausias) {
    $maziausias = $nr1;
}
if($nr2 < $maziausias) {
    $maziausias = $nr2;
}
if($nr3 < $maziausias) {
    $maziausias = $nr3;
}
if($nr4 < $maziausias) {
    $maziausias = $nr4;
}
if($nr5 < $maziausias) {
    $maziausias = $nr5;
}
if($nr6 < $maziausias) {
    $maziausias = $nr6;
}

$antrasDidziausias = 0;
$antrasMaziausias = 10000;

// Randam antrą didžiausią
if($nr1 < $didziausias && $nr1 > $maziausias) {
    if($nr1 > $antrasDidziausias) {
        $antrasDidziausias = $nr1;
    }
}
if($nr2 < $didziausias && $nr2 > $maziausias) {
    if($nr2 > $antrasDidziausias) {
        $antrasDidziausias = $nr2;
    }
}
if($nr3 < $didziausias && $nr3 > $maziausias) {
    if($nr3 > $antrasDidziausias) {
        $antrasDidziausias = $nr3;
    }
}
if($nr4 < $didziausias && $nr4 > $maziausias) {
    if($nr4 > $antrasDidziausias) {
        $antrasDidziausias = $nr4;
    }
}
if($nr5 < $didziausias && $nr5 > $maziausias) {
    if($nr5 > $antrasDidziausias) {
        $antrasDidziausias = $nr5;
    }
}
if($nr6 < $didziausias && $nr6 > $maziausias) {
    if($nr6 > $antrasDidziausias) {
        $antrasDidziausias = $nr6;
    }
}

// Randam antrą mažiausią
if($nr1 > $maziausias && $nr1 < $didziausias) {
    if($nr1 < $antrasMaziausias) {
        $antrasMaziausias = $nr1;
    }
}
if($nr2 > $maziausias && $nr2 < $didziausias) {
    if($nr2 < $antrasMaziausias) {
        $antrasMaziausias = $nr2;
    }
}
if($nr3 > $maziausias && $nr3 < $didziausias) {
    if($nr3 < $antrasMaziausias) {
        $antrasMaziausias = $nr3;
    }
}
if($nr4 > $maziausias && $nr4 < $didziausias) {
    if($nr4 < $antrasMaziausias) {
        $antrasMaziausias = $nr4;
    }
}
if($nr5 > $maziausias && $nr5 < $didziausias) {
    if($nr5 < $antrasMaziausias) {
        $antrasMaziausias = $nr5;
    }
}
if($nr6 > $maziausias && $nr6 < $didziausias) {
    if($nr6 < $antrasMaziausias) {
        $antrasMaziausias = $nr6;
    }
}

$trečiasDidziausias = 0;
$trečiasMaziausias = 10000;

// Randam trečia didžiausią
if($nr1 < $antrasDidziausias && $nr1 > $antrasMaziausias) {
    if($nr1 > $trečiasDidziausias) {
        $trečiasDidziausias = $nr1;
    }
}
if($nr2 < $antrasDidziausias && $nr2 > $antrasMaziausias) {
    if($nr2 > $trečiasDidziausias) {
        $trečiasDidziausias = $nr2;
    }
}
if($nr3 < $antrasDidziausias && $nr3 > $antrasMaziausias) {
    if($nr3 > $trečiasDidziausias) {
        $trečiasDidziausias = $nr3;
    }
}
if($nr4 < $antrasDidziausias && $nr4 > $antrasMaziausias) {
    if($nr4 > $trečiasDidziausias) {
        $trečiasDidziausias = $nr4;
    }
}
if($nr5 < $antrasDidziausias && $nr5 > $antrasMaziausias) {
    if($nr5 > $trečiasDidziausias) {
        $trečiasDidziausias = $nr5;
    }
}
if($nr6 < $antrasDidziausias && $nr6 > $antrasMaziausias) {
    if($nr6 > $trečiasDidziausias) {
        $trečiasDidziausias = $nr6;
    }
}

// Randam trečią mažiausią
if($nr1 > $antrasMaziausias && $nr1 < $antrasDidziausias) {
    if($nr1 < $trečiasMaziausias) {
        $trečiasMaziausias = $nr1;
    }
}
if($nr2 > $antrasMaziausias && $nr2 < $antrasDidziausias) {
    if($nr2 < $trečiasMaziausias) {
        $trečiasMaziausias = $nr2;
    }
}
if($nr3 > $antrasMaziausias && $nr3 < $antrasDidziausias) {
    if($nr3 < $trečiasMaziausias) {
        $trečiasMaziausias = $nr3;
    }
}
if($nr4 > $antrasMaziausias && $nr4 < $antrasDidziausias) {
    if($nr4 < $trečiasMaziausias) {
        $trečiasMaziausias = $nr4;
    }
}
if($nr5 > $antrasMaziausias && $nr5 < $antrasDidziausias) {
    if($nr5 < $trečiasMaziausias) {
        $trečiasMaziausias = $nr5;
    }
}
if($nr6 > $antrasMaziausias && $nr6 < $antrasDidziausias) {
    if($nr6 < $trečiasMaziausias) {
        $trečiasMaziausias = $nr6;
    }
}
echo 'Išrūšiuota nuo didžiausio iki mažiausio:';
echo '<br>';
echo "$didziausias $antrasDidziausias $trečiasDidziausias $trečiasMaziausias $antrasMaziausias $maziausias";
echo '<br>';