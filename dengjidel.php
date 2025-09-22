<?php

// 执行删除指定ID的留言信息
// 1,获取要删除留言的 id号
$id = $_GET["id"]; // url地址提交都是get方式提交的

// 2,dengji.dat信息文件中获取留言信息
$info = file_get_contents("dengji.dat");

// 3,以@@@符合拆分留言信息为一条一条的（将留言信息以@@@的符号拆分成留言数组）
$lylist = explode("@@@", $info);

// 4，使用unset删除指定ID的留言
unset($lylist[$id]);

// 5,还原留言信息为字串，并写回留言文件：liuyan.txt
$ninfo = implode("@@@", $lylist);
file_put_contents("dengji.dat", $ninfo);
// 6
echo "删除成功！！";
  Header("Location:https://service.qsis.cn:88/ruiyarisheng/dengjishow.php");
?>
