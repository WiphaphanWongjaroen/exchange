<?php
if (isset($_POST['country'])) {
	switch ($_POST['country']) {
		case 'eur':
			$money = $_POST['money']*0.026832204;
			$money = number_format($money, 2, '.', '');
			$money = $money." ยูโร";
			break;
		case 'pon':
			$money = $_POST['money']*0.023015722;
			$money = number_format($money, 2, '.', '');
			$money = $money." ปอนด์ ";
			break;
		case 'sgd':
			$money = $_POST['money']*0.040504068;
			$money = number_format($money, 2, '.', '');
			$money = $money." ดอลลาร์สิงคโปร์";
			break;
		
		default:
			break;
	}
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="exchange">
		<h1>เปลี่ยนค่าเงิน</h1>
		<form method="POST" action="index.php">
			<input type="number" name="money" placeholder="กรอกค่าเงิน" required>
			<select name="country" required>
				<option> เลือกค่าเงิน </option>
				<option value="eur">ยูโร</option>
				<option value="pon">ปอนด์</option>
				<option value="sgd">ดอลลาร์สิงคโปร์</option>
			</select>
			<button>ตกลง</button>
		</form>
			<?php
if (isset($_POST['country'])) {
 echo "<h2> ".$money." </h2>";
}
	?>
		</div>

</body>
</html>
<style type="text/css">
body{
	background: #123088;
}
#exchange{
	width: 340px;
	background: #fff;
	padding: 20px;
	margin: 15% auto;
}
h1,h2{
	text-align: center;
}
</style>
