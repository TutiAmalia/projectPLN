<?php 
    $file_name = "{$employee->id}_{$periode->tahun}_{$periode->bulan}_manual.xls";
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="'.$file_name.'"');

?>
<style>
	table,
	th,
	td {
		border: 1px solid black;
	}

	th,
	td {
		padding: 5px;
		text-align: left;
	}

</style>
<table>
	<thead>
		<tr>
			<th colspan="31" rowspan="2" style="font-size:20px">
				<center>Data Log</center>
			</th>
		<tr></tr>
		</tr>
		<tr>
			<td colspan="2">
				Periode:
			</td>
			<td colspan="10"><?= get_month_name($periode->bulan)." ".$periode->tahun ?></td>
			<td colspan="14"></td>
			<td colspan="5"></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php 
                    for($i=1;$i<=31;$i++)
                { 
                ?>
			<td><?php echo $i;?></td>
			<?php  
                }
                ?>
		</tr>
		<td>No:</td>
		<td></td>
		<td>P<?= strval($employee->id) ?></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>Nama:</td>
		<td></td>
		<td><?= ucwords($employee->nama) ?></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>

		<tr>
			<?php for($i = 1; $i <= 31; $i++) : ?>
			<td><?php array_key_exists($i, $log) and print(date_format(date_create($log[$i]), 'H:i'))?></td>
			<?php endfor ?>
		</tr>
	</tbody>
</table>
