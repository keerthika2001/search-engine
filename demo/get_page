<!DOCTYPE html>
<html>
<head>
<style>
#container{width:90%;margin:auto;}
#content{width:100%;margin:auto;}

body{
background-image:url(radio_telescope.jpeg);
background-size:cover;
background-repeat:no-repeat;
background-attachment:fixed;
}

h1{
text-align:center;
font-size:30px;
font-family: Courier New;
}

input[type=text]{
width:60%;
font-size:16px;
padding:12px 20px;
margin:8px 0;
border: 1px solid #ccc;
border-radius:4px;
box-sizing: border-box;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.1);
}



input[type=submit]{
width:25%;
font-size:16px;
padding:12px 20px;
margin:8px 0;
border: 1px solid #ccc;
border-radius:4px;
box-sizing: border-box;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.1);

color:#fff;
opacity:0.75;
background-color:rgb(205,0,205);

}

input[type=submit]:hover{
background-color:rgb(255,0,255);
}

div.form{
width;100%;
}

div.item{
background-color:white;
opacity:0.9;
border-radius:10px;
border: 1px solid #ccc;
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.1);
padding:20px 30px;
margin:8px 0;
}


</style>
</head>
<body>

<div id="container">
<div id="content">
<br><br><br><br>
<br><br><br><br>
<h1>Yessle</h1>

<div class="form">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <input type="text" id="name" name="name" autofocus placeholder="search">
  <input type="submit" value="search">
</form> 
</div>

<?php

function extract_title($data){
$start = "<title";
$end = "</title>";
$b = strpos($data,$start);
$a = strpos($data,$end,$b);
$length = $a - $b+10;
$title_temp = substr($data,$b,$length);

$start = ">";
$end = "</title>";
$b = strpos($title_temp,$start);
$a = strpos($title_temp,$end,$b);
$length = $a - $b+7;
$title = substr($title_temp,$b+1,$length);

return $title;
}

function extract_description($data){
$description = "";
foreach(preg_split("/[<>]+/",$data) as $line){
$description_txt = "/" . "description" . "/i";
$content = "/" . "content=" . "/i";
if(preg_match($description_txt,$line)&&preg_match($content,$line)){
$start = "content=";
$end = '"';
$b = strpos($line,$start);
$a = strpos($line,$end,$b+9);
$length = $a - $b-9;
$sub_line = substr($line,$b+9,$length);

$sub_line_txt = "/" . $sub_line . "/i";
if(!(preg_match($sub_line_txt,$description))){ 
$description .= $sub_line . " ";
}
}
}
return $description;
}

function extract_paragraph($data){
$start = "<p>";
$end = "</p>";
$b = strpos($data,$start);
$a = strpos($data,$end,$b+3);
$length = $a - $b-6;
$title = substr($data,$b,$length);

$paragraph = "";
foreach(preg_split("/[<]+/",$title) as $line){
$start2 = ">";
$b2 = strpos($line,$start2);
$sub_line = trim(substr($line,$b2+1));
$paragraph .= $sub_line . " ";
}
return $paragraph;
}

function extract_links($data){

		$addresses = "";
		$link_string =  "/" . "<a" . "/i";		
		while(preg_match($link_string,$data)){
		$start = "<a";
		$end = ">";
		$beginningPos = strpos($data, $start);
		$b = $beginningPos;
		$endPos = strpos($data, $end,$b);
		$a = $endPos;
		$lengte = $a-$b+1;
		$linkje = trim(substr($data, $b+1,$lengte));
		
		//ONLY EXTERNAL LINKS:
		
		$http_string =  "/" . "http:" . "/i";
		$https_string =  "/" . "https:" . "/i";				
		if(preg_match($http_string,$linkje)||preg_match($https_string,$linkje)){
		
		$start = "href=";
		$end = '"';
		$beginningPos = strpos($linkje, $start);
		$b = $beginningPos;
		$endPos = strpos($linkje, $end,$b+6);
		$a = $endPos;
		$lengte = $a-$b-6;
		$linkje_small = trim(substr($linkje, $b+6,$lengte));
		
		$start = "http";
		$end = "?";
		$beginningPos = strpos($linkje_small, $start);
		$b = $beginningPos;
		$endPos = strpos($linkje_small, $end,$b+6);
		$a = $endPos;
		$lengte = $a-$b;
		$linkje_small2 = trim(substr($linkje_small, 0,$lengte));
		if($linkje_small2 == ""){
		$real_linkje = $linkje_small;
		}
		else{
		$real_linkje = $linkje_small2;
		}
		
		$link_start = substr($real_linkje, 0,4);
		if($link_start=="http"){
		$addresses .= ($real_linkje . "\n");		
		}
		}
		
		$remove = $linkje;
		$data = str_replace($remove, "",$data);
		}

				
   		return  $addresses;

}



if($_SERVER["REQUEST_METHOD"] == "POST"){

$address = $_POST["name"];

echo $address;

$html = file_get_contents($address);

echo "<br><br>";

$title = extract_title($html);
$description = extract_description($html);
if($description ==""){
$description = extract_paragraph($html);
}

$links = extract_links($html);

$txt = file_get_contents('database.txt');

echo $title;
echo "<br>";
echo $description;
echo "<br><br>";
echo $links;



$title = substr($title,0,200);
$description = substr($description,0,400);


$txt .= "\n" . "<b>" . $title . "</b><br>" . "<a href='" . $address . "'><i>" . $address . "</i></a>" . "<br>" . $description;

file_put_contents('database.txt',$txt);


$list_of_links = file_get_contents('list_of_links.txt');
$list_of_links .= $links; 
file_put_contents('list_of_links.txt',$list_of_links);

}

?>

</div>
</div>


</body>
</html>
