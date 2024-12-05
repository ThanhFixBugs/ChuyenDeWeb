<div class="container">
    <h2>THÊM SÁCH</h2>
    <form class="row mt-3 mb-3" id="formThemSach" name="formThemSach" action="index.php?controller=sach&action=xuly_themsach" method="post">
    <div class="col-6">
        Mã sách: <input type="text" id="masach" name="masach" class="form-control"><br>
        Tên sách: <input type="text"  name="tensach" class="form-control"><br>
        Giá bìa: <input type="text" name="giabia" class="form-control"><br>
    </div>
    <div class="col-6">
        Mã nhà xuất bản: <input type="text" name="manxb" class="form-control"><br>
        Mã tác giả: <input type="text" name="matg" class="form-control"><br>
        Mã Loại: <input type="text" name="maloai" class="form-control"><br>
    </div>
    <input type="button" value="Lưu" name="luu" onclick="ktluusach()" class="form-control">
    </form>
</div>

