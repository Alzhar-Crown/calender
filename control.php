<?php
session_start();

$bulan = [
    [

        "nama" => "Januari",
        "tanggal" => "29,30,31,1,2,3,4,5,6,7,8,9,10
             ,11,12,13,14,15,16,17,18,19,20
             ,21,22,23,24,25,26,27,28,29,30,31,-,-"

    ],
    [
        "nama" => "Februari",
        "tanggal" => "26,27,28,29,30,31,1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,-,-"
    ],
    [
        "nama" => "Maret",
        "tanggal" => "23,24,25,26,27,28,1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,29,30,31"
    ],
    [
        "nama" => "April",
        "tanggal" => "30,31,1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,29,30,-,-,-,-,-"
    ],
    [
        "nama" => "Mei",
        "tanggal" => "27,28,29,30,1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,29,30,31,-,-"
    ],
    [
        "nama" => "Juni",
        "tanggal" => "1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,29,30,-,-,-,-,-,-,-"
    ],
    [
        "nama" => "Juli",
        "tanggal" => "29,30,1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,29,30,31,-,-,-,-"
    ],
    [
        "nama" => "Agustus",
        "tanggal" => "27,28,29,30,31,1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,29,30,31,-"
    ],
    [
        "nama" => "September",
        "tanggal" => "31,1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,29,30,-,-,-,-,-,-"
    ],
    [
        "nama" => "Oktober",
        "tanggal" => "28,29,30,31,1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,29,30,31,-,-"
    ],
    [
        "nama" => "November",
        "tanggal" => "26,27,28,29,30,31,1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,29,30,31"
    ],
    [
        "nama" => "Desember",
        "tanggal" => "30,31,1,2,3,4,5,6,7
             ,8,9,10,11,12,13,14,15,16,17
             ,18,19,20,21,22,23,24,25,26,27,28,29,30,31,-,-,-,-,"
    ],
];

if (!isset($_SESSION['in'])) { //memastikan jika tidak ada sesion in maka sesion in akan default 0
    $_SESSION['in'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { // jika server ada request post
    if (isset($_POST['next'])) { // jika didalam post itu ada name next yang berasal dari button control
        if ($_SESSION['in'] == 11) { // memastikan ketika ada req post next tapi session in bernilai 11 maka akan dikembalikan ke 0
            $_SESSION['in'] = 0;
        } else { // jika tidak maka akan bertambah 1
            if ($_SESSION['in'] < count($bulan) - 1) { // Cegah melebihi jumlah bulan
                $_SESSION['in']++;
            }
        }
    } else if (isset($_POST['refuse']) && $_SESSION['in'] > 0) {
        $_SESSION['in']--;
    } else if (isset($_POST['refuse']) && $_SESSION['in'] == 0) {
        $_SESSION['in'] = 11;
    }
}

// echo " index bro " . $_SESSION['in'] . "<br>";


function realDate()
{
    $hariIni = date("d");
    global $bulan;
    $moo = explode(',', $bulan[$_SESSION['in']]["tanggal"]);

    foreach ($moo as $key => $item) {
        if ($item == $hariIni) {
            return $key;
        }
    }

    return -1;
}

function realMonth()
{

    $bulanInggris = date("F"); 
    $bulanIndonesia = [
        "January" => "Januari",
        "February" => "Februari",
        "March" => "Maret",
        "April" => "April",
        "May" => "Mei",
        "June" => "Juni",
        "July" => "Juli",
        "August" => "Agustus",
        "September" => "September",
        "October" => "Oktober",
        "November" => "November",
        "December" => "Desember"
    ];


    global $bulan;


    foreach ($bulan as $key => $item) {
        if ($item["nama"] == $bulanIndonesia[$bulanInggris]) {
            return $key;
        }
    }

    return -1;
}

// echo realMonth()
//  realDate();

function isiBulan()
{
    global $bulan;
    return $bulan[$_SESSION['in']]["nama"];
}

function isiTanggal()
{
    global $bulan;
    $moo = explode(',', $bulan[$_SESSION['in']]["tanggal"]);


    return $moo;
}

function read()
{
    $todayDex = realDate();
    $todayMounth = realMonth();

    global $bulan;
    $k = array();

    $moo = explode(',', $bulan[$_SESSION['in']]["tanggal"]);
    for ($i = 0; $i < 37; $i++) {
        if (isset($moo[$i])) {
            $date = $moo[$i];
            

            if ($i == $todayDex && $_SESSION['in'] == $todayMounth ) {
                $k[] = "<span style = 'color :rgb(92, 255, 143);' >$date</span>" . "<br>";
            } else {
                $k[] = "<span  style = 'color :white;' >$date</span>" . "<br>";
            }

            // var_dump($k);
            // } else if (empty($moo[realDate()])) {
            //     $h = $moo[$i];
            //     $j = "<span style = 'color :white;' >$h</span>" . "<br>";
            //     $k[] = $j;
            //     var_dump($k);

        } else {
            $k[] = "<span style = 'color :white;' >-</span>" . "<br>";
        }
    }
    return $k;
}

// var_dump(read());
