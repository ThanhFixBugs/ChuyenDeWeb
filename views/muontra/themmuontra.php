<div class="container">
 <div class="row">
 <form class="row mt-3 mb-3" id="formthemmuontra" name="formthemmuontra" action="index.php?controller=muontra&action=xuly_themmuontra" method="post">
    <div class="col-6">
    Mã mượn trả: <input type="text" name="Mamuontra" id="Mamuontra" class="form-control"><br>
    Mã độc giả: <input type="text" name="MaDocGia" class="form-control"><br>
    Mã sách: <input type="text" name="masach" class="form-control"><br>
    </div>
    <div class="col-6">
    Ngày hết hạn: <input type="date" name="ngayhethan" class="form-control"><br>
    Ngày mượn: <input type="date" name="ngaymuon" class="form-control"><br>
    Ngày trả: <input type="date" name="ngaytra" class="form-control"><br>
    </div>
    <input type="button" value="Lưu" onclick="ktluu()" class="form-control">
</form>
 </div>
</div>