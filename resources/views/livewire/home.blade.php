

    <title>Livewire Midterm | Home</title>
    <div class="rt-container">
    	<div class="col-rt-18">
  <!-- Slider -->
          <div id="slider">
            <div class="slides">
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>&apos;WESTLIFE&apos;</h2>
                        <p>Westlife is an Irish pop vocal group formed in Dublin, Ireland in 1998. The group currently consists of members Shane Filan, Mark Feehily, Kian Egan, and Nicky Byrne. Brian McFadden was a member, until leaving in 2004. The group disbanded in 2012 after 14 years, later reuniting in 2018</p>
                  </div>
                </div>
                <div class="image"> <img src="images/westlife.jpg"> </div>
              </div>
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>&apos;Johnny Alegre Affinity&apos;</h2>
                    <p>The Johnny Alegre AFFINITY is a jazz group originating from the Philippines.<br>It is led by self-taught Philippine guitarist-composer Johnny Alegre, together with bassist Colby de la Calzada, drummer Koko Bermejo, pianist Elhmir Saison and saxophonist Tots Tolentino.<br> </p>
                  </div>
                </div>
                <div class="image"> <img src="images/j.jpg"> </div>
            </div>
                <div class="slider">
                    <div class="legend"></div>
                    <div class="content">
                      <div class="content-txt">
                        <h2>&apos;Saringhimig Singers&apos;</h2>
                        <p>The Philippine Saringhimig Singers classical band are a Filipino American choir based in San Francisco, California.<br> In the mid 1980s the choir was also known as the Camerata singers as they toured as a chamber choir throughout Europe.<br>The choir's maestro, George Gemora Hernandez, formed Saringhimig Singers in 1974 at the University of the Philippines</p>
                      </div>
                    </div>
                <div class="image"> <img src="images/Saringhimig-Singers.jpg"> </div>
              </div>
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>&apos;BTS&apos;</h2>
                    <p>Bts is kpop boy band from BigHit EntertainmentK-pop is a genre of pop music originating from South Korea.<br>The genre combines such Western pop music elements as hip-hop and rock with Korean traditions, and frequently involves dance routines and singing in Korean lyrics intermixed with some English.</p>
                  </div>
                </div>
                <div class="image"> <img src="images/bts-m.jpg"> </div>
              </div>
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>&apos;MYMP&apos;s</h2>
                    <p>M.Y.M.P. is an acoustic band from Quezon City, Philippines. They released their first album, Soulful Acoustic in 2003 and a double album, Beyond Acoustic which was a number six charting album, and number.</p>
                  </div>
                </div>
                <div class="image"> <img src="images/mymp.jpg"> </div>
              </div>
            </div>
            <hr>
            <div class="switch">
              <ul>
                <li>
                  <div class="on"></div>
                </li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
         </div>
	 </div>
            <div class="pagee">
            <img class="bottom" src="images/t.jpg" alt="">
            <div class="bottom-left">
                <h3>Find the music for you</h3>
                <h5>Right here, right now.</h5>
                <Link href="/mobile-devices"><button class="buttonn">GET IN TOUCH <i class="fa fa-arrow-right" aria-hidden="true"></i></button></Link>
            </div>
            <img class="bottom" src="images/o.png" alt="">
            <div class="bottom-right">
                <h3>The best Music Of all time . The feeling you get when the music touches your soul </h3>
                <Link href="/mobile-devices"><button class="buttonn2">GET IN TOUCH <i class="fa fa-arrow-right" aria-hidden="true"></i></button></Link>
            </div>
            </div>
<style scoped>
.buttonn2 {
    width: 150px;
    height: 40px;
    background-color: rgb(255, 255, 255);
    border-radius: 20px;
    font-size: 13px;
    margin-top: 15px;
    cursor: pointer;
    color: rgb(0, 0, 0);
    font-weight: bold;
    border: 0px;
}
.buttonn {
    width: 150px;
    height: 40px;
    background-color: rgb(0, 0, 0);
    border-radius: 20px;
    font-size: 13px;
    margin-top: 15px;
    cursor: pointer;
    color: rgb(255, 255, 255);
    font-weight: bold;
    border: 0px;
}
.buttonn:hover {
    padding-bottom: 5px;
    transform: scale(1.01);
}
.buttonn2:hover {
    padding-bottom: 5px;
    transform: scale(1.01);
}
.pagee {
    position: relative;
    color: white;
}
.bottom {
    width: 50%;
    height: 300px;
}
.bottom-right {
    width: 200px;
    position: absolute;
    bottom: 60px;
    right: 420px;
}
.bottom-left h3, h5 {
    color: black;
}
.bottom-left h3 {
    font-weight: bold;
    font-size: 21px;

}
.bottom-right h3 {
    font-size: 17px;
}
.bottom-left h5 {
    font-size: 18px;
}
.bottom-left {
    width: 250px;
    position: absolute;
    bottom: 60px;
    left: 50px;
}
/* Slider */
#slider{
  width:100%;
  height:450px;
  position:relative;
  overflow:hidden;
}
@keyframes load{
  from{right:-100%;}
  to{right:0;}
}
.slides{
  width:400%;
  height:100%;
  position:relative;
  -webkit-animation:slide 200s infinite;
  -moz-animation:slide 20s infinite;
  animation:slide 20s infinite;
}
.slider{
  width:25%;
  height:100%;
  float:right;
  position:relative;
  z-index:1;
  overflow:hidden;
}
.image{
  width:100%;
  height:100%;
}
.image img{
  width:100%;
  height:100%;
}

