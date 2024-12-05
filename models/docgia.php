<?php
class docgia
{
    public $MaDocGia;
    public $Ten;
    public $SDT;
    public $GioiTinh;
    function __construct($MaDocGia, $Ten, $SDT, $GioiTinh)
    {
        $this->MaDocGia = $MaDocGia;
        $this->Ten = $Ten;
        $this->SDT = $SDT;
        $this->GioiTinh = $GioiTinh;
    }
    static function alldocgia()
    {
        $list = [];
        $db = DB::getInstance();
        $result = $db->prepare('SELECT * FROM docgia');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        foreach ($result->fetchAll() as $item) {
            $list[] = new docgia($item['MaDocGia'], $item['Ten'], $item['SDT'], $item['GIoiTinh']);
        }
        return $list;
    }
    static function Themdocgia($MaDocGia, $Ten, $SDT, $GioiTinh)
    {
        $db = DB::getInstance();
        //Kiem tra trùng khoa chinh
        $sql = $db->prepare('SeLect MaDocGia from docgia where MaDocGia= :MaDocGia');
        $sql->execute(array('MaDocGia' => $MaDocGia));
        $item = $sql->fetch();
        //Kiểm tra dữ liệu hợp lệ
        //Sinh viên tự làm
        //Kiem tra trung khoa chinh
        if (isset($item['MaDocGia'])) {
            return 0;
        }
        $stmt = $db->prepare("SET AUTOCOMMIT = 0;START TRANSACTION;BEGIN;INSERT INTO 
docgia(MaDocGia,Ten,SDT,GioiTinh) VALUES 
(:MaDocGia,:Ten,:SDT,:GioiTinh);COMMIT;ROLLBACK;");

        $stmt->bindParam(':MaDocGia', $MaDocGia);
        $stmt->bindParam(':Ten', $Ten);
        $stmt->bindParam(':SDT', $SDT);
        $stmt->bindParam(':GioiTinh', $GioiTinh);
        $dpdExec = $stmt->execute();
        if ($dpdExec)
            return 1;
        else
            return 0;
    }
}
