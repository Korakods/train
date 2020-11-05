<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
</head>
<body>

<h2></h2>

<table>
  <tr>
    <th>ขบวน</th>
    <th>สถานี</th>
    <th>เวลาออก</th>
    <th>ถึง</th>
    <th>ออก</th>
    <th>สถานี</th>
    <th>ถึงเวลา</th>
    <th>หมายเหตุ</th>
  </tr>
  



           <?php    
                foreach ($CC->result_array() as $r) {
                    
                 ?>
<tr>
    <td>    <?php echo $r['t_id']; ?> </td>
    <td>    <?php echo $r['t_name']; ?> </td>
    <td>    <?php echo $r['t_out']; ?> </td>
    <td>    <?php echo $r['h_to']; ?> </td>
    <td>    <?php echo $r['h_out']; ?> </td>
    <td>    <?php echo $r['f_name']; ?> </td>
    <td>    <?php echo $r['f_out']; ?> </td>
    <td>    <?php echo $r['type']; ?> </td> 

  </tr>
</table>
 <a href="../Train/FromIn" class="button">เพิ่มตารางรถ</a>

                <?php } ?>

</body>
</html>