/* Legend */
.legend{
  border:450px solid transparent;
  border-left:700px solid rgba(2, 0, 115, 0.439);
  border-bottom:0;
  position:absolute;
  bottom:0;
}

/* Contents */
.content{
  width:100%;
  height:100%;
  position:absolute;
  overflow:hidden;
}
.content-txt{

  width:350px;
  height:100px;
  float:right;
  position:relative;
  top:200px;
  -webkit-animation:content-s 5s infinite;
  -moz-animation:content-s 5s infinite;
  animation:content-s 5s infinite;
}
.content-txt h2{
  font-family:Arial;
  font-size:28px;
  background-color: rgb(165, 219, 233);
  color:rgb(12, 12, 12);
  text-align:left;
  margin-left:20px;
  padding-bottom:10px;
}
.content-txt p{
  font-family:arial;
  font-weight:normal;
  font-size:14px;
  font-weight: bold;
  background-color: rgb(165, 219, 233);
  color:rgb(12, 12, 12);
  text-align:left;
  margin-left:20px;
}

/* Switch */
.switch{
  width:120px;
  height:10px;
  position:absolute;
  bottom:50px;
  z-index:99;
  right:30px;
  margin-right: 45%;
  margin-bottom: -30px;
}
.switch > ul{
  list-style:none;
}
.switch > ul > li{
  width:10px;
  height:10px;
  border-radius:50%;
  background:rgb(13, 0, 128);
  float:right;
  margin-right:5px;
  cursor:pointer;
}
.switch ul{
  overflow:hidden;
}
.on{
  width:100%;
  height:100%;
  border-radius:50%;
  background:#3654ff;
  position:relative;
  -webkit-animation:on 30s infinite;
  -moz-animation:on 30s infinite;
  animation:on 20s infinite;
}

/* Animation */
@-webkit-keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}
@-moz-keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}
@keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}

@-webkit-keyframes content-s{
  0%{left:-420px;}
  10%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}
@-moz-keyframes content-s{
  0%{left:-420px;}
  10%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}
@keyframes content-s{
  0%{left:-420px;}
  10%{left:20px;}
  15%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}

@-webkit-keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

@-moz-keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

@keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

</style>

