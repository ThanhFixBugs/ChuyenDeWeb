<?php
require_once('controllers/base_controller.php');
require_once('models/sach.php');
class SachController extends BaseController{
    function __construct(){
        $this->folder='sach';
    }
    public function themsach(){
        $this->render('themsach');
    }
    public function error(){
        $this->render('error');
    }
 public function dss(){
    $sachs = sach::allsach();
    $data = array('sachs'=>$sachs);
    $this->render('dss', $data);
}
public function xuly_themsach(){
        // //lay du lieu nguoi dung chuyen qua
        if(isset($_POST['masach'])){
            $masach=$_POST['masach'];
        }
        if(isset($_POST['tensach'])){
            $tensach=$_POST['tensach'];
        }
        if(isset($_POST['giabia'])){
            $giabia=$_POST['giabia'];
        }
        if(isset($_POST['manxb'])){
            $maNXB=$_POST['manxb'];
        }
        if(isset($_POST['matg'])){
            $matg=$_POST['matg'];
        }
        if(isset($_POST['maloai'])){
            $maloai=$_POST['maloai'];
        }
        // //goi ham them moi (models)
         $ketqua=sach::Themsach($masach,$tensach,$giabia,$maNXB,$matg,$maloai);
        //  print_r($ketqua);
         if($ketqua==1){
           header('Location: index.php?controller=sach&action=dss');
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
    public function suasach(){
        $this->render('suasach');
    }
    public function Suathongtinsach()
        { if(isset($_GET['masach']))
        {
        $masach=$_GET['masach'];
        } 
        $sachs = sach::findS($masach); 
        // $sanphamcu=new SanPham($masp,$tensp ,$quycach ,$donvitinh ,$hinhanh ,$mota );//có thể không cần make các giá trị thành một đối tượng SanPham như thế này mà chuyển luôn từng giá trị đi cũng được
        $data = array("sachs"=>$sachs);
        $this->render('suasach',$data); 
        }
        public function xulytimkiem(){
          if(isset($_POST['tk'])){
            $masach=$_POST['tk'];
            $s=sach::findS($masach);
            $data = array('sachs'=>$s);
            $this->render('dss', $data);
           } 
            

        }
    public function xuly_suasach(){
        // //lay du lieu nguoi dung chuyen qua
        if(isset($_POST['masach'])){
            $masach=$_POST['masach'];
        }
        if(isset($_POST['tensach'])){
            $tensach=$_POST['tensach'];
        }
        if(isset($_POST['giabia'])){
            $giabia=$_POST['giabia'];
        }
        if(isset($_POST['manxb'])){
            $maNXB=$_POST['manxb'];
        }
        if(isset($_POST['matg'])){
            $matg=$_POST['matg'];
        }
        if(isset($_POST['maloai'])){
            $maloai=$_POST['maloai'];
        }
        // //goi ham them moi (models)
         $ketqua=sach::Suasach($masach,$tensach,$giabia,$maNXB,$matg,$maloai);
        //  print_r($ketqua);
         if($ketqua==1){
           header('Location: index.php?controller=sach&action=dss');
        //   //echo "da luu";
         }
         else{
             header('Location:index.php?controller=home&action=error');
         }
}


}
