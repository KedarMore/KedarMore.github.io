<html>
<head>
<script>
function fn(){
	location:login.php;
	return false;
}
</script>
<style>
*{padding:0px;margin:0px}
.main{background-image:url(back.jpg);background-size:1000px 1000px;background-attachment: fixed}
.header{background-color:orange;height:200px;width:970px;margin:auto;}
.header h1{font-size:70px;text-align:center;line-height:200px;font-family:algerian}
.nav{background-color:black;height:50px;width:970px;margin:auto}
.cont{background-image:url(cont.jpg);background-size:100% 100%;
height:750px;width:970px;margin:auto}
.left{background-color:white;height:750px;width:300px;margin:auto;float:left;opacity:0.3;
filter:alpha(opacity=30);
}
.footer{background-color:grey;height:100px;width:970px;margin:auto}
.list{padding-left:20px}
li{float:left;list-style:none}
.list li a{text-decoration:none;display:block;height:50px;width:150px;line-height:50px;
color:grey;text-style:bold}
.list li a:hover{font-size:23px;color:white}
.list2{display:none;}
.right{position:absolute;}
.d3{position:relative; left:350px; background-color:white;width:500px;}
select{width:150px;height:40px;text-align:center;font-size:30px}
.p1{font-size:40px;color:blue;}
.p2{font-size:30px;color:red;}
</style>
</head>
<body>
<div class="main">
<div class="header">
<h1>SoNg FeVeR</h1>
</div>
<div class="nav">
<ul class="list">
<li><a href="sfhome.html" target="_blank">HOME</a></li>
<li><a href="languages.html" target="_blank">LANGUAGES</a></li>       
<li><a href="genre.html" target="_blank">GENRE</a></li>
<li><a href="artist.html" target="_blank">ARTIST</a></li>
<li><a href="login.php" target="_blank">LOGIN</a></li>
<li><a href="aboutus.html" target="_blank">ABOUT US</a></li>
</ul>
</div>
<div class="cont">
<div class="left">
<marquee direction="down" scrollamount="5">
<p>What is that in music that pulls you to listen it more? #music #artist #musician #newsong #spirit #Songs #Popular #Energy #questiontime</p><br>
<p>"You have to go to that broken part of your heart to #write #songs" #LaDyGaGa (..gReAtNeSs is produced by SUFFERiNg) #LoVe #mUsiC #PAiN #aRt</p><br>
<p>This tin makes me feel #weird @MuhdyungG Ar u his #idol @BadmanBinladin  or vise versa ...but u ar all killin me wit ur all ur #songs</p><br>
<p>Random thought: just listened to Joe Jackson's song Steppin' Out. Such a great song. #SONGS</p><br>
<p>If music be the food of love, play on. #Shakespeare #quotes #music #Kpop #hiphop #rap #Electro #songs #MusicInspiresLife #musicislife #life</p><br>
<p>If you people love music/maroon 5 you will love these guys.#music #slightlyleftofcentre #Maroon5 #pop #funky #Australia #songs #dance</p><br>
<p>Trying to find great music for an epic DJ playlist. Any song suggestions? #music #songs</p><br>
</marquee>
</div>
<div class="right">
<button style="margin-left:850px;margin-top:25px;width:70;height:40;"><a href="login.php">LOGOUT </a> </button>
<div class="d3">
<p class="p1">HELLO <?php session_start();
 $a=$_SESSION['userid'];
 echo $a; 
 ?>!!</p><br><br>
 <h2>GIVE SOME SPECIFICATIONS AND
<br> WE WILL SUGGEST SONGS FOR YOU!!</h2>
 <br><br>
  <p class="p2">PLEASE TELL US IN WHICH MOOD ARE YOU IN RIGHT NOW</p> 
	<br>;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select>
	<form>
	<select >
	<option >romantic</option>
	<option>happy</option>
	<option>naughty</option>
	<option>inspirational</option>
	<option>heartbroken</option>
	<option>excited</option>
	<option>flirty</option>
	</select>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub" width:50; height:20; >
	</form>
</div>
</div>
</div>
<div class="footer">
</div>
</div>
</body>
</html>
<?php
$

?>