{{--


    <title>Music bar Midterm | Home</title>
    <div class="rt-container">
    	<div class="col-rt-12">
  <!-- Slider -->
          <div id="slider">
            <div class="slides">
                <div class="slider">
                    <div class="legend"></div>
                    <div class="content">
                      <div class="content-txt">
                        <h2>WESTLIFE&apos;</h2>
                        <p>Westlife is an Irish pop vocal group formed in Dublin, Ireland in 1998. The group currently consists of members Shane Filan, Mark Feehily, Kian Egan, and Nicky Byrne. Brian McFadden was a member, until leaving in 2004. The group disbanded in 2012 after 14 years, later reuniting in 2018</p>
                      </div>
                    </div>
                    <div class="image"> <img src="images/westlife.jpg"> </div>
                  </div>
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>Saringhimig Singers&apos;</h2>
                    <p>The Philippine Saringhimig Singers classical band (magical wings of song) are a Filipino American choir based in San Francisco, California. In the mid 1980s the choir was also known as the Camerata singers as they toured as a chamber choir throughout Europe.The choir's maestro, George Gemora Hernandez, formed Saringhimig Singers in 1974 at the University of the Philippines together with the other students from the College of Musi</p>
                  </div>
                </div>
                <div class="image"> <img src="images/Saringhimig-Singers.jpg"> </div>
              </div>
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>Johnny Alegre Affinity&apos;</h2>
                    <p>The Johnny Alegre AFFINITY is a jazz group originating from the Philippines. It is led by self-taught Philippine guitarist-composer Johnny Alegre, together with bassist Colby de la Calzada, drummer Koko Bermejo, pianist Elhmir Saison and saxophonist Tots Tolentino. The ensemble first gathered in May 2002 at Manila’s Pink Noise Studios for Alegre’s composition, “Stones of Intramuros”, for inclusion in the jazz anthology CD, Adobo Jazz: A Portrait of the Filipino as a Jazz Artist, Vol. 1, and thereafter carried on as a working unit.</p>
                  </div>
                </div>
                <div class="image"> <img src="images/j.jpg"> </div>
              </div>
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>BTS&apos;</h2>
                    <p>Bts is kpop boy band from BigHit EntertainmentK-pop is a genre of pop music originating from South Korea. The genre combines such Western pop music elements as hip-hop and rock with Korean traditions, and frequently involves dance routines and singing in Korean lyrics intermixed with some English.</p>
                  </div>
                </div>
                <div class="image"> <img src="images/bts-m.jpg"> </div>
                </div>
                <div class="slider">
                    <div class="legend"></div>
                    <div class="content">
                      <div class="content-txt">
                        <h2>MYMP&apos;</h2>
                        <p>M.Y.M.P. is an acoustic band from Quezon City, Philippines. They released their first album, Soulful Acoustic in 2003 and a double album, Beyond Acoustic which was a number six charting album, and number.</p>
                      </div>
                    </div>
                <div class="image"> <img src="images/mymp.png"> </div>
              </div>
              <div class="slider">
                <div class="legend"></div>
                <div class="content">
                  <div class="content-txt">
                    <h2>Chicago&apos;</h2>
                    <p>Chicago is an American rock band formed in 1967 in Chicago, Illinois. They have recorded 38 albums, sold over 100,000,000 records .</p>
                  </div>
                </div>
                <div class="image"> <img src="images/chicago.jpg"> </div>
              </div>
            </div>
            <div class="switch">
              <ul>
                <li>
                  <div class="on"></div>
                </li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
            </div>
          </div>
         </div>
	 </div>
            <div class="pagee">
            <img class="bottom" src="images/t.jpg" alt="">
            <div class="bottom-left">
                <h3>Find the music for you</h3>
                <h5>Right here, right now.</h5>
                <Link href="pages/music-bar"><button class="buttonn">GET IN TOUCH <i class="fa fa-arrow-right" aria-hidden="true"></i></button></Link>
            </div>
            </div>
     <div class="pagee">
        <img class="bottom" src="images/o.png" alt="">
        <div class="bottom-left">
            <h3>Find the music for you</h3>
            <h5>Right here, right now.</h5>
            <Link href="pages/music-bar"><button class="buttonn">GET IN TOUCH <i class="fa fa-arrow-right" aria-hidden="true"></i></button></Link>
        </div>
        <img class="bottom" src="images/d.jpg" alt="">
        <div class="bottom-right">
            <h3>Music is your soul.</h3>
            <Link href="pages/bar-pages"><button class="buttonn2">GET IN TOUCH <i class="fa fa-arrow-right" aria-hidden="true"></i></button></Link>
        </div>
        </div>
 <hr>


<style scoped>
.buttonn2 {
    width: 150px;
    height: 40px;
    background-color: rgb(255, 255, 255);
    border-radius: 20px;
    font-size: 13px;
    margin-top: 15px;
    cursor: pointer;
    color: rgb(0, 0, 0);
    font-weight: bold;
    border: 0px;
}
.buttonn {
    width: 150px;
    height: 40px;
    background-color: rgb(0, 0, 0);
    border-radius: 20px;
    font-size: 13px;
    margin-top: 15px;
    cursor: pointer;
    color: rgb(255, 255, 255);
    font-weight: bold;
    border: 0px;
}
.buttonn:hover {
    padding-bottom: 5px;
    transform: scale(1.01);
}
.buttonn2:hover {
    padding-bottom: 5px;
    transform: scale(1.01);
}
.pagee {
    position: relative;
    color: white;
}
.bottom {
    width: 50%;
    height: 300px;
}
.bottom-right {
    width: 200px;
    position: absolute;
    bottom: 60px;
    right: 420px;
}
.bottom-left h3, h5 {
    color: rgb(251, 247, 247);
}
.bottom-left h3 {
    font-weight: bold;
    font-size: 21px;

}
.bottom-right h3 {
    font-size: 17px;
}
.bottom-left h5 {
    font-size: 18px;
}
.bottom-left {
    width: 250px;
    position: absolute;
    bottom: 60px;
    left: 50px;
}
/* Slider */
#slider{
  width:100%;
  height:450px;
  position:relative;
  overflow:hidden;
}
@keyframes load{
  from{left:-100%;}
  to{left:0;}
}
.slides{
  width:400%;
  height:100%;
  position:relative;
  -webkit-animation:slide 200s infinite;
  -moz-animation:slide 20s infinite;
  animation:slide 20s infinite;
}
.slider{
  width:25%;
  height:100%;
  float:left;
  position:relative;
  z-index:1;
  overflow:hidden;
}
.image{
  width:100%;
  height:100%;
}
.image img{
  width:100%;
  height:100%;
}

/* Legend */
.legend{
  border:450px solid transparent;
  border-left:700px solid rgba(2, 0, 115, 0.439);
  border-bottom:0;
  position:absolute;
  bottom:0;
}

/* Contents */
.content{
  width:100%;
  height:100%;
  position:absolute;
  overflow:hidden;
}
.content-txt{
  width:350px;
  height:150px;
  float:left;
  position:relative;
  top:200px;
  -webkit-animation:content-s 5s infinite;
  -moz-animation:content-s 5s infinite;
  animation:content-s 5s infinite;
}
.content-txt h2{
  font-family:Arial;
  font-size:35px;
  color:rgb(252, 252, 252);
  text-align:left;
  margin-left:30px;
  padding-bottom:10px;
}
.content-txt p{
  font-family:arial;
  font-weight:normal;
  font-size:18px;
  font-weight: bold;
  color:rgb(255, 255, 255);
  text-align:left;
  margin-left:30px;
}

/* Switch */
.switch{
  width:120px;
  height:10px;
  position:absolute;
  bottom:50px;
  z-index:99;
  left:30px;
  margin-left: 45%;
  margin-bottom: -30px;
}
.switch > ul{
  list-style:none;
}
.switch > ul > li{
  width:10px;
  height:10px;
  border-radius:50%;
  background:rgb(13, 0, 128);
  float:left;
  margin-right:5px;
  cursor:pointer;
}
.switch ul{
  overflow:hidden;
}
.on{
  width:100%;
  height:100%;
  border-radius:50%;
  background:#3654ff;
  position:relative;
  -webkit-animation:on 30s infinite;
  -moz-animation:on 30s infinite;
  animation:on 20s infinite;
}

/* Animation */
@-webkit-keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}
@-moz-keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}
@keyframes slide{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:-100%;
  }
  46%{
    margin-left:-100%;
  }
  50%{
    margin-left:-200%;
  }
  71%{
    margin-left:-200%;
  }
  75%{
    margin-left:-300%;
  }
  96%{
    margin-left:-300%;
  }
}

