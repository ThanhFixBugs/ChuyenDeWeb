<?php
class sach
{
   public $masach;
   public $tensach;
   public $giabia;
   public $maNXB;
   public $matg;
   public $maloai;
   function __construct($masach, $tensach, $giabia, $maNXB, $matg, $maloai)
   {
      $this->masach = $masach;
      $this->tensach = $tensach;
      $this->giabia = $giabia;
      $this->maNXB = $maNXB;
      $this->matg = $matg;
      $this->maloai = $maloai;
   }
   static function allsach()
   {
      $list = [];
      $db = DB::getInstance();
      $result = $db->prepare('SELECT * FROM sach');
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $result->execute();
      foreach ($result->fetchAll() as $item) {
         $s[] = new sach(
            $item['masach'],
            $item['tensach'],
            $item['giabia'],
            $item['maNXB'],
            $item['matg'],
            $item['maloai']
         );
      }
      return $s;
   }

   static function Themsach($masach, $tensach, $giabia, $maNXB, $matg, $maloai)
   {
      $db = DB::getInstance();
      //Kiem tra trùng khoa chinh
      $sql = $db->prepare('SeLect masach from sach where masach= :masach');
      $sql->execute(array('masach' => $masach));
      $item = $sql->fetch();
      //Kiểm tra dữ liệu hợp lệ
      //Sinh viên tự làm
      //Kiem tra trung khoa chinh
      if (isset($item['masach'])) {
         return 0;
      }
      $stmt = $db->prepare("SET AUTOCOMMIT = 0;START TRANSACTION;BEGIN;INSERT INTO 
sach(masach,tensach,giabia,maNXB,matg,maloai) VALUES 
(:masach,:tensach,:giabia,:maNXB,:matg,:maloai);COMMIT;ROLLBACK;");

      $stmt->bindParam(':masach', $masach);
      $stmt->bindParam(':tensach', $tensach);
      $stmt->bindParam(':giabia', $giabia);
      $stmt->bindParam(':maNXB', $maNXB);
      $stmt->bindParam(':matg', $matg);
      $stmt->bindParam(':maloai', $maloai);
      $dpdExec = $stmt->execute();
      if ($dpdExec)
         return 1;
      else
         return 0;
   }


   static function Suasach($masach, $tensach, $giabia, $maNXB, $matg, $maloai)
   {
      $db = DB::getInstance();
      $sql = "Update sach Set tensach = :tensach, giabia=:giabia,maNXB = :maNXB, matg=:matg,maloai=:maloai where masach= :masach";
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':masach', $masach);
      $stmt->bindParam(':tensach', $tensach);
      $stmt->bindParam(':giabia', $giabia);
      $stmt->bindParam(':maNXB', $maNXB);
      $stmt->bindParam(':matg', $matg);
      $stmt->bindParam(':maloai', $maloai);
      $pdoExec = $stmt->execute();
      if ($pdoExec)
         return 1;
      else
         return 0;
   }
   static function findS($masach)
   {
      $db = DB::getInstance();
      $result = $db->prepare('SELECT * FROM sach WHERE masach = :masach');
      $result->execute(array('masach' => $masach));
      foreach ($result->fetchAll() as $item) {
         $list[] = new sach(
            $item['masach'],
            $item['tensach'],
            $item['giabia'],
            $item['maNXB'],
            $item['matg'],
            $item['maloai']
         );
      }
      return $list;
   }
}
