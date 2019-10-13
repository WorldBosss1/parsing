<?php
header('Content-type: text/html; charset=utf-8');

function redir(){
echo("<script>location.href='ajax.php'</script>");
exit();
}
require_once("libr/simple_html_dom.php");
require 'phpQuery-onefile.php';
echo "<link rel='stylesheet' href='style.css'>";
//$html = file_get_contents("https://www.marathonbet.ru/su/popular/Football");


function print_arr($arr){
	echo '<pre>'. print_r($arr,true) .'</pre>';	
}
/*
function get_content($url,$data=[]){
	$ch=curl_init($url);
	//curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data));
	curl_setopt($ch,CURLOPT_COOKIEJAR,__DIR__ . '/cookie.txt');
	curl_setopt($ch,CURLOPT_COOKIEFILE,__DIR__ . '/cookie.txt');
	$res=curl_exec($ch);
	curl_close($ch);
	return $res;
	
}*/




//$url_auth='https://www.marathonbet.ru/su/popular/Football?page=25&pageAction=getPage&_=1570536597468';
//$url = 'https://www.marathonbet.ru/su/popular/Football';
/*$auth_data=[
 'login[login]' => 'drademon',
 'login[pass]' => 'bkmybh12345'
];*/
//$data= get_content($url_auth,$auth_data);
//var_dump($data);
//$data= get_content($url);


//$doc = phpQuery::newDocument($data);

//var_dump($data);

function get_page($pag){
	///su/betting/Football/Internationals/FIFA+World+Cup/2022/Qualification/AFC/2nd+Round/Group+Stage
$pagi = "https://www.marathonbet.ru" . "/su/betting/Football/Internationals/FIFA+World+Cup/2022/Qualification/AFC/2nd+Round/Group+Stage";
//else
//{
//   header ('Location: ajax.php');  // перенаправление на нужную страницу
//   exit();    // прерываем работу скрипта, чтобы забыл о прошлом
//}	
}
function parser($url,$start,$end){
	if($start < $end){
		
$file = file_get_contents($url);
//$file=get_content($url);	
$doc = phpQuery::newDocument($file);
echo $doc->find('.category-label-link')->attr('href');

foreach($doc->find('.sport-category-content .category-container') as $article){
	$article=pq($article);
	//$article->find('.post-category')->remove();
	//$article->find('.post-category')->prepend('Категория: ');
	//$article->find('.post-category')->wrap('<div class="category">')->after('Дата: '. date("Y-m-d H-i-s"));
//	$img = $article->find('.post-image')->attr('style');
//	$text= $article->find('.post-content')->html();
//	$rest = substr($img, 22,-1);
	//echo $rest;
	//print_arr($img);
//	echo "<img src='$rest'>";
//	echo $text;
	echo $article;
	echo "<hr>";
	
  }
  for($i=0;$i<5;$i++){
	 $mor="https://www.marathonbet.ru/su/popular/Football?page=". (string) ($i+1) ."&pageAction=getPage&_=1570536597468";
	 //echo $mor; category-label-link
  $url_auth=curl_init("https://www.marathonbet.ru/su/popular/Football?page=".(string)($i+1)."&pageAction=getPage&_=1570536597468");
  
 // echo $mor;
	curl_setopt($url_auth,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($url_auth,CURLOPT_FOLLOWLOCATION,true);
	
	curl_setopt($url_auth, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($url_auth,CURLOPT_SSL_VERIFYPEER,false);
	//curl_setopt($url_auth,CURLOPT_COOKIEJAR,__DIR__ . '/cook.txt');
	//curl_setopt($url_auth,CURLOPT_COOKIEFILE,__DIR__ . '/cook.txt');
	$rem=curl_exec($url_auth);
  //$prim=file_get_contents( $url_auth );
  //$fuu = phpQuery::newDocument($prim);
  $jsi=json_decode($rem,true);
  //$fuu=substr($fuu,60,-37);
  
foreach ($jsi as $topMenu) {
	echo "<hr>";
	//$img = $topMenu->find('.category-container')->attr('style');
	//echo "<img src='$rest'>";
    echo $topMenu['content'];
}
//curl_close($url_auth);
  }
  //echo $jsi[0];
 // var_dump ($jsi);
 // $fuu=substr($fuu,60,-37);
  //parser($url_auth,$start,$end);
       //$next = $doc->find('.pagination .active')->next()->attr('href');
//$next = $doc->find('.pagination .active')->next()->find('.page-link')->attr('href');
       //echo $next;
/*
if(!empty($url_auth)){
	$start++;
	parser($url_auth,$start,$end);
  }*/
  
 }
}
//next-page-loading  используй это
$url = 'https://www.marathonbet.ru/su/popular/Football';
//$url='https://www.marathonbet.ru/su/popular/Football?page=20&pageAction=getPage&_=1570536597468';
//var_dump($url);
$start=0;
$end=1;

parser($url,$start,$end);
/*
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_HEADER,true);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($ch,CURLOPT_NOBODY,true);
curl_exec($ch);
curl_close($ch);*/

/*
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
curl_exec($ch);
curl_close($ch);*/
/*
$fp=fopen("file.txt","w");
$ch=curl_init($url);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($ch,CURLOPT_FILE,$fp);
$res=curl_exec($ch);
curl_close($ch);
var_dump($res*/


/*$ch=curl_init($url);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$res=curl_exec($ch);
curl_close($ch);
var_dump($res);*/


//$tbl = $doc->find('.data');
//$tr=$doc->find('.data tr:eq(1) td:eq(1)')->text();


//echo $tr;
//$('.grid-main').scrollTop(10000000);
//var_dump($doc);
/*
Request URL: https://www.marathonbet.ru/su/popular/Football?page=25&pageAction=getPage&_=1570536597468
Request Method: GET
page: 25
pageAction: getPage
_: 1570536597468*/
?>
