<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormController extends BaseController
{
    public function index()
    {
        return view("forma");
    }

    public function home()
    {
        return view("home");
    }

    public function p1()
    {
        return view("pagina1");
    }

    public function p2()
    {
        return view("pagina2");
    }

    public function p3()
    {
        return view("pagina3");
    }

    public function p4()
    {
        return view("pagina4");
    }
    public function about()
    {
        return view("about");
    }

   



    public function signin()
    {

        helper(['form']);

        $_SESSION['username']='';

        $err = [
            'username' => '',
            'email' => '',
            'password' => '',
            'capchea'  => '',
        ];
        $errors = 0;

        if(isset($_POST['submit'])) {
            // validare Username
            if (!preg_match("/^[a-zA-Z0-9_]{6,15}$/", $_POST['username'])) {
                $err['username'] = "Username trebuie sa aiba intre 6-15, fara speciale";
                $errors = 1;
            }else{
                $_SESSION['username']=$_POST['username'];
            }
        
            // validare E-mail
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $err['email'] = "Email-ul nu este valid.";
                $errors = 1;
            }
        
            // Validare parolă
            if (!preg_match("/^[a-zA-Z0-9_]{6,15}$/", $_POST['password'])) {
                $err['password'] = "Parola 6 caractere, fara lucruri speciale";
                $errors = 1;
            }
        
            //verificare capchea
            if ($_POST['captcha']!=$_POST['correctsum']){
                $err['capchea'] = "Suma nu e corecta :( .";
                $errors = 1;
            }
        
            if($errors == 0){
                $_SESSION['username'] = $err['username'];
                $data = [
                    'username' => $_POST['username'],
                ];

               return redirect()->to(base_url('login'));
            } else {
                return view('signin', $err);
            }
        }

        return view("signin", $err);
    
    }

    public function login()
    {
            
	    $_SESSION["username"]= "";
	    $_SESSION["password"]= "";
        
	    $_SESSION["AdminUsername"]= "admin";
	    $_SESSION["AdminPassword"]= "admin";
  
        
	    if((isset($_POST["username"])) && (isset($_POST["password"]))){
	    	$username=$_POST["username"];
	    	$password=$_POST["password"];
        
	    	$_SESSION["username"]=$username;
	    	$_SESSION["password"]=$password;

            if((isset($_POST['username'])) && (isset($_POST['password']))){
                if(($_POST['username']==$username) && ($_POST['password']==$password)){
                    if(isset($_POST['remember'])){
                        /* Set cookie to last 1 month */
                        setcookie('username', $_POST['username'], time()+60*60*24);
                        setcookie('password', md5($_POST['password']), time()+60*60*24*30);
                    }else {
                        /* Cookie expires after 1 hour */
                        setcookie('username', $_POST['username'], time() + 60*60);
                        setcookie('password', md5($_POST['password']), time ()+ 60*60);
                    }
                } 
            }
        
	    	if($username == $_SESSION["AdminUsername"] && $password == $_SESSION["AdminPassword"]){
	    		return redirect()->to(base_url('admin'));
	    	} else {
	    		return redirect()->to('/');
	    	}
	    }

        return view("login");
    }



    public function logout()
    {
        unset($_SESSION["username"]);
        unset($_SESSION["password"]);
        setcookie("username","", time() -3600,);
        setcookie("password","", time() -3600,);

        return redirect()->to('/');
    }

}
