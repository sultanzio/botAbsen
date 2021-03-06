<?php
/**************************************
 * Bot Absen kampus
 * Coded by ./SultanZio
 * https://sultanzio.github.io/
 *-------------------------------------
 *
 * All About Verssion :
 * v1.0 new
 *
 * My Facebook : https://fb.com/www.linux.org
 * Github      : https://github.com/sultanzio
 * Instagram   : @baguslindu_
***************************************/


$nim=readline("Masukan NIM :");
$pass=readline("Masukan Pass :");

// Curl Request
$loginsite = "https://sia.uty.ac.id";
$curllogin = curl_init();
curl_setopt($curllogin, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curllogin, CURLOPT_URL, $loginsite);
curl_setopt($curllogin, CURLOPT_POST, true);
curl_setopt($curllogin, CURLOPT_HTTPHEADER, [
    "X-Requested-With: XMLHttpRequest"
]);
curl_setopt($curllogin, CURLOPT_COOKIEJAR, $nim."cookie.txt");
curl_setopt(
    $curllogin,
    CURLOPT_POSTFIELDS,
    $datamasuk = array(
        'loginNipNim' => "$nim",
        'loginPsw' => "$pass",
        'mumet' => jumlah()
    )
);
curl_setopt($curllogin, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curllogin, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
$reqlogin = curl_exec($curllogin);
curl_close($curllogin);

//Bypass Login Sia
function jumlah()
{
    preg_match('#<p style="color:white">(.*?)</p>#', $reqlogin, $oke);
    $get0 = $oke[0][0];
    $get1 = $oke[0][1];
    //Array To Strings
    $int0 = (int) $get0;
    $int1 = (int) $get1;
    //Addition From Array
    $add = $int0 + $int1;
}
//Print Data
preg_match_all('/static\">(.*?)<\/p>/', $reqlogin, $res);

//Curl Kedua -------------------------------------------------------

//Waktu Asia
date_default_timezone_set('Asia/Jakarta');
$today = date("Y-m-d");
$hari = date("l");

//Melakukan Parsing Kelas
preg_match_all('#<strong>[(](.*?)[)]</strong>(.*?)</a>#', $reqlogin, $kelasMu);
    //Senin
    if($hari == "Monday"){ //senin
        $loginsite2 = "https://sia.uty.ac.id/std/linkabsen";
        $curllogin2 = curl_init();
        curl_setopt($curllogin2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curllogin2, CURLOPT_URL, $loginsite2);
        curl_setopt($curllogin2, CURLOPT_POST, true);
        curl_setopt($curllogin2, CURLOPT_HTTPHEADER, [
            "X-Requested-With: XMLHttpRequest"
        ]);
        curl_setopt($curllogin2, CURLOPT_COOKIEFILE, $nim."cookie.txt");
        curl_setopt(
            $curllogin2,
            CURLOPT_POSTFIELDS,
            $datamasuk2 = array(
                'hasil' => "71971,3,".$today.",07:00,09:30" // Sistem Basis Data C
            )
        );
        curl_setopt($curllogin2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curllogin2, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
        $reqlogin2 = curl_exec($curllogin2);
        curl_close($curllogin2);
        echo $reqlogin2;
    }else if($hari == "Tuesday"){ //Selasa
        $loginsite2 = "https://sia.uty.ac.id/std/linkabsen";
        $curllogin2 = curl_init();
        curl_setopt($curllogin2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curllogin2, CURLOPT_URL, $loginsite2);
        curl_setopt($curllogin2, CURLOPT_POST, true);
        curl_setopt($curllogin2, CURLOPT_HTTPHEADER, [
            "X-Requested-With: XMLHttpRequest"
        ]);
        curl_setopt($curllogin2, CURLOPT_COOKIEFILE, $nim."cookie.txt");
        curl_setopt(
            $curllogin2,
            CURLOPT_POSTFIELDS,
            $datamasuk2 = array(
                'hasil' => "71951,3,".$today.",07:00,09:30" // Matematika Diskrit A
            )
        );
        curl_setopt($curllogin2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curllogin2, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
        $reqlogin2 = curl_exec($curllogin2);
        curl_close($curllogin2);
        echo $reqlogin2;
    }else if($hari == "Wednesday"){ //Rabu
        $loginsite2 = "https://sia.uty.ac.id/std/linkabsen";
        $curllogin2 = curl_init();
        curl_setopt($curllogin2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curllogin2, CURLOPT_URL, $loginsite2);
        curl_setopt($curllogin2, CURLOPT_POST, true);
        curl_setopt($curllogin2, CURLOPT_HTTPHEADER, [
            "X-Requested-With: XMLHttpRequest"
        ]);
        curl_setopt($curllogin2, CURLOPT_COOKIEFILE, $nim."cookie.txt");
        curl_setopt(
            $curllogin2,
            CURLOPT_POSTFIELDS,
            $datamasuk2 = array(
                'hasil' => "72006,3,".$today.",07:00,09:30" // Teori Bahasa Otomata I
            )
        );
        curl_setopt($curllogin2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curllogin2, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
        $reqlogin2 = curl_exec($curllogin2);
        curl_close($curllogin2);
        echo $reqlogin2;
    }else if($hari == "Thursday"){ //Kamis
        $loginsite2 = "https://sia.uty.ac.id/std/linkabsen";
        $curllogin2 = curl_init();
        curl_setopt($curllogin2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curllogin2, CURLOPT_URL, $loginsite2);
        curl_setopt($curllogin2, CURLOPT_POST, true);
        curl_setopt($curllogin2, CURLOPT_HTTPHEADER, [
            "X-Requested-With: XMLHttpRequest"
        ]);
        curl_setopt($curllogin2, CURLOPT_COOKIEFILE, $nim."cookie.txt");
        curl_setopt(
            $curllogin2,
            CURLOPT_POSTFIELDS,
            $datamasuk2 = array(
                'hasil' => "71950,2,".$today.",07:00,08:40", // Kewarganegaraan I 
            )
        );
        curl_setopt($curllogin2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curllogin2, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
        $reqlogin2 = curl_exec($curllogin2);
        curl_close($curllogin2);
        echo $reqlogin2;
    }else if($hari == "Thursday"){ //Kamis
        $loginsite2 = "https://sia.uty.ac.id/std/linkabsen";
        $curllogin2 = curl_init();
        curl_setopt($curllogin2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curllogin2, CURLOPT_URL, $loginsite2);
        curl_setopt($curllogin2, CURLOPT_POST, true);
        curl_setopt($curllogin2, CURLOPT_HTTPHEADER, [
            "X-Requested-With: XMLHttpRequest"
        ]);
        curl_setopt($curllogin2, CURLOPT_COOKIEFILE, $nim."cookie.txt");
        curl_setopt(
            $curllogin2,
            CURLOPT_POSTFIELDS,
            $datamasuk2 = array(
                'hasil' => "72011,3,".$today.",12:50,15:20" // Sistem Informasi E
            )
        );
        curl_setopt($curllogin2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curllogin2, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
        $reqlogin2 = curl_exec($curllogin2);
        curl_close($curllogin2);
        echo $reqlogin2;
    }else if($hari == "Friday"){ //Jum'at
        $loginsite2 = "https://sia.uty.ac.id/std/linkabsen";
        $curllogin2 = curl_init();
        curl_setopt($curllogin2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curllogin2, CURLOPT_URL, $loginsite2);
        curl_setopt($curllogin2, CURLOPT_POST, true);
        curl_setopt($curllogin2, CURLOPT_HTTPHEADER, [
            "X-Requested-With: XMLHttpRequest"
        ]);
        curl_setopt($curllogin2, CURLOPT_COOKIEFILE, $nim."cookie.txt");
        curl_setopt(
            $curllogin2,
            CURLOPT_POSTFIELDS,
            $datamasuk2 = array(
                'hasil' => "73793,1,".$today.",12:50,14:30" // Sistem Basis Data Lanjut Praktikum XI
            )
        );
        curl_setopt($curllogin2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curllogin2, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
        $reqlogin2 = curl_exec($curllogin2);
        curl_close($curllogin2);
        echo $reqlogin2;
    }else if($hari == "Friday"){ //Jum'at
        $loginsite2 = "https://sia.uty.ac.id/std/linkabsen";
        $curllogin2 = curl_init();
        curl_setopt($curllogin2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curllogin2, CURLOPT_URL, $loginsite2);
        curl_setopt($curllogin2, CURLOPT_POST, true);
        curl_setopt($curllogin2, CURLOPT_HTTPHEADER, [
            "X-Requested-With: XMLHttpRequest"
        ]);
        curl_setopt($curllogin2, CURLOPT_COOKIEFILE, $nim."cookie.txt");
        curl_setopt(
            $curllogin2,
            CURLOPT_POSTFIELDS,
            $datamasuk2 = array(
                'hasil' => "71968,3,".$today.",15:30,18:00," // Metodologi Pengembangan Aplikasi I
            )
        );
        curl_setopt($curllogin2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curllogin2, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
        $reqlogin2 = curl_exec($curllogin2);
        curl_close($curllogin2);
        echo $reqlogin2;
    }else if($hari == "Saturday"){ //Sabtu
        $loginsite2 = "https://sia.uty.ac.id/std/linkabsen";
        $curllogin2 = curl_init();
        curl_setopt($curllogin2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curllogin2, CURLOPT_URL, $loginsite2);
        curl_setopt($curllogin2, CURLOPT_POST, true);
        curl_setopt($curllogin2, CURLOPT_HTTPHEADER, [
            "X-Requested-With: XMLHttpRequest"
        ]);
        curl_setopt($curllogin2, CURLOPT_COOKIEFILE, $nim."cookie.txt");
        curl_setopt(
            $curllogin2,
            CURLOPT_POSTFIELDS,
            $datamasuk2 = array(
                'hasil' => "71990,3,".$today.",12:50,15:20," // Sistem Cerdas B
            )
        );
        curl_setopt($curllogin2, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curllogin2, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
        $reqlogin2 = curl_exec($curllogin2);
        curl_close($curllogin2);
        echo $reqlogin2;
    }else{
        echo "Sistem Error, Ulangi!!";
    }
