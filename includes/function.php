<?php 
 
 class Main{

    public static function show_all($table){
       return self::query("SELECT * FROM $table");
    }

    public static function show_by_id($user_id) {
        $array = self::query("SELECT * FROM users WHERE users_id = $user_id");
        return array_shift($array);
    }
    public static function query($sql){
        global $database;
        $result = $database->query($sql);
        $array = [];
        while($row = mysqli_fetch_assoc($result)){
         $array[] = self::auto($row); 
        }
        return $array;
    }
    public static function auto($row){
        $class = get_called_class();
     $user = new $class;
     foreach($row as $name => $value){
         $user->$name = $value;
     }
     return $user;
    }
    public function create($table, $fields, $values){
        global $database;
        $sql = "INSERT INTO $table ($fields) VALUES($values)";
        if($database->query($sql)){
            $this->id = mysqli_insert_id($database->conn);
            return true;
        }else{
            return false;
        }
       }
       public function update($table, $values){
           global $database;
           $sql = "UPDATE $table SET $values WHERE id = $this->id";
           $database->query($sql);
           return mysqli_affected_rows($database->conn) == 0 ? true : false;
       }
       public function delete($table){
           global $database;
           $sql = "DELETE FROM $table WHERE id = $this->id";
           if($database->query($sql)){
               return true;
           }else{
               return false;
           }
       }
 }
 
   
   


?>