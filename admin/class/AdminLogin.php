<?php
class AdminLogin extends Connection {
    public function __construct()
    {
        parent::__construct();
//        if (!$this->error){
//            echo "connected";
//        }
    }
    public function adminLogin($username, $password){
        $query = "SELECT * FROM tbl_admin WHERE username = '$username'";
        $result = $this->query($query);
        $row = $result->fetch_assoc();

        $dbpass = $row['password'];
        $encpass = md5($password);

        if ($result){
            if ($dbpass == $encpass){
                header("Location: index.php");
            }

        } else {
            die("Could not login. <br> Query Failed!" . $this->error);
        }




    }
}