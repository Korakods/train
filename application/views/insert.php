<!DOCTYPE html>
<html>
<head>
<style> 
input {
  width: 50%;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<body>

<h1>เพิ่มข้อมูลตารางเวลารถไฟ</h1>

<form action="./insert" method="POST">  <center>
  <label for="t_id">ขบวน</label> 
  <input type="text" id="t_id" name="t_id" > 
  <br><br><br>
  <label for="t_name">สถานี</label>
  <input type="text" id="t_name" name="t_name">
  <br><br><br>
  <label for="t_out">เวลาออก</label>
  <input type="time" id="t_out" name="t_out">
  <br><br><br>
  <label for="h_to">ถึง</label>
  <input type="time" id="h_to" name="h_to">
  <br><br><br>
  <label for="h_out">ออก</label>
  <input type="time" id="h_out" name="h_out">
  <br><br><br>
  <label for="f_name">สถานี</label>
  <input type="text" id="f_name" name="f_name">
  <br><br><br>
    <label for="f_out">ถึงเวลา</label>
  <input type="time" id="f_out" name="f_out">
  <br><br><br>
  <label for="type">หมายเหตุ</label>
  <input type="text" id="type" name="type">
  <br><br><br>
<rigth>
   <a href="../Train/index" class="button">ยืนยัน</a>

</form>

</body>
</html>