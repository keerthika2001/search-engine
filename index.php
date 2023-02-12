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
width:100%;
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
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;

}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
} 
/*css*/
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

li {
    list-style-type: none;
}

a {
    text-decoration: none;
}

body {
    font-family: sans-serif;
    height: 100vh;
    display: flex;
    flex-direction: column;
}



/* Header */
header {
    height: 60px;
}
#background-video {
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: -1;
  }

.navbar {
    height: 100%;
    width: 100%;
    padding: 10px 20px;
}

.navbar ul {
    height: 100%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    font-size: 14px;
}

.navbar ul li {
    margin-left: 15px;
}

.navbar ul li a {
    color: white;
}

.link:hover {
    text-decoration: underline;
}

.circle-shadow {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.circle-shadow:hover {
    background-color: rgba(0, 0, 0, 0.1);
}

.menu-icon,
.user-icon span {
    font-size: 18px;
}

.user-icon span {
    color: white;
}

.user-icon {
    background-color: #EF6C00;
    height: 30px;
    width: 30px;
    border-radius: 50%;
    text-align: center;
    line-height: 30px;
}

/* Content */
.content-section {
    flex-grow: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.content-wrapper {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-bottom: 100px;
}

.logo-img {
    width: 300px;
    margin-bottom: 20px;
}

.search-bar {
    border: 1px solid lightgray;
    width: 600px;
    height: 45px;
    border-radius: 30px;
    display: flex;
    align-items: center;
    padding-left: 15px;
}

.search-bar:hover {
    box-shadow: 0px 0px 4px 0px #B5B5B5;
}

.search-bar i {
    font-size: 18px;
    color: gray;
    margin-right: 15px;
    cursor: pointer;
}

.search-bar input {
    flex-grow: 1;
    height: 30px;
    margin-right: 15px;
    font-size: 16px;
    border: none;
}

.search-bar input:focus {
    outline: none;
}

.search-btns {
    margin-top: 20px;
}

.search-btns button {
    height: 40px;
    font-size: 14px;
    border: none;
    border-radius: 5px;
    margin-left: 10px;
    color: black;
    background-color: #F2F3F4;
}

.search-btns button:hover {
    border: 1px solid lightgray;
}

.google-search-btn {
    width: 120px;
}

.lucky-search-btn {
    width: 140px;
}

.language {
    margin-top: 20px;
    font-size: 14px;
}

.language p a {
    color: blue;
}

.language p a:hover {
    text-decoration: underline;
}

/* Footer */
footer {
    background-color: #F2F2F2;
    height: 100000000px;
}

.footer-content {
    display: flex;
    align-items: center;
    padding: 20px;
}

.upper-footer {
    height: 50%;
    border-bottom: 1px solid lightgray;
}

.upper-footer p {
    color: gray;
    font-size: 14px;
}

.lower-footer {
    height: 50%;
    display: flex;
    justify-content: space-between;
}

.lower-footer ul li a {
    font-size: 14px;
    color: gray;
}

.lower-footer ul li a:hover {
    text-decoration: underline;
}

.lower-left-footer {
    display: flex;
}

.lower-left-footer li {
    margin-right: 15px;
}


.lower-right-footer {
    display: flex;
}

.lower-right-footer li {
    margin-left: 15px;
}

/* Mobile and Tablet */
@media only screen and (max-width: 650px) {
    /* Navbar */
    .navbar ul {
        font-size: 10px;
    }

    .menu-icon,
    .user-icon span {
        font-size: 14px;
    }

    .circle-shadow {
        height: 30px;
        width: 30px;
    }

    /* Logo */
    .logo-img {
        width: 200px;
    }

    /* Search Bar */
    .search-bar {
        width: 90%;
        height: 35px;
    }

    .search-bar i {
        font-size: 14px;
    }

    /* Buttons */
    .search-btns button {
        height: 30px;
        font-size: 12px;
    }

    .google-search-btn {
        width: 100px;
    }
    
    .lucky-search-btn {
        width: 120px;
    }

    /* Language */
    .language {
        font-size: 12px;
    }

    /* Footer */
    footer {
        height: 150px;
    }

    .upper-footer {
        height: 50px;
    }

    .lower-footer {
        height: 100px;
        flex-direction: column;
    }

    .lower-left-footer {
        flex-wrap: wrap;
    }
    
}
</style>
</head>
<body>
<header>
    <nav class="navbar">
            <ul>
                <li>
                    <a class="link" href=""></a>
                </li>
                <li>
                    <a class="link" href="">Images</a>
                </li>
                <li>
                    <a class="link" href="">Search</a>
                </li>
                <li>
                    <a class="link" href="">Recents</a>
                </li>
                <li>
                    <a class="link" href="">Updates</a>
                </li>
                <li>
                    <div class="circle-shadow">
                        <a class="menu-icon" href=""><i class="fas fa-bars"></i></a>
                    </div>
                </li>
                <li>
                    <div class="circle-shadow">
                        <a class="user-icon" href=""><span>SK</span></a>
                    </div>
                </li>
            </ul>
        </nav>
</header>

<div id="container">
<div id="content">
<div class="content-wrapper">
<img class="logo-img" src="logo.png" alt="Google Logo Image">
</div>

<div class="form">
<form autocomplete="off" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<div class="autocomplete">

    <input type="text" id="myInput" name="name" autofocus placeholder="search">
    <input type="submit" value="search">
 
    </div>
</form> 
</div>
        <section class="content-section">
            <video id="background-video" autoplay loop muted>
                <source src="Glow.mp4" type="video/mp4">
                </video>
            <div class="search-btns">
                <button class="google-search-btn">Explore</button>
                <button class="lucky-search-btn">Innovate and beyond </button>
            </div>
            <div class="language">

                <p>SEO Offered in: <a href="">English(UK)</a></p>
            </div>
        </div>
    </section>
<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function highlight($line,$search_keyword){

$number_of_words = str_word_count($search_keyword);
$words = str_word_count($search_keyword,1);

if($number_of_words==1){
$line = str_replace(" " . $words[0] . " ", " <mark>" . $words[0] . "</mark> ",$line);
}
return $line;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

$search_keyword = test_input($_POST["name"]);


echo "<br><br>";

$txt = file_get_contents("database.txt");

$keyword = "/" . $search_keyword . "/i";
$keyword_with_space = "/" . " " . $search_keyword . " " . "/i";
$keyword_in_start_title = "/" . "<b>" . $search_keyword . "" . "/i";

foreach(preg_split("/((\r?\n)|(\r\n?))/",$txt) as $line){
if(preg_match($keyword_in_start_title,$line)){
if(!($search_keyword=="")){
echo "<div class='item'>";
$line = highlight($line,$search_keyword);
echo $line;
echo "</div>";
}
}
}

foreach(preg_split("/((\r?\n)|(\r\n?))/",$txt) as $line){
if(preg_match($keyword_with_space,$line)&&!(preg_match($keyword_in_start_title,$line))){
if(!($search_keyword=="")){
echo "<div class='item'>";
$line = highlight($line,$search_keyword);
echo $line;
echo "</div>";
}
}
}

foreach(preg_split("/((\r?\n)|(\r\n?))/",$txt) as $line){
if(preg_match($keyword,$line)&&!(preg_match($keyword_with_space,$line))&&!(preg_match($keyword_in_start_title,$line))){
if(!($search_keyword=="")){
echo "<div class='item'>";
$line = highlight($line,$search_keyword);
echo $line;
echo "</div>";
}
}
}


}
?>

</div>
</div>

<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = [
<?php
include 'autosuggest_list.txt';
echo '"' . ' ' . '"';
?>
];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>


</body>
</html>
