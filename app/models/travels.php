<?php
    class Travale
    {
        static public function getAll(){
            $stmt = DB::connect()->prepare('SELECT * FROM products');
            $stmt->execute();
            return $stmt->fetchAll();
        }
        // static public function getele($id){
        //     $stmt = DB::connect()->prepare('SELECT * FROM products where id = $id');
        //     $stmt->execute();
        //     return $stmt->fetchAll();
        // }
        
        static public function modifie($id,$data){
            
            $stmt=DB::connect()->prepare("UPDATE products
            SET  name= ':name',
              price = ':price',
              description = ':description'
            WHERE id = $id");
            $stmt->bindParam(":name",$data["name"]);
            $stmt->bindParam(":price",$data["price"]);
            $stmt->bindParam(":description",$data["description"]);
            $stmt->execute();
            View::load("modifier");
        }
        // static public function aff($id){
        //     $stmt=DB::connect()->prepare("SELECT * FROM products where id=$id");
        //     $stmt->execute();
        //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // }
        static public function del($id){
            $sql = "delete from products where id = $id";
            $srt= DB::connect()->prepare($sql); 
            $srt->execute();
        }
        static public function addproduct($data){
            $stmt = DB::connect()->prepare("insert into products (name,price,description) VALUES (:name,:price,:description)");
            $stmt->bindParam(":name",$data["name"]);
            $stmt->bindParam(":price",$data["price"]);
            $stmt->bindParam(":description",$data["description"]);
            $stmt->execute();
        }
    }
?>