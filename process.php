<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý file</title>
    <script type="text/javascript">
    function thongbao() {
        alert ("👉 Hãy liên hệ với Admin để được cấp tài khoản 👈         ---------------------------------------------------------")
    }
    </script>
</head>
<body>
<?php
$User = $_REQUEST["User"];
$Pass = $_REQUEST["Pass"];
if($User == "admin" && $Pass == "123456"){
    echo "<h1 align='center' style='font-size: 50px; color: black'>꧁ Bạn đã đăng nhập thành công ꧂</h1>";
    echo "<hr>";
    echo "<div class='content'>";
    echo "<h1 style='color: black' align='center'>";
    echo "<form action='upload.php' method='post' name='main-form' id='main-form' enctype='multipart/form-data'>";
    echo " <h3>Chọn file để upload:
    Cỡ lớn nhất mà Web đang cấu hình cho phép upload là 40MB </h3>";
    echo "<input type='file' name='fileupload' multiple='multiple'/>";
    echo "<input type='submit' value='Tiếp tục' name='submit' />";
    echo "</form>";
    echo "</div></h1> <br><br><br><br>";
    echo "<p align='center'>";
    echo "<img src='https://i.pinimg.com/originals/51/aa/11/51aa11a61bf05efe4f72cf0e76df42f4.gif'  style='width:120px; height:120px; margin-right:8px'></div>";
    echo "<img src='https://i.pinimg.com/originals/dc/b9/6f/dcb96f174bb3e9615a4f7d5e9e161f14.gif'  style='width:120px; height:120px; margin-right:8px'></div>";
    echo "<img src='https://anhdepfree.com/wp-content/uploads/2020/07/tha-tim-na.gif' style='width:120px; height:120px; margin-right:8px'></div>";
    echo "<img src='https://static2.yan.vn/photo/2017/09/09/de901bd6-97d9-4304-83a7-fae8f156d94a.gif' style='width:120px; height:120px; margin-right:8px'></div>";
    echo "<img src='https://i.pinimg.com/originals/a1/df/c2/a1dfc275b1b9e1b6f7c873bb26ec5d9e.gif' style='width:120px; height:120px; margin-right:8px'></div>";
    echo "<img src='https://i.pinimg.com/originals/95/96/d3/9596d3118ddd5c600806a44da90c4863.gif' style='width:120px; height:120px; margin-right:8px'></div>";
    echo "<img src='https://i.pinimg.com/originals/4c/4c/93/4c4c93363b37fe1a532ee9ae602e7069.gif' style='width:120px; height:120px; margin-right:8px'></div>";
    echo "<img src='https://i.pinimg.com/originals/6c/ef/ba/6cefba78c0b7db1fad684c486e83483f.gif' style='width:120px; height:120px; margin-right:8px'></div>";
    echo "<img src='https://i.pinimg.com/originals/ac/20/4c/ac204c92f7b0ed164c1e2dfc30dc9dbf.gif' style='width:120px; height:120px; margin-right:8px'></div>";
    echo "<img src='https://i.pinimg.com/originals/2a/2b/8b/2a2b8ba668c20da1ed6c93adc5fc703a.gif' style='width:120px; height:120px; margin-right:8px'></div>";
    echo "</p>";
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<p align="center" style="font-size:16px; font-family: monospace; font-color: pink"> === Copyright@2021_Design by Nguyen Thu === </p>';

}else{
    echo "<h1 align='center' style='font-size: 50px; color: red'> Đăng nhập thất bại !!! </h1><hr><hr>";
    echo '<h1 align="center">';
    echo '<a href="index.html" onClick="thongbao()">';
    echo '<button> 👈 Quay lại trang chủ</button>';
    echo '</a>';
    echo '</h1>';
    echo '</div>';
}
?>
</body>
</html>