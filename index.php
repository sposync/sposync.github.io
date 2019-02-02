<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:300" rel="stylesheet">
<style>
body {
  font-family: "Lato", sans-serif;
  margin: 0;
  padding: 0;
  background: #333;
  background-attachment: fixed;
  background-size: cover;
}
#video-background {
  position: fixed;
  right: 0; 
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
  width: auto; 
  height: auto;
  z-index: -1000;
}
h1 {
  position: absolute;
  top: 30%;
  width: 100%;
  font-size: 5em;
  letter-spacing: 5px;
  color: #191970;
  font-family: 'Comfortaa', cursive;
  text-align: center;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
#bars{
	font-size:50px;
	cursor:pointer;
	margin-left: 2%;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#maindiv{
  text-align: center;
  font-size: 3em;
  position: absolute;
  top: 60%;
  width: 100%;
  font-family: 'Comfortaa', cursive;
  color: #006400;
  margin-bottom: 10%;
}
#aboutDiv{
  padding-top: 0.1%;
  padding-bottom: 1%;
  background: #9b28ff;
  color: #fff;
  position: relative;
  top: 150px;
}
#aboutDiv p{
  font-size: 0.8em;
  text-align: justify;
  padding:0% 5% 0% 5%;
}
#signupDiv{
  padding-top: 0.1%;
  padding-bottom: 1%;
  background: #FF7F50;
  color: #fff;
  position: relative;
  top: 150px;
}
.input{
  background-color:transparent;
  font-size:0.5em;
  outline:none;
  border:none;
  padding:1% 1%;
  margin-bottom: 1%;
  border-bottom: solid 2px black;
  width: 60%;
  cursor:pointer;
}
#formdiv{
  background-image: url('tartan-track.jpg');
  background-repeat:no-repeat;
  background-size:100% auto;
  background-position: center;
  padding-top: 5%;
  padding-bottom: 5%; 
}
#forminneridv{
 /* border: solid 5px white;
  margin-left: 20%;
  margin-right: 20%; 
  border-radius: 5px;*/
  box-shadow: 5px 5px 10px black;
  padding: 2%;
}
#button{
  width:80%;
  font-family:century gothic;
  padding:1%;
  background:#ffffff;
  cursor:pointer;
  border:solid 2px #ac6053;
  font-size:0.5em;
}
#button:hover{
  background:#ac6053;
  color:#ffffff;
  transition:0.5s;
}
</style>
</head>
<body>

<article align="center">
  <h1>SpoSync</h1>
</article>

<video autoplay loop id="video-background" muted plays-inline>
  <source src="App_bg video.mp4" type="video/mp4">
</video>

<div id="Slider" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#aboutDiv">About</a>
  <a href="#signupDiv">SignUp</a>
  <a href="#">Contact Us</a>
  <a href="#">Feedback</a>
</div>
<span id="bars" onclick="openNav()">&#9776;</span>
<div id="maindiv">
<p>Now maintain your sports portfolio.</p>
<div id="aboutDiv">
  <h3>About</h3>
  <hr width="30%" color="#fff"/>  <hr width="40%" color="#fff" />
  <p>This is the container that holds the about text of the website.This is the container that holds the about text of the website.
  This is the container that holds the about text of the website.This is the container that holds the about text of the website.
  This is the container that holds the about text of the website.This is the container that holds the about text of the website.
  This is the container that holds the about text of the website.This is the container that holds the about text of the website.
</p>
</div>
<div id="signupDiv">
  <h3>Sign Up</h3>
    <hr width="30%" color="#fff"/>  <hr width="40%" color="#fff" />
    <div id="formdiv">
      <div id="forminneridv">
    <form action="storedata.php" method="post" autocomplete="off">
      <input type="text" class="input" placeholder="Fullname" name="fullname" spellcheck="false" style="text-transform:capitalize;" required/>
      <br/>
      <input type="email" class="input" placeholder="Email-id" name="email" spellcheck="false" required /><br/>
      <input type="text" class="input" placeholder="Game" name="game" spellcheck="false" style="text-transform:capitalize;" required/><br/>
      <input type="submit" id="button" class="input"/>
    </form>
  </div>
  </div>
</div>
</div>

<script>
function openNav() {
  document.getElementById("Slider").style.width = "250px";
}

function closeNav() {
  document.getElementById("Slider").style.width = "0";
}
</script>
   
</body>
</html> 
