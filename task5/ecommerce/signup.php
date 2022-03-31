<?php


use app\helpers\Hash;
use app\models\User;
use app\mails\VerificationMail;
use app\requests\RegisterRequest;


$title = 'Sign Up';
include_once 'layouts/header.php';
include_once 'layouts/navbar.php';
include_once 'layouts/breadCrump.php';
$registerRequest = new RegisterRequest;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $registerRequest->setEmail($_POST['email']);
    $registerRequest->emailValidation();
    $registerRequest->setPhone($_POST['phone']);
    $registerRequest->phoneValidation();
    $registerRequest->setPassword($_POST['password']);
    $registerRequest->passwordValidation();
    $registerRequest->setPassword_confirmation($_POST['password_confirmation']);
    $registerRequest->passwordConfirmationValidation();

    if (empty($registerRequest->errors())) {
        
        $verification_code =  rand(10000, 99999);
        $hashedPassword = Hash::make($_POST['password']);
        
        $user = new User;
        $result = $user->setName_ar($_POST['name_ar'])
            ->setName_en($_POST['name_en'])
            ->setEmail($_POST['email'])
            ->setPhone($_POST['phone'])
            ->setPassword($hashedPassword)
            ->setVerification_code($verification_code)
            ->create();
        if ($result) {
            // echo "ok";
            $subject = 'Verification Code';
            $body = "<div>
                        <p> Hello {$_POST['name_ar']} {$_POST['name_en']} </p>
                        <p> Your Verification Code:<strong>{$verification_code}</strong></p>
                        <p> Please Verify Your Email Address Before Code Expiration</p>
                        <p> Thank you.</p>
                    </div>";
            $verificationMail = new VerificationMail($_POST['email'],$subject,$body);
            $verificationMailResult = $verificationMail->send();
            if($verificationMailResult){
                $_SESSION['email'] = $_POST['email'];
                header('location:check-code.php?page=signup');die;
            }else{
                $errors['mail'] = 'Try Again Later';
            }
            
        } else {
            
            $errors['insert'] = 'Something went wrong';
        }
    }
}
?>
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">

                        <a class="active" data-toggle="tab" href="#lg2">
                            <h4> <?= $title ?> </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <?php
                                    if (!empty($errors)) {
                                        foreach ($errors as $error) {
                                            echo "<div class='alert alert-danger text-center'> <strong>{$error}</strong> </div>";
                                        }
                                    }
                                    ?>
                                    <form method="post">
                                        <input type="text" name="name_ar" placeholder="name-ar" value="<?= old('name_ar') ?>">
                                        <input type="text" name="name_en" placeholder="name-en" value="<?= old('name_en') ?>">
                                        <input type="tel" name="phone" placeholder="Phone" value="<?= old('phone') ?>">
                                        <?= $registerRequest->getErrorMessage('phone') ?>
                                        <input type="email" name="email" placeholder="Email Address" value="<?= old('email') ?>">
                                        <?= $registerRequest->getErrorMessage('email') ?>

                                        <input type="password" name="password" placeholder="Password">
                                        <?= $registerRequest->getErrorMessage('password') ?>

                                        <input type="password" name="password_confirmation" placeholder="Password Confirmation">
                                        <?= $registerRequest->getErrorMessage('password_confirmation') ?>

                                        <select name="gender" class="form-control">
                                            <option <?= old('gender') == 'm' ? 'selected' : '' ?> value="m">Male</option>
                                            <option <?= old('gender') == 'f' ? 'selected' : '' ?> value="f">Female</option>
                                        </select>
                                        <div class="button-box mt-3">
                                            <button type="submit"><span><?= $title ?></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

include_once 'layouts/footer.php';
include_once 'layouts/footer-scripts.php';
?>