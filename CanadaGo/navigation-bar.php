<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  overflow: hidden;
  background-color: #060606;
  padding: 30px 10px;
  transition: 0.4s;
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 99;
  opacity: 80%;
 
}

#navbar a {
  float: left;
  color: white;
  text-align: center;
  padding: 20px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
  opacity: 1;
}

#navbar #logoimg {
  width: 250px;
  font-weight: bold;
  transition: 0.4s;
}

#navbar a:hover {
  border: 2px solid #D05151;
  color: white;
}

/*#navbar a.active {
  background-color: #CE3434;
  color: white;
}
*/
#navbar-right {
  float: right;
}
.section-dark{
  background-color:#282e34;
  color:#ddd;
	text-align: center;
}
.section h1{
background-color:grey;
margin-left:300px;
margin-right:300px;
}

.section h2{
background-color:grey;
margin-left:300px;
margin-right:300px;
}
.section p{
text-align:center;
margin-left:300px;
margin-right:300px;
font-size:20px;


}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.center:hover {
  box-shadow: 0 0 4px 2px grey;
}
#img{
padding:20px;
  }
  
  #img:hover {
  box-shadow: 0 0 4px 2px #D05151;
}


.section-light{
  background-color:#D06969;
  color:#ddd;
  margin-left:100px;
  margin-right:100px;
}

@media screen and (max-width: 580px) {
  #navbar {
    padding: 20px 10px !important;
  }
  #navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  #navbar-right {
    float: none;
  }
}
</style>

</head>

<div id="navbar">
  <a href="index.php" id="logo"><img src="images/Logo 2.jpg" alt="logo" id="logoimg" width = "100%" height = "100%" padding = "0px"></a>
  <div id="navbar-right">
    <a href="housing.php">Housing</a>
    <a href="#">Banking</a>
    <a  href="transportation.html">Transportation</a>
	<a href="provincialid.html">Provincial ID's</a>
	<a class="active" href="network.html">Network Providers</a>
	<a href="faq.php">FAQ</a>
  </div>
</div>

<script>
														//Script for Navigation bar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbar").style.padding = "10px 10px";
    document.getElementById("logoimg").style.fontSize = "15px";
  } else {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logoimg").style.fontSize = "25px";
  }
}
</script>