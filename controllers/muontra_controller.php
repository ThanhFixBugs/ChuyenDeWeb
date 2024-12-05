<?php
require_once('controllers/base_controller.php');
require_once('models/muontra.php');
class MuontraController extends BaseController{
    function __construct(){
        $this->folder='muontra';
    }
    public function themmuontra(){
        $this->render('themmuontra');
    }
    public function error(){
        $this->render('error');
    }
    public function dsmt(){
        $muontras = muontra::allmuontra();
        $data = array('muontras'=>$muontras);
        $this->render('dsmt', $data);
    }
    public function xuly_themmuontra(){
            // //lay du lieu nguoi dung chuyen qua
            if(isset($_POST['Mamuontra'])){
                $Mamuontra=$_POST['Mamuontra'];
            }
            if(isset($_POST['MaDocGia'])){
                $MaDocGia=$_POST['MaDocGia'];
            }
            if(isset($_POST['masach'])){
                $masach=$_POST['masach'];
            }
            if(isset($_POST['ngayhethan'])){
                $ngayhethan=$_POST['ngayhethan'];
            }
            if(isset($_POST['ngaymuon'])){
                $ngaymuon=$_POST['ngaymuon'];
            }
            if(isset($_POST['ngaytra'])){
                $ngaytra=$_POST['ngaytra'];
            }
            // //goi ham them moi (models)
             $ketqua=muontra::Themmuontra($Mamuontra,$MaDocGia,$masach,$ngayhethan,$ngaymuon,$ngaytra);
            //  print_r($ketqua);
             if($ketqua==1){
               header('Location: index.php?controller=muontra&action=dsmt');
            //   //echo "da luu";
             }
             else{
                 header('Location:index.php?controller=home&action=error');
             }
            // header('Location: index.php?controller=sach&action=dss');
        //      print_r($masach);
        //    print_r($tensach);
        //    print_r($giabia);
        //    print_r($maNXB);
        //    print_r($matg);
        //    print_r($maloai);
        }
}