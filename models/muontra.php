<?php
class muontra
{
    public $Mamuontra;
    public $MaDocGia;
    public $masach;
    public $ngayhethan;
    public $ngaymuon;
    public $ngaytra;
    function __construct($Mamuontra, $MaDocGia, $masach, $ngayhethan, $ngaymuon, $ngaytra)
    {
        $this->Mamuontra = $Mamuontra;
        $this->MaDocGia = $MaDocGia;
        $this->masach = $masach;
        $this->ngayhethan = $ngayhethan;
        $this->ngaymuon = $ngaymuon;
        $this->ngaytra = $ngaytra;
    }
    static function allmuontra()
    {
        $lis = [];
        $db = DB::getInstance();
        $result = $db->prepare('select * from muontra');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        foreach ($result->fetchAll() as $item) {
            $lis[] = new muontra(
                $item['Mamuontra'],
                $item['MaDocGia'],
                $item['masach'],
                $item['ngayhethan'],
                $item['ngaymuon'],
                $item['ngaytra']
            );
        }
        return $lis;
    }
    static function Themmuontra($Mamuontra, $MaDocGia, $masach, $ngayhethan, $ngaymuon, $ngaytra)
    {
        $db = DB::getInstance();
        //Kiem tra trùng khoa chinh
        $sql = $db->prepare('SeLect Mamuontra from muontra where Mamuontra= :Mamuontra');
        $sql->execute(array('Mamuontra' => $Mamuontra));
        $item = $sql->fetch();
        //Kiểm tra dữ liệu hợp lệ
        //Sinh viên tự làm
        //Kiem tra trung khoa chinh
        if (isset($item['Mamuontra'])) {
            return 0;
        }
        $stmt = $db->prepare("SET AUTOCOMMIT = 0;START TRANSACTION;BEGIN;INSERT INTO 
muontra(Mamuontra,MaDocGia,masach,ngayhethan,ngaymuon,ngaytra) VALUES 
(:Mamuontra,:MaDocGia,:masach,:ngayhethan,:ngaymuon,:ngaytra);COMMIT;ROLLBACK;");

        $stmt->bindParam(':Mamuontra', $Mamuontra);
        $stmt->bindParam(':MaDocGia', $MaDocGia);
        $stmt->bindParam(':masach', $masach);
        $stmt->bindParam(':ngayhethan', $ngayhethan);
        $stmt->bindParam(':ngaymuon', $ngaymuon);
        $stmt->bindParam(':ngaytra', $ngaytra);
        $dpdExec = $stmt->execute();
        if ($dpdExec)
            return 1;
        else
            return 0;
    }
}
