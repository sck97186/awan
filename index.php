﻿<?php
error_reporting(0);

$site_title = "♥ Awan Boys The BOt Master ♥";

// using banned in role will show user that he is banned when he try to login .
$users = array(
               "a46don" => array("name" => "admin", "role"=> "owner")
               );

if(isset($_SESSION['logged']) && !isset($users[$_SESSION['password']]) || $users[$_SESSION['password']]['role'] == 'banned'){
      unset($_SESSION['logged']);
      unset($_SESSION['password']);
      unset($_SESSION['username']);
}

if(!isset($_SESSION['logged']) || $_SESSION['logged'] ==  false){
	$showlogin = true;
	$loginerror = "";

   if(isset($_POST['password'])){

      $password = $_POST['password'];

    if(!empty($password)){

      if(isset($users[$password])){

         if($users[$password]['role'] !== 'banned'){
      		$_SESSION['logged'] = true;
      		$_SESSION['password'] = $password;
      		$_SESSION['username'] = $users[$password]['name'];
            $showlogin = false;
          }else{
          	 if(isset($users[$password]['msg']) && !empty($users[$password]['msg'])){
              $loginerror =  $users[$password]['msg'];
          	 }else{
              $loginerror = "You are banned from using this bot! Get out of here!";
            }
          }
      }else{
       	  $loginerror = "Wrong Password!";
      }

     }else{
     	$loginerror = "Please enter Password!";
     }
  }
}

 ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
｡◕‿◕｡  Awan The Botter KinG
</title><link rel="stylesheet" type="text/css" href="ali.css" media="all,handheld"/><link rel="shortcut icon" href="">
<?php error_reporting(0);
$bot=new bot();
class bot{

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by Ali',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">PENGATURAN BOT by '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="green">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
<center><font color="orange" size="8"> ♥ SCRIPT MADE BY AWAN BOYS ♥ </font></center>
</h1>
<h2 class="description">
</h2></div>';
}

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
Administrator Websites
</h2>
FACEBOOK LOVER'.$_SEVR[HTT_HOST].'
</div>

<div class="post-content">
<center><a href="https://fb.com/AdminHammad"><Ali>
<div class="post-content">
<a href="http://facebook.com/AdminHammad">Contact Admin</a>
<span>
<p style="font-weight:bold;">
<center>
<a href="http://www.facebook.com/AdminHammad"><img src="https://scontent-sin6-1.xx.fbcdn.net/v/t34.0-12/17919055_267435857054654_1519823219_n.jpg?_nc_eui2=v1%3AAeFkBxW4IEjofgYipzWlk7fteZb-cmcaRmDgg4-OYASFNixSoehoUfkkozwmAPQy3ikZCnBRT24Is_M2OjRuJaAigNGdO9jPSx4IHqv_rc6zijST-6vRFrBm-yfuFy99TRo&oh=df6fbc2b23d4778aa4851ceee04691db&oe=58F4E2B6" style="width:110px; height:110px;border: 2px;border-radius: 50%;" alt="" title="Ali" class="thumbnail"/></a>
<br><center>
</span>
</div>
<div class="post-meta2">
<center><b>▁ ▂ ▄ ▅ ▆ ▇ █ <mark><u>AWAN</u></mark> █ ▇ ▆ ▅ ▄ ▂ ▁</b>
</center>
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2FAdminHammad&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>';
}


public function showlogin(){
		 echo '<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Login to Bot Site</a></h3>
<ul id="search-form">

  <form action="index.php" method="post">
  <li><div class="login-error">'.$GLOBALS["loginerror"].'</div></li>
   <li><label class="label-password">Password&nbsp;:    </label><input class="inp-text" type="password" style="height: 20px;width: 250px;" name="password"></li>
    <li><label class="label-submit"></label><input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></li>
  </form>
</ul></div></div>';
	}





public function bwh() {

 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
 	echo '<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">Get Access Token
</a></h3>
<marquee behavior="scroll" direction="right" scrollamount="5" scrolldelay="3" width="100%">
<b>
<font size="20" <font color="sky blue" size="20">awanboys.Tk  <font color="red"> </font>  </font>
</marquee>
<font size="5" color="red">Awan Hacker; 2016-2018</font>
</span>
</div></center><br>
<h3><a name="navigation-name" class="no-link"> Get Token </a></h3><br>
<center>
<ul>
<a style="text-decoration:none" href="http://emox3.tk/tok" target="_blank"><b>Token(Click)<i class="fa fa-external-link"></i></b></a>
<br>
</center>
<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value="  Sυвмιт "></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
User robot : <font color="red">'.count($user).'</font>
<br>
Script bot &copy; 2016-2018<br>
PoweRed By :  <a href="https://fb.com/official.ali007"><font color="Red">Awan </font></a><br>
</div>';
}



public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<audio loop autoplay controls>
    <source src="http://yt-files.com/yt-dd.php?id=B0QEU9gxapk&hash=47065162309b4f4a0819db49d75631a1&name=Mere%20Rashke%20Qamar-Remix%20Nusrat%20Fateh%20Ali%20Khan%20Feat.A1MelodyMaster[48]::Raag.Me::.mp3" type="audio/mpeg" loop="true">