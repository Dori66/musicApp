<?php 

class User {
    private $email;
    private $password;
    private $isLoggedIn = false;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function login() {
        $db = new Database();
        if ($db->checkCredentials($this->email, $this->password)) {
            $this->isLoggedIn = true;
            return true;
        }
        return false;
    }

    public function logout() {
        $this->isLoggedIn = false;
    }

    public function isLoggedIn() {
        return $this->isLoggedIn;
    }
}

class Database {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=reg', "email", 'password');
    }

    public function checkCredentials($email, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM tb_user WHERE email = '$email' AND password = $password");
        $stmt->bindParam(':', $email);
        $stmt->bindParam(':', $password);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
}

// include "../register/function.php";

// class Login extends Connection{
//     public $id;

//     public function login($email, $password){
        
//         $result = mysqli_query($this->conn, "SELECT * FROM tb_user WHERE email = '$email'");
//         $row = mysqli_fetch_assoc($result);

//         if(mysqli_num_rows($result) > 0){

//             if($password == $row["password"]){
//                 $this->id = $row["id"];
//                 return 1;
//             }else{
//                 return 10;
//             }

//         }else{
//             return 100;
//         }

//     }

//     public function idUser(){
//         return $this->id;
//     }
// }

?>