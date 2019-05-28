<?php 

	$id = $_GET ['id'];

	$koneksi->query("DELETE FROM tb_guru WHERE id = '$id'");


?>


<script type="text/javascript">
		window.location.href="?page=guru";
</script>