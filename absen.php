<?php
if($_GET['matkul'] == "besok") {
    function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return $hari_ini;
 
}
 
$hariini = hari_ini();
       switch($hariini) {
           case 'Senin':
               $besok = "Selasa";
               break;
           case 'Selasa':
               $besok = "Rabu";
               break;
           case 'Rabu':
               $besok = "Kamis";
               break;
           case 'Kamis':
               $besok = "Jumat";
               break;
           case 'Jumat':
               $besok = "Sabtu";
               break;
           case 'Sabtu':
               $besok = "Minggu";
               break;
           case 'Minggu':
               $besok = "Senin";
               break;
           default:
			$besok = "Tidak di ketahui";		
		break;
       }
   switch($besok) {
  case 'Senin': 
             echo"*[+] BESOK KITA BELAJAR [+]*\n<br>";
             echo "*1.Bahasa Indonesia*[Dr. A. NURKIDAM, M.Hum] 07:30-09:10 \n<br>";
             echo "*2.Ulumul Al-Qur'an*[Dr. MUH. AKIB D, S.Ag, M.A] 09:20-11:00 \n<br>";
             echo "*3.Phonology*[HUMAEROAH] 14:50-16:30 \n<br>";
       break;
  case 'Selasa': 
             echo"*[+] BESOK KITA BELAJAR [+]*\n<br>";
             echo "*1.Ilmu Ahlak*[Mukhtar mas'ud] 07:30-09:10 \n<br>";
             echo "*2.Pre-Intermediate Structure*[Munawir, M.Pd] 10:10-11:50 \n<br>";
       break;
  case 'Rabu': 
             echo"*[+] BESOK KITA BELAJAR [+]*\n<br>";
             echo "*1.Ilmu Akidah*[Narega Asenna] 07:30-09:10 \n<br>";
             echo "*2.Psikologi Pendidikan*[ST. HUMAERAH SYARIF] 09:20-11:00 \n<br>";
             echo "*3.Pengantar Ilmu Pendidikan*[Dr. H. ABDULLAH B, M.Ag] 14:40-16:30 \n<br>";
       break;
  case 'Kamis': 
             echo"*[+] BESOK KITA BELAJAR [+]*\n<br>";
             echo "*1.PPKN*[Dr. H. Muh Sabir Rahman] 07:30-09:10 \n<br>";
             echo "*2.Vocabulary*[MAGDAHALENA, M.Hum] 09:20-11:00 \n<br>";
       break;
     default: 
             echo "*Tidak Ada Kelas*";
       break;
   }
} else if($_GET['matkul'] == "hariini") {
    function hari_ini(){
	$hari = date ("D");
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
	return $hari_ini;
 
}
 
$hariini = hari_ini();
       switch($hariini) {
           case 'Senin':
               $besok = "Selasa";
               break;
           case 'Selasa':
               $besok = "Rabu";
               break;
           case 'Rabu':
               $besok = "Kamis";
               break;
           case 'Kamis':
               $besok = "Jumat";
               break;
           case 'Jumat':
               $besok = "Sabtu";
               break;
           case 'Sabtu':
               $besok = "Minggu";
               break;
           case 'Minggu':
               $besok = "Senin";
               break;
           default:
			$besok = "Tidak di ketahui";		
		break;
       }
   switch($hariini) {
  case 'Senin': 
             echo"*[+] MATKUL HARI INI [+]*\n<br>";
             echo "*1. Bahasa Indonesia*[Dr. A. NURKIDAM, M.Hum] 07:30-09:10 \n<br>";
             echo "*2.Ulumul Al-Qur'an*[Dr. MUH. AKIB D, S.Ag, M.A] 09:20-11:00 \n<br>";
             echo "*3.Phonology*[HUMAEROAH] 14:50-16:30 <br>";
       break;
  case 'Selasa': 
             echo"*[+] MATKUL HARI INI [+]*\n<br>";
             echo "*1.Ilmu Ahlak*[Mukhtar mas'ud] 07:30-09:10 \n<br>";
             echo "*2.Pre-Intermediate Structure*[Munawir, M.Pd] 10:10-11:50 \n<br>";
       break;
  case 'Rabu': 
             echo"*[+] MATKUL HARI INI [+]*\n<br>";
             echo "*1.Ilmu Akidah*[Narega Asenna] 07:30-09:10 \n<br>";
             echo "*2.Psikologi Pendidikan*[ST. HUMAERAH SYARIF] 09:20-11:00 \n<br>";
             echo "*3.Pengantar Ilmu Pendidikan*[Dr. H. ABDULLAH B, M.Ag] 14:40-16:30 \n<br>";
       break;
  case 'Kamis': 
             echo"*[+] MATKUL HARI INI [+]*\n<br>";
             echo "*1.PPKN*[Dr. H. Muh Sabir Rahman] 07:30-09:10 \n<br>";
             echo "*2.Vocabulary*[MAGDAHALENA, M.Hum] 09:20-11:00 \n<br>";
       break;
     default: 
             echo "*Tidak Ada Kelas*";
       break;
   }
} else {
    echo "Invalid Parameter";
}
   ?>
