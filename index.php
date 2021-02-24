<!DOCTYPE HTML>
<HTML>
<Title>
Homepage
</title>


<body bgcolor="#212F3D">
<center>
<h1 class="homepage"> Home Page</h1>
<div class="hero-image">
  <div class="hero-text">
  <h1> Today </h1>
    <p>The problems today</p>
<a href="https://main-webpage-today.herokuapp.com"><button class="button" style="vertical-align:middle"><span>Start </span></button></a>
</div>
 </div>
<style>


.hero-image {
 background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("5th image.jpg");
 height: 110%;
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.hero-text 
{
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: FloralWhite;
  font-size: 20px;
}

.button {
 font-size: 15px;
 border-radius: 4px;
 border:1px solid #212F3D;
 background-color: floralwhite;
cursor:pointer;
transition-duration:0.4s;
color: #212F3D
}
.button:hover {
background-color: #212F3D;
color: FloralWhite
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.4s;
}
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.4s;
}
.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

@font-face
{
font-family: 'Lobster';
src: url(lobster.regular.ttf);
font-style: normal;
font-weight: 100;
}

.lobster
{
font-weight: 100;
    color: FloralWhite;
  }

  h1 {
    font-family: Monospace;
  }
p {
font-family: Arial
}

.homepage 
{
  font-family: 'Lobster';
  font-weight: 100;
    color: FloralWhite;
}
.container {
 background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("4th image.jpg");
 height: 110%;
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.centered {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: FloralWhite;
  font-size: 20px
} 

</style>
<br>
<h1 class="lobster"> 
What problems are we facing currently?
</h1>
<p class="lobster">
Coronovirus Disease is an infectious disease which is now pandemic and the most problem of every country. The virus is transmitted through droplets generated when an infected person coughs, sneezes, or exhales. There are over 110 million total cases around the world with 62.1 million recovered and 2.44 million deaths. Most common symptoms of COVID are fever, dry cough, and tiredness. There are two vaccines which can prevent a person from the virus. These vaccines are called BioNTech, Fosun Pharma, Pfizer and  University of Oxford, AstraZeneca vaccine.
</p>
<p class="lobster">
The severity of COVID-19 symptoms can range from very mild to severe. Some people may have only a few symptoms, and some people may have no symptoms at all. Some people may experience worsened symptoms, such as worsened shortness of breath and pneumonia, about a week after symptoms start.
</p>
<br>
<div class="container">
 <div class="centered">
 <h1 class="lobster">Hope</h1>
<p class="lobster">The future we seek</p>
<a href="https://main-webpage-tomorrow.herokuapp.com/"><button class="button" style="vertical-align:middle"><span>Start </span></button></a>
</div>
</div>
<h1 class="lobster">
The Future For Us
</h1>

<p class="lobster">
Covid-19 has been an issue in the society for a year, but there is still hope. Through the help from doctors, a vaccine has been invented to solve this. With this, people who are not yet carriers can rest easy. Not only is it not available for everyone yet, it's still being tested. although, it cant be sent to everyone immediately, eventually, everyone will be free from the virus’ clutches.
</p>

</HTML>
