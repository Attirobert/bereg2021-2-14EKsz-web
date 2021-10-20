<?php
    class customException extends Exception{
        public function errorMessage(){
            $errorMsg = "Hiba a "
                .$this->getLine()
                ." sorban"
                .$this->getFile()
                .": <b>"
                .$this->getMessage()
                ." </b> ez rossz e-mail cím!";
            return $errorMsg;
        }
    }

    $email = "valaki@vitt-ott......hu";

    try {
        print "Az email: ".$email."<br>";
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
            throw new customException($email);
        }

        print "Jó email cím!";
    } catch (customException $e) {
        print $e->errorMessage();
    }
?>