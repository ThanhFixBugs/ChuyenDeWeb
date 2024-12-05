<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Updated Navigation Bar</title>
  <style>
    /* Reset mặc định */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      color: #333;
    }

    header {
      text-align: center;
      padding: 20px;
    }

    header h1 {
      font-size: 1.5rem;
      font-weight: normal;
    }

    .navbar {
      background-color: #2a2a4a; /* Màu nền thanh nav */
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 50px;
    }

    .navbar .brand {
      font-size: 1.5rem;
      font-weight: bold;
      color: white;
    }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 20px;
    }

    .nav-links a {
      text-decoration: none;
      color: white;
      font-size: 1rem;
      padding: 10px 15px;
      transition: background 0.3s, color 0.3s;
    }

    .nav-links a:hover {
      color: #ffcc00;
    }

    .nav-links a.active {
      background: #ffcc00;
      color: #2a2a4a;
      border-radius: 5px;
    }

    .navbar .search-box {
      display: flex;
      align-items: center;
    }

    .navbar .search-box input {
      padding: 5px 10px;
      font-size: 1rem;
      border: 1px solid #ddd;
      border-radius: 5px 0 0 5px;
      outline: none;
    }

    .navbar .search-box button {
      padding: 5px 10px;
      font-size: 1rem;
      border: none;
      background-color: #ffcc00;
      color: #2a2a4a;
      cursor: pointer;
      border-radius: 0 5px 5px 0;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 10px;
      z-index: 1000;
      list-style: none;
    }

    .nav-item:hover .dropdown-menu {
      display: block;
    }

    .dropdown-menu a {
      text-decoration: none;
      color: #333;
      display: block;
      padding: 5px 10px;
      transition: background 0.3s;
    }

    .dropdown-menu a:hover {
      background-color: #f8f9fa;
    }
  </style>
</head>
<body>
  <header>
    <h1></h1>
  </header>
  <nav class="navbar">
    <div class="brand"></div>
    <ul class="nav-links">
      <li class="nav-item">
        <a href="#" class="active">Home</a>
      </li>
      <li class="nav-item">
        <a href="#">Quản lý</a>
        <ul class="dropdown-menu">
          <li><a href="index.php?controller=sach&action=dss">Sách</a></li>
          <li><a href="index.php?controller=muontra&action=dsmt">Mượn Trả</a></li>
          <li><a href="index.php?controller=docgia&action=dsdg">Đọc Giả</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#">Catalog</a>
      </li>
      <li class="nav-item">
        <a href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a href="#">Contact</a>
      </li>
    </ul>
   
  </nav>
</body>
</html>
