<?php 

	$id = $_GET ['id'];

	$koneksi->query("DELETE FROM tb_kelas WHERE id = '$id'");


?>


<script type="text/javascript">
		window.location.href="?page=kelas";
</script>