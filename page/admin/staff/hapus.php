<?php 

	$id = $_GET ['id'];

	$koneksi->query("DELETE FROM tb_staff WHERE id = '$id'");


?>


<script type="text/javascript">
		window.location.href="?page=staff";
</script>