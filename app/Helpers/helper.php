<?php

function duka($angka){
    // $angka = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,31,40);
    $cabang= [
        'Pusat',
        'Sumedang Utara',
        'Tanjungkerta',
        'Darmaraja',
        'situraja',
        'Jatinangor',
        'Tanjungsari',
        'Paseh',
        'Cimalaka',
        'Tomo',
        'Ujungjaya',
        'Wado',
        'Cisitu',
        'Pamulihan',
        'Cimanggung',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        'Sumedang Selatan',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        'Mol Pelayan Publik',
    ];
    
    
   $duka =$cabang[(int)($angka)];
    return $duka;
}
function bulankita($tgl){
    $nama_bulan= array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');
    //2023-03-01
    $tahun =substr($tgl, 0,4);
    $bulan = $nama_bulan[(int) substr($tgl,5, 2)];
    $tanggal = substr($tgl,5, 2);
    $text ='';
    $text .="$tanggal $bulan $tahun";
    return $text;
}
function mrk($angka){
    // $angka = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,31,40);
    $merek= array('','Linflow','Barindo','Bestini');
    
   $mrk =$merek[(int)($angka)];
    return $mrk;
}
function sts($angka){
    // $angka = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,31,40);
    $status= array('','aktip','tidak aktip');
    
   $sts =$status[(int)($angka)];
    return $sts;
}

    
?>