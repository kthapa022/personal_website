<!DOCTYPE html>
<html>
<head>
<style>
#header_ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	text-align: center;
}

#header_li{
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
#home_li{
	float: left;
}

.photo_header{
	width: 40px;
	float: left;
	border-radius: 50%;
}
</style>
</head>
<body>

<ul id="header_ul">
	<li id="header_li"><a href="contact.php">Contact</a></li>
	<li id="header_li"><a href="projects.php">Projects</a></li>
	<li id="header_li"><a href="resume.php">Resume</a></li>
	  <li id="header_li"><a class="active" href="about.php">About</a></li>
<a href= "contact.php"> <img src="photo_me.png" class="photo_header"></a>
  <li id="home_li"><a href="https://www.google.com">Home</a></li>


  
  
  
</ul>

</body>
</html>