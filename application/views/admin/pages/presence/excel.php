<?php 
    //$file_name = "{$employee->id}_{$periode->tahun}_{$periode->bulan}_report.xls";
    header('Content-Type: application/octet-stream');
    //header('Content-Disposition: attachment;filename="'.$filename.'"');
    header("Content-Disposition: attachment; filename=contoh.xls");

?>

<!DOCTYPE html>
<html lang="en">
    <style>
    table, th, td {
    border: 1px solid black;
    }
    th, td {
    padding: 5px;
    text-align: left;    
    }
    </style>
    <table>
        <thead>
            <tr>
                <th colspan="31" rowspan="2" style="font-size:20px"><center>Data Log</center></th>
                <tr ></tr>
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
                <td><?= $employee->id ?></td>
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
	            <td><?php array_key_exists($i, $log) and print($log[$i]) ?></td>
            <?php endfor ?>
            </tr>
        </tbody>
    </table> 
</html>