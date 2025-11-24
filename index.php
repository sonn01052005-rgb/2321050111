<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buổi 1</title>
</head>
<body>
    <?php
    //1. Cú pháp in ra màn hình 
    echo "Hello World! <br>";
    echo "PHP";
    //2.Biến
    // Cú pháp: $ + tên biến = giá trị của biến 
    $ten = "Nguyễn Sơn";
    $tuoi = 20;
    echo "Xin chào " . $ten ." ". $tuoi . "tuổi"."<br>";
    // Hằng 
    define("soPi","3.14");
    echo soPi . "<br>";
    //4. Phân biệt '' và ""
    echo '$ten' . "<br>";
    echo "$ten" . "<br>";
    //5. Chuỗi 
    #5.1 Kiểm tra độ dài chuỗi
    echo strlen($ten) . "<br>";
    #5.2 Đếm số từ
    echo str_word_count($ten)."<br>";
    #5.3 Tìm kiếm ký tự trong chuỗi 
    echo strpos($ten, "S") . "<br>";
    #5.4 Thay thế kí tự trong chuỗi 
    echo str_replace("Sơn", "Son",$ten). "<br";
    //6. Toán tử 
    $soThuNhat = 10;
    $soThuHai = 5;
    // + - * / %
    echo $soThuNhat + $soThuHai;
    # += -= /= %= == != .....
    echo $soThuNhat += $soThuHai;
    //7. Câu điều kiện 
    $tong = $soThuNhat + $soThuHai;
    if ($tong < 15){
        echo "Hiện thị tổng là ". $tong . "nhỏ hơn 15";
    }elseif($tong == 15){
        echo "Hiện thị tổng là: ";
    }else{
        echo "Hiệnn thị tổng là: ". $tong . "lớn hơn 15";
    };    

     ?>
</body>
</html>
