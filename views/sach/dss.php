<?php //if (!isset($ketqua)) {
?>
    <div class="container">
        <h2> DANH MỤC SÁCH </h2>
        <a href="index.php?controller=sach&action=themsach">Thêm sách</a>
        <form id="formtimkiem" action="index.php?controller=sach&action=xulytimkiem" method="POST"> Tìm Kiếm <input type="text" name="tk"> <input type="submit" value="OK"></form>
       
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10%;">id</th>
                        <th style="width: 10%;">Mã sách</th>
                        <th style="width: 10%;">Tên sách</th>
                        <th style="width: 10%;">Giá bìa</th>
                        <th style="width: 10%;">Mã nhà xuất bản</th>
                        <th style="width: 10%;">Mã tác giả</th>
                        <th style="width: 10%;">Mã loại</th>
                        <th style="width: 10%;"><a href="">Thao tác</a></th>
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" name="stt" id="stt" value="">
                    <?php
                    $i = 1;
                    foreach ($sachs as $s) { ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?= $s->masach ?> <input type="hidden" id="<?php echo 'masach' . $i; ?>" name="<?php echo 'masach' . $i; ?>" value="<?= $s->masach ?>"></td>

                            <td><?= $s->tensach ?> <input type="hidden" id="<?php echo 'tensach' . $i; ?>" name="<?php echo 'tensach' . $i; ?>" value="<?= $s->tensach ?>"></td>

                            <td><?= $s->giabia ?> <input type="hidden" id="<?php echo 'giabia' . $i; ?>" name="<?php echo 'giabia' . $i; ?>" value="<?= $s->giabia ?>"></td>

                            <td><?= $s->maNXB ?> <input type="hidden" id="<?php echo 'maNXB' . $i; ?>" name="<?php echo 'maNXB' . $i; ?>" value="<?= $s->maNXB ?>"></td>

                            <td><?= $s->matg ?> <input type="hidden" id="<?php echo 'matg' . $i; ?>" name="<?php echo 'matg' . $i; ?>" value="<?= $s->matg ?>"></td>

                            <td><?= $s->maloai ?> <input type="hidden" id="<?php echo 'maloai' . $i; ?>" name="<?php echo 'maloai' . $i; ?>" value="<?= $s->maloai ?>"></td>

                            <td><a href="index.php?controller=sach&action=Suathongtinsach&masach=<?= $s->masach ?>"> Sửa</a>
                            </td>
                        </tr>
                    <?php $i++;
                    } ?>
                </tbody>
            </table>
      
    <?php //} else echo 'Mã sách không được rỗng'; ?>
    </div>