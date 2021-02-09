<?php 
//undeclared object backup function and autoload
//PHP Autoloader rekurzivno traži definicije klasa, osobina i interfejsa u definiranim direktorijima. Bez ikakve daljnje konfiguracije, direktorij u kojem se nalazi potrebna datoteka bit će korišten kao zadana staza klase. Imena datoteka ne moraju se pridržavati nijedne konvencije.


function classAutoLoader($class){
    

    //Funkcija strtolower () pretvara niz u mala slova.
    $class = strtolower($class);
    
    $the_path = "includes/{$class}.php";


    //Funkcija file_exists () provjerava postoji li datoteka ili direktorij.
    if(file_exists($the_path)){
    
    require_once($the_path);

    }else{
        die("This file names {$class}.php was not man...");
    }
}

//function for access to admin 
function redirect($location){

    header("Location: {$location}");

}

?>