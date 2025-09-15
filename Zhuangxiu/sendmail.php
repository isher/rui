<meta charset="utf-8"> 
<?php 
/** 
* 1. 检查邮箱设置是否启用了smtp服务； 
* 2. 是否是php环境的问题导致； 
* 3. 将26行的$smtp->debug = false改为true，可以显示错误信息，然后可以复制报错信息到网上搜一下错误的原因 
*/
    require_once "email.class.php"; 

    //******************** 配置信息 ******************************** 
    $smtpserver = "smtp.163.com";                         //SMTP服务器
    $smtpserverport =25;                                 //SMTP服务器端口
    $smtpusermail = "xxx@163.com";                //开通smtp服务的邮箱号码
    $smtpemailto = $_POST['toemail'];                    //发送给谁 
    $smtpuser = "xxx@163.com";                    //开通smtp服务的邮箱号码
    $smtppass = "xxx";                        //SMTP服务器的秘钥 
    $mailtitle = $_POST['title'];                        //邮件主题 
    $mailcontent = "<h1>".$_POST['content']."</h1>";    //邮件内容 
    $mailtype = "HTML";                                    //邮件格式（HTML/TXT）,TXT为文本邮件 
    //************************ 配置信息 ****************************
     
    
    $smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
    //这里面的一个true是表示使用身份验证,否则不使用身份验证. 
    $smtp->debug = false;//是否显示发送的调试信息 
    $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype); 
    echo "<div style='width:300px; margin:36px auto;'>"; 
    if($state==""){ 
    echo "对不起，邮件发送失败！请检查邮箱填写是否有误。"; 
    echo "<a href='demo.html'>点此返回</a>"; 
    exit(); 
    }
    echo "恭喜！邮件发送成功！！"; 
    echo "<a href='demo.html'>点此返回</a>"; 
    echo "</div>"; 
?>