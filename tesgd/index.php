<html lang="en">

<head>

	<meta charset="utf-8">

	<title>Tes Covid - 19</title>

	<link rel="stylesheet" href="css/nivo-slider.css" media="screen">
	<link rel="stylesheet" href="css/futurico-theme.css" media="screen">

	<style type="text/css">body{background:url(img/back.jpg) repeat;color:#ffffff;width:960px;margin:0px auto}.footer{margin-top:100px;text-align:center;color:#ffffff;font:bold 14px Segoe UI}.footer a{color:#999;text-decoration:none}#wrapper{padding: 50px 0 0 325px;}</style>
<meta name="robots" content="noindex,follow" />
</head>

<body>

<img src="img/t1.png" alt="">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery.nivo.slider.pack.js"></script>

<form  method="POST" name="input2">
<?php
error_reporting (E_ALL ^ E_NOTICE);

$pilihan = $_POST['pilihan'];
switch($pilihan){
				/* JIKA PILIHAN PERTAMA (1) ADALAH Tidak*/
	case 21:
	?>
	<h2>Adakah gejala batuk, pilek atau nyeri tenggorokan?</h2>
			<input type="radio" name="pilihan" value="33">Ya <br>
			<input type="radio" name="pilihan" value="34">Tidak<br>
			
	<?php
	break;
							/* Pilihan jika 21=a 33=a 33=a 45=a 65=ab */
									/* soal 33*/
	case 33:
	?>
			<h2>Napas kamu sesak atau dada terasa berat?</h2>
			<input type="radio" name="pilihan" value="45">Ya <br>
			<input type="radio" name="pilihan" value="46">Tidak<br>
			
	<?php
			
	break;
									/*soal 34*/
	case 34:
	?>
			<h2>Napas kamu sesak atau dada terasa berat?</h2>
			<input type="radio" name="pilihan" value="48">Ya <br>
			<input type="radio" name="pilihan" value="47"> Tidak<br>
	<?php
	break;
									
										/* soal 45*/
	case 45:
	?>
			<h2>Pernah berada dalam satu ruangan dengan pasien positif COVID-19?</h2>
			<input type="radio" name="pilihan" value="54">Ya <br>
			<input type="radio" name="pilihan" value="55">Tidak<br>
			
	<?php
			
	break;
									/* soal 46*/
	case 46:
	?>
			<h2>Pernah berada dalam satu ruangan dengan pasien positif COVID-19?</h2>
			<input type="radio" name="pilihan" value="68">Ya <br>
			<input type="radio" name="pilihan" value="67">Tidak/Tidak Tahu<br>
			
	<?php
			
	break;
	
									/* soal 47*/
	case 47:
	?>
			<h2>Pernah berada dalam satu ruangan dengan pasien positif COVID-19?</h2>
			<input type="radio" name="pilihan" value="56">Ya <br>
			<input type="radio" name="pilihan" value="57">Tidak/Tidak Tahu<br>
			
	<?php
			
	break;
	
	
									/*soal 48*/
	case 48:
	?>
			<h2>Apakah anda orang yang suka menunda-nunda pekerjaan dan akhirnya tidak jadi dilakukan ?</h2>
			<input type="radio" name="pilihan" value="42">Ya <br>
			<input type="radio" name="pilihan" value="43"> Tidak<br>
	<?php
	break;
				
									/* soal 54*/
	case 54:
	?>
			<h2>Apakah kamu bekerja di / pernah mengunjungi fasilitas publik/kesehatan yang berhubungan dengan pasien positif COVID-19?</h2>
			<input type="radio" name="pilihan" value="65">Ya <br>
			<input type="radio" name="pilihan" value="66">Tidak<br>
			
	<?php
			
	break;			
				
									/* soal 55*/
	case 55:
	?>
			<h2>Apakah anda sering menangis dikamar mandi ketika ada masalah ?</h2>
			<input type="radio" name="pilihan" value="70">Ya <br>
			<input type="radio" name="pilihan" value="69">Tidak<br>
			
	<?php
			
	break;					

										/* soal 56*/
	case 56:
	?>
			<h2>Apakah Anda lebih memilih untuk diam ketika berselisih paham dengan orang lain ?</h2>
			<input type="radio" name="pilihan" value="671">Ya <br>
			<input type="radio" name="pilihan" value="681">Tidak<br>
			
	<?php
			
	break;	
											/* soal 57*/
	case 57:
	?>
			<h2>Apakah kamu bekerja di / pernah mengunjungi fasilitas publik/kesehatan yang berhubungan dengan pasien positif COVID-19?</h2>
			<input type="radio" name="pilihan" value="703">Ya <br>
			<input type="radio" name="pilihan" value="693">Tidak<br>
			
	<?php
			
	break;	
										/* soal 65*/
	case 65:
	?>
			<h2>Adakah hubungan / kontak langsung dengan orang yang baru bepergian ke negara / kota terjangkit (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA, Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll) dalam 14 hari terakhir?</h2>
			<input type="radio" name="pilihan" value="75">Ya <br>
			<input type="radio" name="pilihan" value="76">Tidak<br>
			
	<?php
			
		break;

		case 75:
	?>
			<h2>Apakah kamu baru saja bepergian ke negara / kota terjangkit (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA, Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll) dalam waktu 14 hari terakhir?</h2>
			<input type="radio" name="pilihan" value="83">Ya <br>
			<input type="radio" name="pilihan" value="84">Tidak<br>
			
	<?php
			
		break;
									/* soal 66*/
	case 66:
	?>
			<h2> Apakah anda suka mengomentari mengenai rasa dari  makanan yang anda pesan ?</h2>
			<input type="radio" name="pilihan" value="80">Ya <br>
			<input type="radio" name="pilihan" value="761">Tidak<br>
			
	<?php
			
	break;
									/*soal 661*/
	case 661:
	?>
			<h2> Apakah Anda sering mencari kambing hitam ketika menghadapi masalah?</h2>
			<input type="radio" name="pilihan" value="751">Ya <br>
			<input type="radio" name="pilihan" value="762"> Tidak<br>
	<?php
	break;
										/*soal 651*/
	case 651:
	?>
			<h2> Apakah Anda sering mencari kambing hitam ketika menghadapi masalah ?</h2>
			<input type="radio" name="pilihan" value="753">Ya <br>
			<input type="radio" name="pilihan" value="76"> Tidak<br>
	<?php
	break;
	
										/* soal 67*/
	case 67:
	?>
			<h2>Apakah kamu bekerja di / pernah mengunjungi fasilitas publik/kesehatan yang berhubungan dengan pasien positif COVID-19?</h2>
			<input type="radio" name="pilihan" value="77">Ya <br>
			<input type="radio" name="pilihan" value="78">Tidak<br>
	<?php
	break;

	case 77:
	?>
			<h2>Adakah hubungan / kontak langsung dengan orang yang baru bepergian ke negara / kota terjangkit (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA, Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll) dalam 14 hari terakhir?</h2>
			<input type="radio" name="pilihan" value="84">Ya <br>
			<input type="radio" name="pilihan" value="83">Tidak<br>
	<?php
	break;

										/* soal 671*/
	case 671:
	?>
			<h2>Apakah anda tipe orang yang suka membicarakan orang lain, tetapi takut jika orang tersebut mengetahuinya ?</h2>
			<input type="radio" name="pilihan" value="771">Ya <br>
			<input type="radio" name="pilihan" value="781">Tidak<br>
			
	<?php
			
	break;
												/* soal 681*/
	case 681:
	?>
			<h2>Apakah anda tipe orang yang suka membicarakan orang lain, tetapi takut jika orang tersebut mengetahuinya ?</h2>
			<input type="radio" name="pilihan" value="771">Ya <br>
			<input type="radio" name="pilihan" value="781">Tidak<br>
			
	<?php
			
	break;
											/* soal 68*/
	case 68:
	?>
			<h2>Apakah anda tipe orang yang suka membicarakan orang lain, tetapi takut jika orang tersebut mengetahuinya ?</h2>
			<input type="radio" name="pilihan" value="72">Ya <br>
			<input type="radio" name="pilihan" value="6">Tidak<br>
			
	<?php
			
	break;
	
									/* soal 70*/
	case 70:
	?>
			<h2>Apakah anda suka mengomentari mengenai rasa dari makanan yang anda pesan ?</h2>
			<input type="radio" name="pilihan" value="7">Ya <br>
			<input type="radio" name="pilihan" value="6">Tidak<br>
			
	<?php
			
	break;
										/* soal 703*/
	case 703:
	?>
			<h2>Apakah anda suka mengomentari mengenai rasa dari makanan yang anda pesan ?</h2>
			<input type="radio" name="pilihan" value="795">Ya <br>
			<input type="radio" name="pilihan" value="805">Tidak<br>
			
	<?php
			
	break;
											
												/* soal 69*/
	case 69:
	?>
			<h2>Apakah anda tipe orang yang serius dalam mempersiapkan segala sesuatu ?</h2>
			<input type="radio" name="pilihan" value="72">Ya <br>
			<input type="radio" name="pilihan" value="762">Tidak<br>
			
	<?php
			
	break;
										/* soal 693*/
	case 693:
	?>
			<h2>Adakah hubungan / kontak langsung dengan orang yang baru bepergian ke negara / kota terjangkit (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA, Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll) dalam 14 hari terakhir?</h2>
			<input type="radio" name="pilihan" value="794">Ya <br>
			<input type="radio" name="pilihan" value="808">Tidak<br>
			
	<?php
			
	break;

	case 808:
	?>
			<h2>Apakah kamu baru saja bepergian ke negara / kota terjangkit (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA, Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll) dalam waktu 14 hari terakhir?</h2>
			<input type="radio" name="pilihan" value="794">Ya <br>
			<input type="radio" name="pilihan" value="804">Tidak<br>
			
	<?php
			
	break;										
		
									/* jawaban case 76*/
	case 76:
	?>
			<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
			<h2>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>
			<input type="submit" name="pilihan" value="default" >
			
	<?php
			exit();	
									/* jawaban case 751*/
	case 751:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
								<h2>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();	
							
			
				
									/* jawaban case 761*/
	case 761:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
								<h2>
								<p align=center><font color=000fff>kretria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();			
										/* jawaban case 762*/
	case 762:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  AB</h2>
								<H2>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h2>

								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();			
					
				
								/* jawaban case 79*/
	case 79:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
								<h2>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();					
								/* jawaban case 78*/
	case 78:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
								<h2>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();	
								/* jawaban case 78*/
	case 781:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  AB</h2>
								<H2>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();	
								/* jawaban case 77*/
	case 83:
	?>
								<h2>Kamu termasuk dalam Kategori Risiko Tinggi</h2>
								<h2>
	<p align=center><font color=000fff>Tidak perlu panik!</font></p>Jika gejala kamu ringan, pastikan kamu mengikuti cara isolasi diri di rumah yang benar menurut WHO / Kemenkes selama 14 hari di link ini http://j.mp/isolasi-di-rumah<br><br>Jika kamu berusia di atas 60 tahun atau memiliki diabetes, penyakit jantung, paru, ginjal atau daya tahan tubuh lemah sebaiknya langsung periksakan diri ke rumah sakit terdekat yang dapat menangani COVID-19. Cek daftar RS rujukan di https://j.mp/rs-rujukan-corona-halodoc<br><br>Cek artikel ini untuk tata cara mengunjungi RS http://j.mp/panduan-ke-rs</h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();	
											/* jawaban case 771*/
	case 771:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  AB</h2>
								<H2>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
													/* jawaban case 781*/
	case 781:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  AB</h2>
								<H2>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
								/* jawaban case 80*/
	case 80:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
								<h2>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
									/* jawaban case 791*/
	case 791:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
								<h2>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();					
								/* jawaban case 801*/
	case 801:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  AB</h2>
								<H2>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
									/* jawaban case 752*/
	case 752:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  AB</h2>
								<H2>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
								/* jawaban case 753*/
	case 753:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah AB</h2>
								<H2>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
											/* jawaban case 794*/
	case 794:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
								<h2>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
											/* jawaban case 804*/
	case 804:
	?>
								<h2>Kamu termasuk dalam Kategori Risiko Rendah</h2>
								<H2>
	<p align=center><font color=000fff>Meski berisiko rendah, namun jangan lengah.</font></p>Temukan cara mencegah COVID-19 di sini http://j.mp/sistem-imun<br><br>Ayo bantu mencegah penyebaran COVID-19 bersama sama dengan cara Social Distancing di link ini: http://j.mp/hd-social-distancing<br><br>Jika gejala Corona (demam, batuk, pilek, sesak nafas) mulai muncul, jangan panik, tanya dokter Halodoc via link ini: https://bit.ly/2xfSpHL<br><br>Atau buat janji untuk Rapid Test</h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
										/* jawaban case 805*/
	case 805:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah AB</h2>
								<H2>
	<p align=center><font color=000fff>Kriteria Golongan Darah AB</font></p>
1.	Mereka tidak memusingkan hal-hal kecil dan terlihat sebagai orang yang religious<br>
2.	Mereka tidak suka dibatasi. jika merasa sangat dikekang, mereka akan keluar jalur dan melakukan hal-hal dengan cara mereka sendiri.<br>
3.	Karakter orang ini mudah berubah-ubah tergantung mood.<br>
4.	Pecinta kedamaian, paling tidak suka terlibat pertikaian individual.</h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
											/* jawaban case 795*/
	case 795:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
								<h2>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>

								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
												/* jawaban case 795*/
	case 7:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
								<h2>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
											/* jawaban case 795*/
	case 8:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah  A</h2>
								<h2>
								<p align=center><font color=000fff>Kriteria Golongan Darah A</font></p>
1. 	Orang dengan golongan darah ini dapat menahan emosi sampai akhirnya meledak<br>
2.	Menekan perasaan diri sendiri, itulah yang kerap dilakukan Tipe Darah A <br>
3.	Benar-benar perhatian terhadap sekitar dan hal-hal yang kecil sekalipun <br>
4.	Selalu melakukan segala sesuatu dengan sangat teliti, sangat berhati-hati, perfeksionis </h2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();
			
			
			
			
																			
		
		
				
							/* JIKA PILIHAN PERTAMA (1) ADALAH YA*/
											/*soal 22*/
	case 22:
	?>
	<h2>Adakah gejala batuk, pilek atau nyeri tenggorokan?</h2>
			<input type="radio" name="pilihan" value="32">Ya <br>
			<input type="radio" name="pilihan" value="31">Tidak<br>
	<?php
	break;
										/* Soal 32*/
	case 32:
	?>
	<h2>Napas kamu sesak atau dada terasa berat?</h2>
			<input type="radio" name="pilihan" value="43">Ya <br>
			<input type="radio" name="pilihan" value="44">Tidak<br>
	<?php
	break;
										/* Soal 31*/
	case 31:
	?>
	<h2>3.	Apakah anda suka lama-lama ketika mengambil uang di ATM meskipun ada orang yang mengantri dibelakang anda?</h2>
			<input type="radio" name="pilihan" value="41">Ya <br>
			<input type="radio" name="pilihan" value="42">Tidak<br>
	<?php
	break;
										/* Soal 43*/
	case 43:
	?>
	<h2>Pernah berada dalam satu ruangan dengan pasien positif COVID-19?</h2>
			<input type="radio" name="pilihan" value="53">Ya <br>
			<input type="radio" name="pilihan" value="511">Tidak<br>
	<?php
	break;
											/* Soal 44*/
	case 44:
	?>
	<h2>Apakah anda suka mempelajari mata pelajaran yang disukai saja ?</h2>
			<input type="radio" name="pilihan" value="611">Ya <br>
			<input type="radio" name="pilihan" value="621">Tidak<br>
	<?php
	break;
											/* Soal 42*/
	case 42:
	?>
	<h2>Apakah Anda suka merasa kebingungan ketika memilih menu makanan ?</h2>
			<input type="radio" name="pilihan" value="63">Ya <br>
			<input type="radio" name="pilihan" value="64">Tidak<br>
	<?php
	break;
										/* Soal 41*/
	case 41:
	?>
	<h2>Apakah anda suka memikirkan suatu masalah ketika sedang mandi ?</h2>
			<input type="radio" name="pilihan" value="52">Ya <br>
			<input type="radio" name="pilihan" value="51">Tidak<br>
	<?php
	break;
										/* Soal 51*/
	case 51:
	?>
	<h2>Apakah anda suka mempelajari mata pelajaran yang disukai saja ?</h2>
			<input type="radio" name="pilihan" value="61">Ya <br>
			<input type="radio" name="pilihan" value="62">Tidak<br>
	<?php
	break;
										/* Soal 511*/
	case 511:
	?>
	<h2> Apakah anda suka mempelajari mata pelajaran yang disukai saja ?</h2>
			<input type="radio" name="pilihan" value="612">Ya <br>
			<input type="radio" name="pilihan" value="622">Tidak<br>
	<?php
	break;
										/* Soal 52*/
	case 52:
	?>
	<h2>Apakah Anda suka merasa kebingungan ketika memilih menu makanan ?</h2>
			<input type="radio" name="pilihan" value="632">Ya <br>
			<input type="radio" name="pilihan" value="642">Tidak<br>
	<?php
	break;
	
										/* Soal 53*/
	case 53:
	?>
	<h2>Apakah kamu bekerja di / pernah mengunjungi fasilitas publik/kesehatan yang berhubungan dengan pasien positif COVID-19?</h2>
			<input type="radio" name="pilihan" value="631">Ya <br>
			<input type="radio" name="pilihan" value="641">Tidak<br>
	<?php
	break;
	
	
										/* Soal 61*/
	case 61:
	?>
	<h2>Apakah anda orang yang selektif dalam memilih teman ?</h2>
			<input type="radio" name="pilihan" value="72">Ya <br>
			<input type="radio" name="pilihan" value="71">Tidak<br>
	<?php
	break;
										/* Soal 62*/
	case 62:
	?>
	<h2>Apakah Anda tipe orang yang terbuka terhadap siapa saja ?</h2>
			<input type="radio" name="pilihan" value="72">Ya <br>
			<input type="radio" name="pilihan" value="71">Tidak<br>
	<?php
	break;
										/* Soal 611*/
	case 611:
	?>
	<h2>Apakah anda orang yang selektif dalam memilih teman ?</h2>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="71">Tidak<br>
	<?php
	break;
										/* Soal 621*/
	case 621:
	?>
	<h2>Apakah Anda tipe orang yang terbuka terhadap siapa saja? </h2>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
		
											/* Soal 612*/
	case 612:
	?>
	<h2>Apakah anda suka mempelajari mata pelajaran yang disukai saja ?</h2>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
										/* Soal 622*/
	case 622:
	?>
	<h2>Apakah Anda tipe orang yang terbuka terhadap siapa saja?</h2>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
										/* Soal 63*/
	case 63:
	?>
	<h2>apakah anda orang yang peka terhadap perasaan orang lain?</h2>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
										/* Soal 631*/
	case 631:
	?>
	<h2>Adakah hubungan / kontak langsung dengan orang yang baru bepergian ke negara / kota terjangkit (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA, Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll) dalam 14 hari terakhir?</h2>
			<input type="radio" name="pilihan" value="633">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;

	case 633:
	?>
	<h2>Apakah kamu baru saja bepergian ke negara / kota terjangkit (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA, Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll) dalam waktu 14 hari terakhir?</h2>
			<input type="radio" name="pilihan" value="777">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
										/* Soal 632*/
	case 632:
	?>
	<h2>apakah anda tipe orang yang peka terhadap perasaan orang lain?</h2>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="6">Tidak<br>
	<?php
	break;
										/* Soal 641*/
	case 641:
	?>
	<h2>Apakah anda orang yang selektif dalam memilih teman ?</h2>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="6">Tidak<br>
	<?php
	break;
										/* Soal 642*/
	case 642:
	?>
	<h2>Apakah anda orang yang selektif dalam memilih teman ?</h2>
			<input type="radio" name="pilihan" value="72">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
										/* Soal 64*/
	case 64:
	?>
	<h2>Apakah anda orang yang selektif dalam memilih teman ?</h2>
			<input type="radio" name="pilihan" value="6">Ya <br>
			<input type="radio" name="pilihan" value="72">Tidak<br>
	<?php
	break;
	
	
	
	
	
										/*jawaban 72 */
										
	case 72:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah B</h2></br>
	<h2>							
<p align=center><font color=red>Kriteria Golongan Darah B</font></p>
1.	Mereka memiliki empati, mudah memahami pemikiran orang lain.<br>
2.	Mereka adalah spesialis di bidang yang digelutinya.<br>
3.	Jika mengerjakan sesuatu, mereka selalu fokus kepada apa yang tengah dikerjakan.<br>
4.	Tidak peduli dengan keadaan sekitar, mengharapkan banyak kebebasan<br>
5.	Memiliki gejolak emosi yang besar, temperamental.</h2>


								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();	
										/*jawaban 71 */
										
	case 71:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah B</h2>
								<h2>							
<p align=center><font color=red>Kriteria Golongan Darah B</font></p>
1.	Mereka memiliki empati, mudah memahami pemikiran orang lain.<br>
2.	Mereka adalah spesialis di bidang yang digelutinya.<br>
3.	Jika mengerjakan sesuatu, mereka selalu fokus kepada apa yang tengah dikerjakan.<br>
4.	Tidak peduli dengan keadaan sekitar, mengharapkan banyak kebebasan<br>
5.	Memiliki gejolak emosi yang besar, temperamental.</h2>								
								
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();	
												/*jawaban 6 */
										
	case 6:
	?>
								<h2>Anda cenderung memiliki tipe golongan darah O</h2>
								
	<H2>
	<p align=center><font color=000fff>Kriteria Golongan Darah O</font></p>
	1.Memiliki jiwa Pemimpin, berani<Br>
	2.Memiliki karakter yang terbuka, energik dan sosial<Br>
	3.Orang tipe ini suka menjadi pusat perhatian. Mengatakan apa yang ada dalam pikirannya secara jujur.<br>
	4.Emosinya bersifat stabil, sederhana sehingga apa yang telah terjadi tidak pernah meninggalkan efek yang lama.
	</H2>
								<input type="submit" name="pilihan" value="default" >
	<?php	
			exit();	
	
	default:
	?>
	<h2><blink>Mulai</blink></h2>
	<h2>Apakah kamu mengalami demam dalam 14 hari terakhir?</h2>
			<input type="radio" name="pilihan" value="22">Ya <br>
			<input type="radio" name="pilihan" value="21">Tidak<br>
	<?php
	
	break;
}


?>



					
<input  type="submit" name="next" value="next" >
</form>


</body>

</html>