<?php
$title = 'check-code';
include_once 'layouts/header.php';
include_once 'layouts/navbar.php';
include_once 'layouts/breadCrump.php';


if (empty($_SESSION['email'])) {
    header('location:signin.php');
    die;
}
?>
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> <?= $title ?> </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                <form method="post">
                                        <input type="number" name="code" placeholder="Verification Code">
                                        <?php
                                        if (!empty($errors)) {
                                            foreach ($errors as $error) {
                                                echo "<p class='text-danger font-weight-bold'>* {$error}</p>";
                                            }
                                        }
                                        echo $success ?? null;
                                        ?>
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
