   <?php
// 执行留言信息添加操作

// 1.获取要添加的留言信息，并且补上其他辅助消息（IP地址，添加时间）

$type = $_POST["type"]; // 分类 0
$name = $_POST["name"]; // 获取留言者1
$phone = $_POST["phone"]; // 电话2
$address = $_POST["address"]; // 地址3
$huxing = $_POST["huxing"]; // 户型4
$fengge = $_POST["fengge"]; // 风格5
$yusuan = $_POST["yusuan"]; // 预算6
$tosay = $_POST["tosay"]; // 留言内容7

function getip() /*获取客户端IP*/
{
if (@$_SERVER["HTTP_X_FORWARDED_FOR"]){ //跳过代理获取客户端IP
$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else if (@$_SERVER["HTTP_CLIENT_IP"]){//直接获取获取客户端IP
$ip = $_SERVER["HTTP_CLIENT_IP"];
}
else if (@$_SERVER["REMOTE_ADDR"]){
$ip = $_SERVER["REMOTE_ADDR"];
}
else if (@getenv("HTTP_X_FORWARDED_FOR")){
$ip = getenv("HTTP_X_FORWARDED_FOR");
}
else if (@getenv("HTTP_CLIENT_IP")){
$ip = getenv("HTTP_CLIENT_IP");
}
else if (@getenv("REMOTE_ADDR")){
$ip = getenv("REMOTE_ADDR");
}
else {
$ip = "Unknown";
}
return $ip;
}

$ip = getIP(); // IP地址
$addtime = time(); // 添加时间 （时间戳的格式）

// 2.拼装（组装）留言信息
$ly = "{$type}##{$name}##{$phone}##{$address}##{$huxing}##{$fengge}##{$yusuan}##{$tosay}##{$ip}##{$addtime}@@@";

// 3.将留言信息追加到liuyan.txt文件中
$info = file_get_contents("dengji.dat"); // 获取所有以前的留言
file_put_contents("dengji.dat", $info . $ly); // 覆盖式的写入，会对原有数据进行覆盖
  Header("Location:dengjiok.php");
?>