hapus<?php 

	$id = $_GET ['id'];

	$koneksi->query("DELETE FROM user WHERE id = '$id'");


?>


<script type="text/javascript">
		window.location.href="?page=user";
</script>