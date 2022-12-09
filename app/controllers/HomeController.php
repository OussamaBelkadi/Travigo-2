<?php

class HomeController{
    public function index(){
        // echo $id;
        // require_once(VIEWS.'home.php');

        $data['title'] = "Home Page";
        $data['content'] = "Content Of home page";
        View::load('home',$data);
    }
}
?>