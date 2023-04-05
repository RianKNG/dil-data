<?php

function duka($angka){
    // $angka = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,31,40);
    $cabang= array(1=>'','Sumedang Utara','Tanjungkerta','Darmaraja','Situraja','Jatinangor','Tanjungsari','Paseh','Cimalaka',
                'Tomo','Ujungjaya','Wado','Cisitu','Pamulihan','Cimanggung','','','','','','','','','','','','','','','','Sumedang Selatan','','','','','','','','','Mol Pelayan Publik');
    
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
    
?>