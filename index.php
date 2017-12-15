<?php

ob_start();
include 'administrative/access/Class.php';
$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$chatid = $update->callback_query->message->chat->id;
$chat_id = $update->message->chat->id;
$fromid = $update->callback_query->message->from->id;
$from_id = $update->message->from->id;
$forward_id = $update->message->forward_from->id;
$first = $update->message->from->first_name;
$username = $update->message->from->username;
$text = $update->message->text;
$txtzir = file_get_contents("data/zir.txt");
$message_id = $update->message->message_id;
$feed = @arashnasa (https://t.me/arashnasa);
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot451036159:AAHz5cZlbQ47eJLKDV0_yM-dCq7weSO8CGk/getChatMember?chat_id=@arashbazz @&user_id=".$from_id));
$tch = $truechannel->result->status;
$from_chat_msg_id = $update->message->forward_from_message_id;
//=========
    if (strpos($ban_all , "$from_id") !== false) {
	return false;
	}
	elseif (strpos($block , "$from_id") !== false) {
	return false;
	}
	elseif ($from_id != $chat_id and $chat_id != $feed) {
	LeaveChat($chat_id);
	}
	//===============
	elseif(preg_match('/^\/([Ss]tart)(.*)/',$text)){
	preg_match('/^\/([Ss]tart)(.*)/',$text,$match);
	$match[2] = str_replace(" ","",$match[2]);
	$match[2] = str_replace("\n","",$match[2]);
	if($match[2] != null){
	if (strpos($Member , "$from_id") == false){
	if($match[2] != $from_id){
	if (strpos($gold , "$from_id") == false){
	$txxt = file_get_contents('administrative/user/'.$match[2]."/gold.txt");
    $pmembersid= explode("\n",$txxt);
    if (!in_array($from_id,$pmembersid)){
      $aaddd = file_get_contents('administrative/user/'.$match[2]."/gold.txt");
      $aaddd .= $from_id."\n";
		file_put_contents('administrative/user/'.$match[2]."/gold.txt",$aaddd);
    }
	SendMessage($match[2],"🆕 یک نفر با لینک اختصاصی شما وارد ربات شد","html","true",$button_official);
	}
	}
	}
	}
	mkdir('administrative/user/'.$from_id);
	if($from_id == $admin){
	SendMessage($chat_id,"به ربات هوشمند بن سا خوش آمدید.","html","true",$button_official_admin);
	}else{
	SendMessage($chat_id,"سلام دوست عزیز.
	به ربات بن سا بهترین راه برای دریافت شارژ بدون نیاز به شماره شما 
	کافیست دوستان خود را دعوت دهید.","html","true",$button_official);
	}
	}
	//===============
	elseif($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
	SendMessage($chat_id,"❎ شما در کانال بن سا عضو نیستید ....!
	لطفا اول در کانال عضو شوید تا از اطلاع رسانی های بن سا خبر داشته باشید ✅
	عضویت در کانال : $kanal 
	بعد از عضویت ربات برای شما 50 امتیاز ارسال می کند","html","true",$button_remove);
	}
	//===============
elseif($text == 'دریافت لینک اختصاصی دعوت از دوستان ✉️'){
 $member_id = explode("\n",$gold);
 $mmemcount = count($member_id) -1;
 SendMessage($chat_id,"
$first دعوتت کرده که عضو بن‌سا بشی و کلی اتفاقهای هیجان‌انگیز برات بیفته، از شارژ بگیر📱تا سفر 🚘،رستوران🍕و تخفیف‌های جذاب دیگه! روی لینک زیر کلیک کن👇
t.me/boonsaabot/$from_id
","html","true",$button_official);
SendMessage($chat_id,"
دعوت‌نامه بالا رو برای دوستات و در گرو‌ه‌هایی که عضو هستی، بفرست ⤴️
متاسفانه فرصت کسب بن‌‌سا از طریق دعوت از دوستان به پایان رسیده اما به زودی با آفرهای جذاب دیگه برمیگردیم
","html","true",$button_official);
}	
     //===============
  elseif($text == 'چند بن‌سا دارم 🤔'){
  SendMessage($chat_id,"شما $mmemcount بن سا دارید.
  و 50 امتیاز جهت عضویت در کانال $kanal دریافت کردید.","html","true",$button_official);
  }
	 //===============
  elseif($text == 'تبدیل بن‌سا به شارژ  📲'){
  SendMessage($chat_id,"اپراتور خود را انتخاب نمایید.","html","true",$button_sh);
  }
  	 //===============
  elseif($text == 'خودم'){
 SendMessage($chat_id,"خطا در اتصال به بانک ...","html","true",$button_official);
  SendMessage($chat_id,"بن سای شما کافی نمی باشد...","html","true",$button_official);
 SendMessage($chat_id,"بن سای شما کافی نمی باشد..","html","true",$button_official);
  }
  	 //===============
  elseif($text == 'ایرانسل'){
  SendMessage($chat_id,"شارژ مورد نظر خود را انتخاب کنید","html","true",$button_shh);
  }
  	 //===============
  elseif($text == 'همراه اول'){
  SendMessage($chat_id,"شارژ مورد نظر خود را انتخاب کنید","html","true",$button_shh);
  }
  	 //===============
  elseif($text == 'رایتل'){
  SendMessage($chat_id,"شارژ مورد نظر خود را انتخاب کنید","html","true",$button_shh);
  }
    	 //===============
  elseif($text == 'شارژ 5,000 تومانی'){
  SendMessage($chat_id,"ورود از طریق دکمه زیر","html","true",$button_shhh);
  }
  	 //===============
  elseif($text == 'شارژ 2,000 تومانی'){
  SendMessage($chat_id,"ورود از طریق دکمه زیر","html","true",$button_shhh);
  }
  	 //===============
  elseif($text == 'شارژ 10,000 تومانی'){
  SendMessage($chat_id,"ورود از طریق دکمه زیر","html","true",$button_shhh);
  }
  	 //===============
  elseif($text == 'شارژ 20,000 تومانی'){
  SendMessage($chat_id,"ورود از طریق دکمه زیر","html","true",$button_shhh);
  }
//===============
elseif(preg_match('/^\/([Cc]reator)/',$text)){
 SendMessage($chat_id,"این ربات توسط @tele4u_team کد نویسی شده است","html","true",$button_official);
}
//===============
  elseif($text == '↩️منوی اصلی'){
  save('administrative/user/'.$from08:30 ق.ظ ‎11/‎29/‎2017_id."/command.txt","none");
  if($from_id == $admin){
  SendMessage($chat_id,"↩️ شما به منوی اصلی برگشتید

⏺ چه کاری میتونم براتون انجام بدم؟","html","true",$button_official_admin);
  }else{
  SendMessage($chat_id,"↩️ شما به منوی اصلی برگشتید

⏺ چه کاری میتونم براتون انجام بدم؟","html","true",$button_official);
  }
  }
  //============
else{
  SendMessage($chat_id,"یک گزینه انتخاب نمایید.","html","true");
}
mkdir('administrative/user/'.$from_id);
$txxt = file_get_contents('administrative/access/Member.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array($chat_id,$pmembersid)){
      $aaddd = file_get_contents('administrative/access/Member.txt');
      $aaddd .= $chat_id."\n";
		file_put_contents('administrative/access/Member.txt',$aaddd);
    }
	$txxt = file_get_contents('administrative/access/UserName.txt');
    $pmembersid= explode("\n",$txxt);
    if (!in_array("@".$username,$pmembersid)){
      $aaddd = file_get_contents('administrative/access/UserName.txt');
      $aaddd .= "@".$username."\n";
	  if($username != null){
		file_put_contents('administrative/access/UserName.txt',$aaddd);
	  }
    }
unlink('error_log');

?>