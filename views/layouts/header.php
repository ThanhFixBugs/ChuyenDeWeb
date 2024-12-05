<!DOCTYPE html>
<html>

<head>
  <title>Thực hành TMDT với PHP & MySQL</title>
  <!--bootstrap -->
  <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="resources/bootstrap/css/bootstrap3.css">
  <link rel="stylesheet" href="resources/bootstrap/css/menu.css">
  <link rel="stylesheet" href="resources/bootstrap/css/style.css">
  <link rel="stylesheet" href="font-awesome/bootstrap/css/font-awesome.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <style>
    .jumbotron {
      background-color: lightblue;
      color: #ffffff;
      margin: 0;
    }

    .container-fluid {
      padding: 60px 50px;
    }

    body {
      background-color: white;
    }
  </style>
  <script type="text/javascript">
    function ktluusach() {

      var formthemsach = document.getElementById('formThemSach');
      var giatrimasach = document.getElementById('masach').value;
      //  alert(giatrimasach);
      if (giatrimasach == "" || giatrimasach.length > 10) {
        alert("Mã sách không được rỗng hoặc vượt quá 10 kí tự");
        formthemsach["masach"].focus();
        return false;
      }
      formthemsach.submit();
    }

    function ktluudocgia() {

      var formthemDG = document.getElementById('formThemDG');
      var giatriMaDocGia = document.getElementById('MaDocGia').value;
      //  alert(giatrimasach);
      if (giatriMaDocGia == "" || giatriMaDocGia.length > 10) {
        alert("Mã đọc giả không được rỗng hoặc vượt quá 10 kí tự");
        formthemDG["MaDocGia"].focus();
        return false;
      }
      formthemDG.submit();
    }

    function ktluu() {
      var formthemmuontra = document.getElementById('formthemmuontra');
      var giatrimuontra = document.getElementById('Mamuontra').value;
      //  alert(giatrimasach);
      if (giatrimuontra == "" || giatrimuontra.length > 10) {
        alert("Mã mượn trả không được rỗng hoặc vượt quá 10 kí tự");
        formthemmuontra["Mamuontra"].focus();
        return false;
      }
      formthemmuontra.submit();
    }
  </script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="jumbotron text-center">
          <h2 style="color: white; font-family: Times New Roman">QUẢN LÝ THƯ VIỆN</h2>
          <p style="font-size: 15px;">Môn Học Chuyên Đề Web</p>
          <a href="index.php" ><img src="resources/logodhcl.png"  alt="" width="100" height="100"></a>
        </div>
      </div>
    </div>
  </div>