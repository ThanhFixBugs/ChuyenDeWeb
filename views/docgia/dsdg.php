<?php if (!isset($ketqua)) { ?>
    <div class="container">
        <h2>Danh sách thông tin đọc giả</h2>
        <a href="index.php?controller=docgia&action=themdocgia"> Thêm đọc giả </a>
        <form id="formdmdocgia" action="" method="POST">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 5%;">Id</th>
                        <th style="width: 10%;">Mã đọc giả</th>
                        <th style="width: 10%;">Tên đọc giả</th>
                        <th style="width: 10%;">Số điện thoại</th>
                        <th style="width: 10%;">Giới tính</th>
                        <th style="width: 10%;"><a href="">Thao tác</a></th>
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" name="stt" id="stt" value="">
                    <?php
                    $i = 1;
                    foreach ($docgias as $dg) { ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?= $dg->MaDocGia ?> <input type="hidden" id="<?php echo 'MaDocGia' . $i; ?>" name="<?php echo 'MaDocGia' . $i; ?>" value="<?= $dg->MaDocGia ?>"></td>

                            <td><?= $dg->Ten ?> <input type="hidden" id="<?php echo 'Ten' . $i; ?>" name="<?php echo 'Ten' . $i; ?>" value="<?= $dg->Ten ?>"></td>

                            <td><?= $dg->SDT ?> <input type="hidden" id="<?php echo 'SDT' . $i; ?>" name="<?php echo 'SDT' . $i; ?>" value="<?= $dg->SDT ?>"></td>

                            <td><?= $dg->GioiTinh ?> <input type="hidden" id="<?php echo 'GioiTinh' . $i; ?>" name="<?php echo 'GioiTinh' . $i; ?>" value="<?= $dg->GioiTinh ?>"></td>

                            <td><a href="index.php?controller=docgia&action=SuathongtinSP&maspsua=<?= $dg->MaDocGia ?>"> Sửa</a></td>
                        </tr>
                    <?php $i++;
                    } ?>
                </tbody>
            </table>
        </form>
    <?php } else echo 'Mã sp không được rỗng'; ?>
    </div>