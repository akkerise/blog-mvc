<?php

class Home extends Controller
{

    public function index()
    {
        $travel = $this->model->getHome(1, 1);
        $music = $this->model->getHome(2, 2);
        $fashion = $this->model->getHome(3, 3);
        //load view
        require APP . "view/__templates/header.php";
        require APP . "view/index.php";
        require APP . "view/__templates/footer.php";
    }

    public function login ()
    {
        if (isset($_POST['action']) == "login")
        {
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $login = $this->model->login($name,$pass);
            if ($login > 0){
                $_SESSION['login'] = 1;
                $_SESSION['name'] = $login['username'];
                $_SESSION['id_user'] = $login['user_id'];
                echo "thanhcong" ;
            }
            else {
                echo "éo log được rồi nhé";
            }
        }
    }
    public function register ()
    {
        if (isset($_POST['action']) == "register") {
            $name = $_POST['name'];
            $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $check = $this->model->check_user($name);

            if ($check == 0) {

                $this->model->register($name, $email, $pass);
                $_SESSION['login'] = 1;
                $_SESSION['name'] = $name;
//                $_SESSION['id_user'] = $login['user_id'];
                echo "thanhcong";


                require APP . "libs/PHPMailer/PHPMailerAutoload.php";

                $mail = new PHPMailer;

                $mail->SMTPDebug = 0;                               // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->CharSet="UTF-8";
                $mail->Host = 'mailtrap.io';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = '3d096ec81f4797';                 // SMTP username
                $mail->Password = '28b53de9a8c493';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 25;                                    // TCP port to connect to

                $mail->setFrom('t0mt0m15061993@gmail.com', 'Mailer');
                $mail->addAddress($email, 'MHT');     // Add a recipient

                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'Here is the subject';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
//                    echo 'Message has been sent';
                }
            } else {
                echo "tachroi";
            }
        }
    }

    public function logout ()
    {
        if (isset($_POST['action']) == "logout")
        {
            unset($_SESSION['login']);
            unset($_SESSION['name']);
            unset($_SESSION['id_user']);
            header('location:' . URL);
        }
    }

}