@-webkit-keyframes content-s{
  0%{left:-420px;}
  10%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}
@-moz-keyframes content-s{
  0%{left:-420px;}
  10%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}
@keyframes content-s{
  0%{left:-420px;}
  10%{left:20px;}
  15%{left:0px;}
  30%{left:0px;}
  40%{left:0px;}
  50%{left:0px;}
  60%{left:0px;}
  70%{left:0;}
  80%{left:-420px;}
  90%{left:-420px;}
  100%{left:-420px;}
}

@-webkit-keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

@-moz-keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

@keyframes on{
  0%,100%{
    margin-left:0%;
  }
  21%{
    margin-left:0%;
  }
  25%{
    margin-left:15px;
  }
  46%{
    margin-left:15px;
  }
  50%{
    margin-left:30px;
  }
  71%{
    margin-left:30px;
  }
  75%{
    margin-left:45px;
  }
  96%{
    margin-left:45px;
  }
}

</style>



{{--
<div class="">
    <h1 style="font-family:verdana; font-size:300%; text-align:center; color:#ffd500">Your Favorite Band</h1>
</div>

{{-- <style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
}
/* Add rounded corners to the top left and the top right corner of the image */
.card {
  border-radius: 5px 5px 0 0;
}
</style> --}}
{{--
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 380px;" src="image/rocksong.png" alt="Third slide">
      </div>
      <div class="carousel-item active">
          <img class="d-block w-100" style="height: 380px;" src="image/opmsong.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/rockband.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/jazz.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/mbsong.png" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/hiphop.png" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/classical.png" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/kpop.png" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/chicago.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/AirSupply.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/lovesongcover.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <script>

  </script>
 --}}

{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
        <img class="d-block w-100" style="height: 380px;" src="image/a1band.jpg" alt="eleven slide">
      </div>
      <div class="carousel-item active">
          <img class="d-block w-100" style="height: 380px;" src="image/air.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/rockband.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/jazz.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/j.jpg" alt="fourth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/hiphop.png" alt="fifth slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/classical.png" alt="six slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/kpop.png" alt="seven slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/chicago.jpg" alt="eight slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="image/west.jpg" alt="nine slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" style="height: 380px;" src="images/truefaith.jpg" alt="ten slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> --}} --}} --}}
