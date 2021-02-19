<?php

  class Signup{

    private $error = "";

    public function evaluate($data){

      // DATA VALIDATION FROM THE
      foreach ($data as $key => $value) {
        
        if (empty($value)) {

          $this->error = $this->error . $key . " is Empty ! <br> ";
          
        }

        if ($key == "email") {

          if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
            $this->error = $this->error . " INVALID EMAIL ADDRESS ! <br> ";
          }
        }
      }

      if ($this->error == "") {
        
        $this->create_user($data);

        echo "all is well fam";

      }else{
        return $this->error;
      }
    }

    public function create_user($data){

      $fname = ucfirst($data['first_name']);
      $lname = ucfirst($data['last_name']);
      $email = $data['email'];
      $phoneNo = $data['phone_number'];
      $gender = $data['gender'];
      $passwrd = md5($data['password-confirm']);
      
      
    // QUERIES TO STORE THE  DATA INTO -
    // REGISTER TABLE
      $query = "INSERT INTO register 
                  (firstname, lastname, phone, gender )
                VALUES
                  ('$fname',
                  '$lname', 
                  '$phoneNo', 
                  '$gender')";

    // LOGIN TABLE
      $query_two = "INSERT INTO login (email, password)
                    VALUES ( '$email', '$passwrd')";

    // VIEWING THE EXECUTED QUERIES
      echo $query;
      echo $query_two;

      $DB = new DatabaseModule();
      $DB->saveData($query);
      $DB->saveData($query_two);

    }

    private function create_staffid(){
      
      $length = rand(2, 3);

      $number = "STAFF";

      for ($i=0; $i < $length; $i++) { 

        $new_num = rand(1,100);
        $num = $number . $new_num;
      }

      return $num;
 
    }

    private function get_idfaculty(){
      
    }

    private function get_positionid(){
      
    }
  }
?>