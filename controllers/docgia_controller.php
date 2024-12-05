<?php
require_once('controllers/base_controller.php');
require_once('models/docgia.php');
class DocgiaController extends BaseController{
    function __construct(){
        $this->folder='docgia';
    }
    public function themdocgia(){
        $this->render('themdocgia');
    }
    public function error(){
        $this->render('error');
    }
    public function dsdg(){
        $docgias = docgia::alldocgia();
        $data = array('docgias'=>$docgias);
        $this->render('dsdg', $data);
    }
    public function xuly_themdocgia(){
        // //lay du lieu nguoi dung chuyen qua
        if(isset($_POST['MaDocGia'])){
            $MaDocGia=$_POST['MaDocGia'];
        }
        if(isset($_POST['Ten'])){
            $Ten=$_POST['Ten'];
        }
        if(isset($_POST['SDT'])){
            $SDT=$_POST['SDT'];
        }
        if(isset($_POST['GioiTinh'])){
            $GioiTinh=$_POST['GioiTinh'];
        }
        // //goi ham them moi (models)
         $ketqua=docgia::Themdocgia($MaDocGia,$Ten,$SDT,$GioiTinh);
        //  print_r($ketqua);
         if($ketqua==1){
           header('Location: index.php?controller=docgia&action=dsdg');
        //   //echo "da luu";
         }
         else{
             header('Location:index.php?controller=home&action=error');
         }
}
}