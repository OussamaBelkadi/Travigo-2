<?php

    require_once(MODELS.'/travels.php');
    
    class ProductController
    {
        
        public function getAll()
        {
            $travel = new Travale();
            $data['products'] = $travel->getAll();
            View::load('Admin',$data);
        }
        public function getform($id){
            $data['id'] = $id;
            View::load('modifier',$data);
        }
        // public function getEll($id)
        // {
        //     $travel = new Travale();
        //     $data['prod'] = $travel->mod($id);
        //     View::load('modifier',$data);
        // }
        // // public function modi($id){
        //     $travel = new Travale();
        //     $data['product'] = $travel->aff($id);
        //     View::load('modifier',$data);
        // }
        
        public function mod($id){
            if(isset($_POST["submit"])){
                $data = array(
                    'name'=>$_POST["yy"],
                    'price'=>$_POST["zz"],
                    'description'=>$_POST["tt"]);
                $travel=new Travale();
                $travel->modifie($id,$data);
                header('location: '.BURL.'Product/getall');
            }
        }
        // public function formadd(){
        //     View::load('add');
        // }
        public function add(){
            if(isset($_POST["submit"])){
                $data = array(
                    'name'=>$_POST["tr"],
                    'price'=>$_POST["pr"],
                    'description'=>$_POST["qt"]);

                    $travel = new Travale();
                    $travel->addproduct($data);
                    header('location: '.BURL.'Product/getAll');
            }
            
        }
        
        public  function delpdt($id){
            $travel = new Travale();
            $travel->del($id);
            header('location: '.BURL.'Product/getAll');
        }
    }
?>