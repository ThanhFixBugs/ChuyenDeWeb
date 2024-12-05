<?php if (!isset($ketqua)) { ?>
    <div class="container">
        <h2> DANH MỤC MƯỢN TRẢ </h2>
        <a href="index.php?controller=muontra&action=themmuontra">Thêm mượn trả</a>
        <form id="formdmmuontra" action="" method="POST">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10%;">id</th>
                        <th style="width: 10%;">Mã mượn trả</th>
                        <th style="width: 10%;">Mã đọc giả</th>
                        <th style="width: 10%;">Mã sách</th>
                        <th style="width: 10%;">Ngày hết hạn</th>
                        <th style="width: 10%;">Ngày mượn</th>
                        <th style="width: 10%;">Ngày trả</th>
                        <th style="width: 10%;"><a href="">Thao tác</a></th>
                    </tr>
                </thead>
                <tbody>
                    <input type="hidden" name="stt" id="stt" value="">
                    <?php
                    $i = 1;
                    foreach ($muontras as $mt) { ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?= $mt->Mamuontra ?> <input type="hidden" id="<?php echo 'Mamuontra' . $i; ?>" name="<?php echo 'Mamuontra' . $i; ?>" value="<?= $mt->Mamuontra ?>"></td>

                            <td><?= $mt->MaDocGia ?> <input type="hidden" id="<?php echo 'MaDocGia' . $i; ?>" name="<?php echo 'MaDocGia' . $i; ?>" value="<?= $mt->MaDocGia ?>"></td>

                            <td><?= $mt->masach ?> <input type="hidden" id="<?php echo 'masach' . $i; ?>" name="<?php echo 'masach' . $i; ?>" value="<?= $mt->masach ?>"></td>

                            <td><?= $mt->ngayhethan ?> <input type="hidden" id="<?php echo 'ngayhethan' . $i; ?>" name="<?php echo 'ngayhethan' . $i; ?>" value="<?= $mt->ngayhethan ?>"></td>

                            <td><?= $mt->ngaymuon ?> <input type="hidden" id="<?php echo 'ngaymuon' . $i; ?>" name="<?php echo 'ngaymuon' . $i; ?>" value="<?= $mt->ngaymuon ?>"></td>

                            <td><?= $mt->ngaytra ?> <input type="hidden" id="<?php echo 'ngaytra' . $i; ?>" name="<?php echo 'ngaytra' . $i; ?>" value="<?= $mt->ngaytra ?>"></td>

                            <td><a href="index.php?controller=muontra&action=Suathongtinmuontra&Mamuontra=<?= $mt->Mamuontra ?>"> Sửa</a>
                            </td>
                        </tr>
                    <?php $i++;
                    } ?>
                </tbody>
            </table>
        </form>
    <?php } else echo 'Mã sách không được rỗng'; ?>
    </div>