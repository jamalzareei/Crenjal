<?php session_start();
if (isset($_COOKIE["email"])) {
    header("location: products");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include_once './head.php'; ?>
        <title>کرنجال </title>
        <meta NAME="DESCRIPTION" CONTENT="کرنجال فروشگاه اینترنتی صنایع دستی"/>
        <meta NAME="KEYWORDS" CONTENT="فروشگاه صنایع دستی ینترنتی کرنجال،کرنجال"/>
    </head>
    <body>
        <div class="container-fluid">
            <?php
            // put your code here
            include './header.php';
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row product page-active">
                        <div class="col-md-12">
                            <?php
                            if (isset($_GET["email"]) && isset($_GET["your-code-register"])) {
                                $email = $_GET["email"];
                                $code_email=$_GET["your-code-register"];
                                $table = "cr_register";
                                $where = "email='$email' and code_email='$code_email'";
                                $set = "active_user='1'";
                                $updat = $dbclass->update($table, $set, $where);
                                ?>

                                <div class="col-md-12 text-right">
                                    <div class="alert alert-dismissable alert-success" contenteditable="true">
                                        <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4 dir="rtl">اطلاعات شما با موفقیت ثبت شد!</h4>
                                        <strong>ایمیل شما تایید گردید، هم اکنون شما میتوانید وارد حساب کاربری خود شوید</strong> <a href="#" class="alert-link"></a>
                                    </div>
                                </div>
                                <?php
                                //setcookie("code_register", " ", time()-3600*24,"/"); 
                            }
                            ?>
                            <?php
                            if (isset($_GET["login"]) && $_GET["login"] == "error") {
                                ?>

                                <div id="login-overlay" class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="alert alert-dismissable alert-danger text-right">
                                            <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4>خطا در ورود</h4>
                                            <div>ایمیل یا پسورد شما اشتباه میباشد لطفا دوباره تلاش فرمایید</div>
                                        </div>
                                        <div class="modal-header">
                                            <h4 class="modal-title pull-right" id="myModalLabel">ورود به کرنجال</h4>
                                            
                                        </div><hr>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12 pull-right">
                                                    <div class="col-md-12">
                                                        <form id="loginForm" method="POST" action="_php/login.php" novalidate="novalidate">
                                                            <div class="form-group" style="padding-bottom: 51px;">
                                                                <label for="username" class="col-sm-3 control-label pull-right">ایمیل</label>
                                                                <div class="col-sm-9">
                                                                    <input class="form-control col-xs-8" id="username" name="email_login" value="" required="" title="لطفا ایمیل خود را وارد نمایید" placeholder="info@crenjal.com" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="password" class="col-sm-3 control-label pull-right">رمز عبور</label>
                                                                <div class="col-sm-9">
                                                                    <input class="form-control col-xs-8" id="password" name="password_login" value="" required="" title="لطفا پسور خود را وارد نمایید" placeholder="*******" type="password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-9">
                                                                    <div class="checkbox">
                                                                        <label for="checkbox-forget-password" class="check-fulling checkbox-forget-password">
                                                                            <input id="checkbox-forget-password" name="forget_password" class="regular-checkbox" onchange="" type="checkbox">
                                                                            <label id="all-product-true" class="pull-right" for="checkbox-forget-password" style="margin-top: 6px;min-height: 10px"></label>
                                                                            <div class="pull-right">ذخیره رمز عبور</div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <button type="submit" class="btn btn-success btn-block">ورود</button>
                                                                </div>
                                                                <div class="col-lg-8" style="margin-top: 8px;">
                                                                    <a href="result?password=forget" class="alert alert-info" style="background: none;border:none;padding-top: 5px;">
                                                                        <strong>
                                                                            رمز عبور خود را فراموش کرده ام!
                                                                        </strong>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 pull-right">
                                                    <a href="register" class="alert alert-info" style="background: none;border:none">ثبت نام نکرده ام! <strong>ثبت نام در کرنجال</strong></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>
                            <?php
                            if(isset($_GET["password"]) && $_GET["password"]=="forget"){
                                if(isset($_POST["email_forget"])){
                                $email_backup=$_POST["email_forget"];
                                $code_email_backup=  md5(rand(20, 20000000));
                                
                                $table_backup = "cr_register";
                                $where_backup = "email='$email_backup'";
                                $set_backup = "code_email='$code_email_backup'";
                                $fields_tek="*";
                                $order_tek = "email";
                                $limit_tek = "1";
                                $select_email=$dbclass->select_one($table_backup, $fields_tek, $where_backup, $order_tek, $limit_tek);
                                if(isset($select_email["email"])){
                                    
                                    $updat_backup = $dbclass->update($table_backup, $set_backup, $where_backup);
                                    $name=$select_email["fname_user"]. " ". $select_email["lname_user"];
                                    $from="info@crenjal.com";
                                    $to=$email_backup;
                                    $subject="کرنجال - فراموشی رمز عبور";
                                    $message="<a href='http://localhost/crenjal/result?email=$email_backup&code-change-password=$code_email_backup'>click me</a>";

                                    require("phpmailer/class.phpmailer.php");
                                    include("phpmailer/class.smtp.php");
                                    $mail= new PHPMailer();
                                    $mail->IsSMTP();
                                    $mail->Host= "mail.crenjal.com";
                                    $mail->SMTPAuth=true;
                                    $mail->Username= "info@crenjal.com";
                                    $mail->Password= "1430548JaMaL";
                                    $mail->SetFrom($from, $name);
                                    $mail->AddReplyTo($from, $name);
                                    $mail->AddAddress($to, $name);
                                    $mail->Subject    = $subject;
                                    $mail->IsHTML(true);
                                    $body = '<html><body>';
                                    $body .= '<p style="direction:rtl;font-family:tahoma;">'.$message.'</p>';
                                    $body .= "</body></html>";
                                    $mail->MsgHTML($body);
                                    $mail->AltBody= $message;
                                    
                                        echo '<div style="display:none">';
                                    if(!$mail->Send()) {
                                            //echo "خطا:پیام شما ارسال نشد » " . $mail->ErrorInfo;
                                        header("location: ../register");
                                    } else {
                                        //echo "پیام ارسال شد!";
                                        header("location: result?password=forget&send=ok");
                                    }
                                        echo '</div>';
                                }
                                }
                                
                                
                            ?>
                            
                                <div id="login-overlay" class="modal-dialog">
                                    <div class="modal-content">

                                        <?php
                                        if(isset($_GET["send"]) && $_GET["send"]=="ok" && isset($_POST["email_forget"])){
                                            $emaili=$_POST["email_forget"];
                                        ?>
                                        <div class="alert alert-dismissable alert-success text-right">
                                            <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4>ایمیل بازیابی رمز عبور با موفقیت ارسال گردید</h4>
                                            <div></div>
                                        </div>
                                        <?php }?>
                                        <div class="modal-header text-center">
                                            <h4>بازیابی کلمه عبور</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12 pull-right">
                                                    <div class="col-md-12">
                                                        <form id="loginForm" method="POST" action="result?password=forget&send=ok" novalidate="novalidate">
                                                            <div class="form-group" style="padding-bottom: 51px;">
                                                                <label for="email" class="col-sm-3 control-label pull-right">ایمیل</label>
                                                                <div class="col-sm-9">
                                                                    <input class="form-control col-xs-8" id="email" name="email_forget" value="" required="" title="لطفا ایمیل خود را وارد نمایید" placeholder="info@crenjal.com" type="text">
                                                                </div>
                                                            </div>
                                                            <!--<div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <label for="password" class="control-label pull-right">حاصل عبارت را در کادر مربوطه وارد کنید</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-5">
                                                                    
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <input class="form-control col-xs-8" id="password" name="password_login" value="" required="" title="لطفا پسور خود را وارد نمایید" placeholder="*******" type="password">
                                                                </div>
                                                            </div>-->
                                                            <div class="form-group">
                                                                <div class="col-lg-4">
                                                                    <button type="submit" class="btn btn-add-product btn-shadow btn-block" value="">بازیابی</button>
                                                                </div>
                                                                <div class="col-lg-8" style="margin-top: 8px;">

                                                                </div>
                                                            </div>
                                                            <hr>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12 pull-right">
                                                    <a href="register" class="alert alert-info" style="background: none;border:none">ثبت نام نکرده ام! <strong>ثبت نام در کرنجال</strong></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if(isset($_GET["email"]) && isset($_GET["code-change-password"])){
                                $email_change=$_GET["email"];
                                $code_email_change=$_GET["code-change-password"];
                                $table_change = "cr_register";
                                $fields_change = "*";
                                $where_change = "email='$email_change' and code_email='$code_email_change'";
                                $order_change = "email";
                                $limit_change = "1";
                                $email_changing = $dbclass->select($table_change, $fields_change, $where_change, $order_change, $limit_change);
                                if(is_array($email_changing)){
                                ?>
                            <div id="login-overlay" class="modal-dialog">
                                    <div class="modal-content">
                                        <?php if(isset($_GET["result"]) && $_GET["result"]=="ok"){ ?>
                                        <div class="alert alert-dismissable alert-success text-right">
                                            <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4>رمز عبور با موفقیت تغییر یافت، هم اکنون میتوانید وارد حساب کاربری خود شوید</h4>
                                            <div><a id="modal-435492" href="#modal-container-435492" role="button" class="btn btn-info pull-left" data-toggle="modal">ورود</a></div>
                                            
                                        </div>
                                        <?php } ?>
                                        <?php if(isset($_GET["result"]) && $_GET["result"]=="error"){ ?>
                                        <div class="alert alert-dismissable alert-danger text-right">
                                            <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4>رمز عبور و تکرار آن با هم یکی نیستند</h4>
                                        </div>
                                        <?php } ?>
                                        <div class="modal-header">
                                            <h4 class="modal-title pull-right" id="myModalLabel">تغییر رمز عبور</h4>
                                            
                                        </div><hr>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12 pull-right">
                                                    <div class="col-md-12">
                                                        <form id="loginForm" method="POST" action="_php/change_pass.php?email=<?php echo $email_change; ?>&code-email=<?php echo $code_email_change; ?>" novalidate="novalidate">
                                                            <div class="form-group" style="padding-bottom: 51px;">
                                                                <label for="password-forget" class="col-sm-3 control-label pull-right">رمز عبور</label>
                                                                <div class="col-sm-9">
                                                                    <input class="form-control col-xs-8" id="password-forget" name="password-forget" value="" required="" title="لطفا پسورد خود را وارد نمایید" placeholder="*******" type="password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="re-password-forget" class="col-sm-3 control-label pull-right">تکرار رمز عبور</label>
                                                                <div class="col-sm-9">
                                                                    <input class="form-control col-xs-8" id="re-password-forget" name="re-password-forget" value="" required="" title="لطفا تکرار پسورد خود را وارد نمایید" placeholder="*******" type="password">
                                                                </div>
                                                            </div>
                                                            <br><hr>
                                                            <div class="form-group">
                                                                <div class="col-lg-4">
                                                                    <button type="submit" class="btn btn-success btn-block">تغییر رمز عبور</button>
                                                                </div>
                                                                <div class="col-lg-8" style="margin-top: 8px;">
                                                                    
                                                                </div>
                                                            </div>
                                                            <hr><br>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 pull-right">
                                                    <a href="register" class="alert alert-info" style="background: none;border:none">ثبت نام نکرده ام! <strong>ثبت نام در کرنجال</strong></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <?php
// put your code here
            include './footer.php';
            ?>

        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
