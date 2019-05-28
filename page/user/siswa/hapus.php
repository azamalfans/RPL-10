<?php 

	$id = $_GET ['id'];

	$koneksi->query("DELETE FROM tb_siswa WHERE id = '$id'");


?>


<script type="text/javascript">
		window.location.href="?page=siswa";
</script>