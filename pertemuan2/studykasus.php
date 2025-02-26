<?php

$jabatan = "manager";
$jam_kerja = 500

if ($jabatan == "manager") {
    $gaji = 7000000;
 } elseif ($jabatan == "supervisor") {
    $gaji = 5000000;
 } elseif ($jabatan == "staf") {
    $gaji = 3000000;
 } 
 
if ($jam_kerja > 300){
    $bonus = ($jam_kerja -200) * 20000;
} else {
    $bonus = 0;
 }

if ($gaji <=3000000) {
    $pajak = 5/100;
 } elseif ($gaji =>3000000 && $gaji <=5000000) {
    $pajak = 10/100;
 } elseif ($jabatan == "staf") {
    $pajak = 15/100;
 }