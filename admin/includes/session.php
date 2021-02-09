<?php 
//Sesija je način za pohranu informacija (u varijablama) koje će se koristiti na više stranica. Za razliku od kolačića, podaci se ne pohranjuju na računaru korisnika.


//Konstruktor vam omogućava inicijalizaciju svojstava objekta nakon stvaranja objekta. Ako kreirate funkciju __construct (), PHP će automatski pozvati ovu funkciju kada kreirate objekt iz klase. Primijetite da funkcija konstrukcije započinje s dvije donje crte (__)!

class Session {

    private $signed_in = false;
    public $user_id;
    public $count;
    public $message;


    function __construct(){

        session_start();
        $this->visitor_count();
        $this->check_the_login(); 
        $this->check_message();
        
    }   

    //Tacking page views method
    public function visitor_count(){
        if(isset($_SESSION['count'])){

            return $this->count = $_SESSION['count']++;

        }else{
            return $_SESSION['count'] = 1;
        }
    }

    //method for the message

    public function message ($msg=""){
        if(!empty($msg)){
            $_SESSION['message'] = $msg;
        }else{
            return $this->message;
        }
    }
    
    public function check_message(){
        if(isset($_SESSION['message'])){
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);

    }else{
        $this->message = "";
    }
}


    public function is_signed_in(){

        return $this->signed_in;
    }
    

    //login method
    public function login($user){

    if($user) {
        $this->user_id = $_SESSION['user_id'] = $user->id;
        $this->signed_in = true;
    }
    
    }

    //logout method

    public function logout(){

        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in = false;

    }
    
    //Checking method login

    private function check_the_login(){

        if(isset($_SESSION['user_id'])){

            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
        }else{
            unset($this->user_id);
            $this->signed_in = false;
        }
    }
}

$session = new Session();
$message = $session->message();


?>