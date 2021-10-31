<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload-File</title>
</head>
<body>
<br>
<?php
  
  // file upload.php xử lý upload file

  if ($_SERVER['REQUEST_METHOD'] !== 'POST')
  {
      // Dữ liệu gửi lên server không bằng phương thức post
      echo "Phải Post dữ liệu";
      die;
  }

  // Kiểm tra có dữ liệu fileupload trong $_FILES không
  // Nếu không có thì dừng
  if (!isset($_FILES["fileupload"]))
  {
      echo "Dữ liệu không đúng cấu trúc";
      die;
  }

  // Kiểm tra dữ liệu có bị lỗi không
  if ($_FILES["fileupload"]['error'] != 0)
  {
    echo "Dữ liệu upload bị lỗi hoặc không có";
    die;
  }

  // Đã có dữ liệu upload, thực hiện xử lý file upload

  //Thư mục bạn sẽ lưu file upload
  $target_dir    = "files/";
  //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
  $target_file   = $target_dir . basename($_FILES["fileupload"]["name"]);

  $allowUpload   = true;

  //Lấy phần mở rộng của file (jpg, png, ...)
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  // Cỡ lớn nhất được upload (bytes)
  $maxfilesize   = 10000000;

  ////Những loại file được phép upload
  $allowtypes    = array('jpg', 'png', 'jpeg', 'gif', 'docx', 'pdf');


 
  // Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
  // Bạn có thể phát triển code để lưu thành một tên file khác
  
  // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
  if ($_FILES["fileupload"]["size"] > $maxfilesize)
  {
      echo "Không được upload file lớn hơn $maxfilesize (bytes).";
      $allowUpload = false;
  }

  if ($allowUpload)
  {
      // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
      if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file))
      {
          echo "File: ". basename( $_FILES["fileupload"]["name"]).
          " đã upload thành công. ";

          echo "Được lưu tại thư mục:  " . $target_file;

      }
      else
      {
          echo "Có lỗi xảy ra khi upload file.";
      }
  }
  
?>
<br><br><br>
<div align="center">
<a href="index.html"> <button> 👈 Quay lại trang chủ </button> </a>
</div>
</body>
</html>