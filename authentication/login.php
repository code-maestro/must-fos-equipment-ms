<?php
  
  class Login{

    private $error = "";

    public function auth($data){

      $Email = addslashes($data['email']);
      $Password = addslashes($data['password']);
      
      
    // QUERIES TO RETRIEVE THE  DATA FROM
    // LOGIN TABLE
      $query = "SELECT * FROM login 
                WHERE email = '$Email' limit 1 ";

      $DB = new DatabaseModule();
      $result = $DB->readData($query);

      if ($result) {
        
        $row = $result[0];

        if ($Password == $row['password']) {
          
          //SESSION DATA CREATION
          $_SESSION['fos-ms_id'] = $row['id'];
          $_SESSION['mail'] = $row['email'];

        }else {

         $this->error .= "WRONG PASSWORD MAN TRY AGAIN";
        }

      }else {
        $this->error .= "WRONG EMAIL MAN TRY AGAIN";
      }

      return $this->error;

    }

  }

?>