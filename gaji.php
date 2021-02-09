<?php
 $nip = $_POST['nip'];
 $gol = $_POST['gol'];
 $jab = $_POST['jab'];
 $org1 = $_POST['org1'];
 $org2 = $_POST['org2'];
 
 echo "NIP : $nip <BR>";
 switch ($gol) {
   case 1:
     $gp = 1200000;
     break;
   case 2:
     $gp = 1500000;
     break;
   case 3:
     $gp = 1900000;
     break;
 }
 echo "Gaji Pokok : $gp <BR>";
 switch ($jab) {
   case 1:
     $tj = 1000000;
     break;
   case 2:
     $tj = 700000;
     break;
   case 3:
     $tj = 0;
 }
 echo "Tunjangan Jabatan : $tj <BR>";
 if ($org1) {
   $pot1 = 5000;
 } else {
   $pot1 = 0;
 }
 if ($org2) {
   $pot2 = 3500;
 } else {
   $pot2 = 0;
 }
 $jumpot = $pot1 + $pot2;
 echo "Jumlah Potongan : $jumpot <BR>";
 $gb = $gp + $tj - $jumpot;
 echo "Gaji Bersih : $gb <BR>";
?>