<?php
session_start();
session_destroy();
echo"
		<script language='javascript'>
		window.alert('Anda Berhasil Keluar');
		window.location=('index.php')
		</script>
		";
?>