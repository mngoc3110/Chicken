<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
        }
        /* Header container */
        .header {
           
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            padding: 10px 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 25px;
            max-width: 90%;
            margin: 20px auto;
        }
        /* Menu items */
        .menu-item {
            font-size:20px;
            margin: 0 15px;
            padding: 5px 15px;
            font-weight: bold;
            color: #333;
            background-color: #f9f9f9;
            border-radius: 20px;
            text-decoration: none;
            transition: background-color 0.3s, box-shadow 0.3s;
        }
        .menu-item:hover {
            background-color: #e2e2e2;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        /* Icon styles */
        .menu-icon {
            margin-left: 15px;
            display: flex;
            align-items: center;
        }
        .flag-icon {
            width: 36px;
            height: 24px;
            margin-right: 10px;
            border-radius: 4px;
        }
        .search-icon {
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>

<!-- Header section -->
<div class="header">
    <a href="#" class="menu-item">Trang chủ</a>
    <a href="#" class="menu-item">Danh mục</a>
    <a href="#" class="menu-item">Khuyến mãi</a>
    <a href="#" class="menu-item">Blog</a>
    <a href="#" class="menu-item">Sự kiện</a>
    <a href="#" class="menu-item">Liên hệ</a>
    <a href="#" class="menu-item">Hệ thống</a>
    <a href="#" class="menu-item">Đăng nhập</a>

    <!-- Icon section -->
    <div class="menu-icon">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/800px-Flag_of_Vietnam.svg.png" alt="Vietnam Flag" class="flag-icon">
        <i class="search-icon">&#128269;</i> <!-- Unicode character for magnifying glass -->
    </div>
</div>

</body>
</html>
