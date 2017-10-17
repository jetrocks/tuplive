@import url(https://fonts.googleapis.com/css?family=Roboto:400,100);

html, body {
  background-color: #EEE;
  font-size: 16px;
}
#guide-template #intro-container {
  height: 100vh;
  width: 100%;
  background-size: cover;
  background-color: #000;
  text-align: center;
  position: relative;
  z-index: 4;
}
#guide-template h1 {
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  color: #FFF;
  font-style: normal;
  font-size: 120px;
  margin: 0 10px 10px 10px;
}
#guide-template h2 {
  font-family: 'Roboto', sans-serif;
  font-weight: 100;
  color: #49E2D6;
  font-style: normal;
  font-size: 38px;
  margin-top: 20px;
  text-transform: uppercase;
}
#guide-template #intro-container p {
  font-family: Arial, sans-serif;
  color: #FFF;
  font-size: 17px;
  line-height: 24px;
  margin: 50px auto;
}
#guide-template #nav-bar {
  position: relative;
  top: 0;
  width: 100%;
  height: 50px;
  background-color: #FAFAFA;
  background-image: -moz-linear-gradient(top, #ffffff, #f2f2f2);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#FFF), to(#F2F2F2));
  background-image: -webkit-linear-gradient(top, #FFF, #F2F2F2);
  background-image: -o-linear-gradient(top, #ffffff, #f2f2f2);
  background-image: linear-gradient(to bottom, #FFF, #F2F2F2);
  background-repeat: repeat-x;
  z-index: 3;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
}
#guide-template.fixed #nav-bar { 
  position: fixed;
  z-index: 99;
}
#guide-template a.menu-burger {
  height: 49px;
  padding: 13px;
  float: left;
  padding-bottom: 0px;
  border-left: 1px solid #D4D4D4;
  border-right: 1px solid #D4D4D4;
}
#guide-template .social-container {
  height: 49px;
  padding: 13px 0 0 25px;
  float: right;
  border-left: 1px solid #D4D4D4;
  border-right: 1px solid #D4D4D4;
}
#guide-template #nav-bar a:hover {
  background-color: #1C596D;
  color: #FFF;
  text-decoration: none;
}
#main { 
  background: #FFF;
}
#guide-template.fixed #main {
  position: relative;
  top: 50px;
}
#guide-template #content {
  border-left: 1px solid #EEE;
  padding-bottom: 25px;
}
#guide-template #sidebar { padding: 0px;}
#guide-template #affix {
  position: relative;
  top: 0;
  list-style: none;
  margin: 0;
  padding: 0;
}
#guide-template #affix li a {
  padding: 8px 0px;
  padding-left: 20px;
  position: relative;
  border-bottom: 1px solid #EEE;
  width: 100%;
  display: block;
}
#guide-template #affix li:hover a {
  background-color: #F7F7F7;
}
#guide-template #affix a:hover {text-decoration: none;}
#guide-template #affix li.current a {
  background-color: #E86425;
  color: #FFF;
  border-right: none;
}
#guide-template #affix li.current a:before {
  content: "";
  width: 0; 
	height: 0; 
	border-top: 5px solid transparent;
	border-bottom: 5px solid transparent; 
	border-right:5px solid #FFF;
  position: absolute;
  right: -1px;
  top: 15px; 
}
#guide-template.fixed #affix { 
  position: fixed;
  z-index: 99;
  width: 20.5%;
  top: 50px;
  height: 100%;
}
@media (max-width: 996px) {
  #sidebar {display: none;}
}