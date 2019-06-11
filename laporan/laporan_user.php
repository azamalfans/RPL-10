<?php
$koneksi = new mysqli("localhost","root","","db_sekolah");
$content = '
	<style>
		h2 {
			font-family: arial;
			text-align: center;
		}

		table {
			border-collapse: collapse;
			border: 1px solid #000;
		}

		table th {
			padding: 8px 5px;
			background-color: #cccccc;
			border: 1px solid #000;
		}

		tr {
			text-align: center;
		}

		td {
			border: 1px solid #000;
		}


	</style>
';


	$content .= '

<page>
	<h2>Laporan Data Kelas</h2>
	
	<table align="center">
		<tr>
			<th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Level</th>
		</tr>';

			$no = 1;

            $sql = $koneksi->query("select * from user");

            while ($data = $sql->fetch_assoc()) {

            $content .= '

            	<tr>
                    <td>'.$no++.'</td>
                    <td>'.$data['nama'].'</td>
                    <td>'.$data['username'].'</td>
                    <td>'.$data['level'].'</td>               
                </tr>

            ';
        }
        $content .= '
	</table>
	
</page>';

	require_once('../assets/html2pdf/html2pdf.class.php');
	$html2pdf = new HTML2PDF('p','A4','fr');
	$html2pdf->WriteHTML($content);
	$html2pdf->output('example.pdf');
?>