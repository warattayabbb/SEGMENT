
<?php
    error_reporting(0);
    $x =$_POST['x'];
    $y =$_POST['y'];
    $z =$_POST['z'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEGMENTS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<h1>โปรแกรมคำนวณพื้นที่เซกเมนต์</h1>
<form action="" method="post">
    ความยาวด้าน : <input type="text" name="x" id="x" class="input1"><br><br>
    จำนวนด้าน : <input type="number" name="y" id="y" min="3" class="input2"><br><br>
    รัศมี : <input type="text" name="z" id="z" class="input3"><br><br>
    
    <button type="submit" class="submit-button">คำนวณ</button>
    <button type="reset" class="cancel-button">ยกเลิก</button>
</form>

<div class="result-container">
        <h3 class="result-title">ผลลัพธ์</h3>
        <div class="result-value">
            <?php
        

                $m1 = ($y-3)*($y+284);
                $m2 = $m1/200;
                $m3 = 3.8267+$m2;
                $m4 = $x/$m3;
                $m5 = $m4*$m4;
                $m6 = round($m5, 5);




                echo "พื้นที่เซกเมนต์ = $m6 ";
                
                ?>
        </div>
</div>


<div class="pic1-container">
    <img class="pic1" src="image\square.png" alt="">
</div>
<div class="pic2-container">
    <img class="pic2" src="image\rectangle.png" alt="">
</div>
<div class="pic3-container">
    <img class="pic3" src="image\tri.png" alt="">
</div>
<div class="pic4-container">
    <img class="pic4" src="image\semi.png" alt="">
</div>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Circle</title>
    <link rel="stylesheet" href="styles.css">
</head>




<?php
    // ดึงค่าจำนวนด้านจาก input
    $sides = isset($y) ? intval($y) : 3; // ค่าเริ่มต้นคือ 3
    if ($sides < 3) $sides = 3; // จำนวนด้านต้องไม่น้อยกว่า 3

    // ฟังก์ชันสร้างค่า clip-path สำหรับหลายเหลี่ยม
    function createPolygon($sides) {
        $points = [];
        for ($i = 0; $i < $sides; $i++) {
            $angle = (2 * M_PI * $i) / $sides; // คำนวณมุมในแต่ละจุด
            $m = 50 + 50 * cos($angle); // คำนวณตำแหน่ง x
            $p = 50 + 50 * sin($angle); // คำนวณตำแหน่ง y
            $points[] = "$m% $p%";
        }
        return implode(", ", $points); // รวมจุดต่าง ๆ เป็นรูปแบบ string
    }
    ?>

      <!-- แสดงรูปทรงหลายเหลี่ยม -->


<body>
    
    <div class="container">
        <div class="circle"></div>
        <div class="polygon" style="clip-path: polygon(<?= createPolygon($sides) ?>);"></div>
</body>

</body>
</html>
