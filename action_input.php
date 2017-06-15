<?php

	
	$nim	= $_POST['nim'];
	$nama	= $_POST['nama'];

	
	
	$cek=mysql_num_rows (mysql_query("SELECT nim FROM login WHERE nim='$_POST[nim]'"));
	if ($cek > 0) {
	?>
		<script language="JavaScript">
			alert('NIM/NIP Mahasiswa sudah dipakai, ulangi lagi!');
			document.location='masuk.php';
		</script>
	<?php
	}
	//input data ke table mahasiswa dalam database akademik
	$input	="INSERT INTO login (nim, nama)
			VALUES ('$nim','$nama')";
	$query_input =mysql_query($input);
		if ($query_input) {
	//Jika Sukses
	?>
		<script language="JavaScript">
			alert('Login Sukses!!');
			document.location='masuk.php';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Login Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine mysql
	mysql_close($Open);
?>