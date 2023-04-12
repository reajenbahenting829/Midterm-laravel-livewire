<div id="wrapper">
<aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <h2 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 30px;">Music Bar</h2>
      </div>
      <ul class="sidebar-nav">
        <li class="active">
          <a href="/home"><i class="fa fa-home"></i>Home</a>
        </li>
        <li>
          <a href="/"><i class="fa fa-music"></i>Music</a>
        </li>
        <li>
          <a href="#"><div class="image"> <img src="images/rea.jpg" style="border-radius: 50%; width: 40px; height: 40px;">
            &nbsp;  &nbsp;User Profile</a>
        </li>
      </ul>
    </aside>


                    <!-- Centered link -->
     <div class="topnav">
        <div id="navbar-wrapper">
            <nav class="navbar navbar-inverse">
                <a href="#" class="navbar-brand" id="sidebar-toggle"><span class="material-icons">
                    sync_alt
                        </span>
                    </a>
                    <div class="topnav-left"
                     <div class="topnav-centered text-">
                        <h1 href="/home" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 30px;" class="active"><span class="material-icons">
                            </span>&nbsp;Welcome to my Music Bar</h1>
                        </div>

                        <!-- center-aligned links (default) -->
                        <a href="/" class="nav-link "><span class="material-icons">
                            account_circle
                            </span>&nbsp;</a>
                        </div>
                    </nav>
                </div>

                        <!-- Right-aligned links -->
                        {{-- <div class="topnav-right">
                           <a href="#"  class="nav-link"> <img src="images/rea.jpg" style="border-radius: 50%; width: 40px; height: 40px;">
                            &nbsp;User Profile</a>
                        </div> --}}



            {{-- <a class="navbar-brand ms-5 text-dark"
        style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 30px; ">
           MUSIC BAR</a>

            <div class=" btn btn-hover">
                <a class="nav-link " href="/home"><span class="material-icons">
                    home
                    </span></a></a>
            </div>
            <div class=" text-dark m-2 btn btn-hover">
                <a class="nav-link " href="/"><span class="material-icons">
                    library_music
                    </span></a></a>
            </div> --}}


    {{-- <section id="content-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="content-title">Test</h2>
            <p>Lorem ipsum...</p>
          </div>
        </div>
    </section> --}}

  </div>

  <script>
    $("#sidebar-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
  </script>
<style>
    /* Centered section inside the top navigation */
/* Add a black background color to the top navigation */
.topnav {
  position: relative;
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #0c0c0c;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #a73871;
  color: black;
}




/* Centered section inside the top navigation */
.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}
.topnav-left {
  float: left;
}

/* Responsive navigation menu - display links on top of each other instead of next to each other (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }

  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}
  body {
    padding-bottom: 30px;
    position: relative;
    min-height: 100%;
  }

  a {
    transition: background 0.2s, color 0.2s;
  }
  a:hover,
  a:focus {
    text-decoration: none;
  }

  #wrapper {
    padding-left: 0;
    transition: all 0.5s ease;
    position: relative;
  }

  #sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    overflow-x: hidden;
    background-color: #0c192c;
color: rgb(255, 255, 255);
    /* background: #222; */
    transition: all 0.5s ease;
  }

  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }

  .sidebar-brand {
    position: absolute;
    top: 0;
    width: 250px;
    text-align: center;
    padding: 20px 0;
  }
  .sidebar-brand h2 {
    margin: 0;
    font-weight: 600;
    font-size: 24px;
    color: #fff;
  }

  .sidebar-nav {
    position: absolute;
    top: 75px;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
  }
  .sidebar-nav > li {
    text-indent: 10px;
    line-height: 42px;
  }
  .sidebar-nav > li a {
    display: block;
    text-decoration: none;
    color: #757575;
    font-weight: 600;
    font-size: 18px;
  }
  .sidebar-nav > li > a:hover,
  .sidebar-nav > li.active > a {
    text-decoration: none;
    color: #fff;
    background: #ec207c;
  }
  .sidebar-nav > li > a i.fa {
    font-size: 24px;
    width: 60px;
  }

  #navbar-wrapper {
      width: 100%;
      position: absolute;
      z-index: 2;
  }
  #wrapper.toggled #navbar-wrapper {
      position: absolute;
      margin-right: -250px;
  }
  #navbar-wrapper .navbar {
    border-width: 0 0 0 0;
    background-color: #1cd6d0;
    font-size: 24px;
    margin-bottom: 0;
    border-radius: 0;
  }
  /* #navbar-wrapper .navbar a {
    color: #757575;
  } */
  #navbar-wrapper .navbar a:hover {
    color: #e33d66;
  }

  #content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
    top: 100px;
  }
  #wrapper.toggled #content-wrapper {
    position: absolute;
    margin-right: -250px;
  }

  @media (min-width: 992px) {
    #wrapper {
      padding-left: 250px;
    }

    #wrapper.toggled {
      padding-left: 60px;
    }

    #sidebar-wrapper {
      width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
      width: 60px;
    }

    #wrapper.toggled #navbar-wrapper {
      position: absolute;
      margin-right: -190px;
  }

    #wrapper.toggled #content-wrapper {
      position: absolute;
      margin-right: -190px;
    }

    #navbar-wrapper {
      position: relative;
    }

    #wrapper.toggled {
      padding-left: 60px;
    }

    #content-wrapper {
      position: relative;
      top: 0;
    }

    #wrapper.toggled #navbar-wrapper,
    #wrapper.toggled #content-wrapper {
      position: relative;
      margin-right: 60px;
    }
  }

  @media (min-width: 768px) and (max-width: 991px) {
    #wrapper {
      padding-left: 60px;
    }

    #sidebar-wrapper {
      width: 60px;
    }

  #wrapper.toggled #navbar-wrapper {
      position: absolute;
      margin-right: -250px;
  }

    #wrapper.toggled #content-wrapper {
      position: absolute;
      margin-right: -250px;
    }

    #navbar-wrapper {
      position: relative;
    }

    #wrapper.toggled {
      padding-left: 250px;
    }

    #content-wrapper {
      position: relative;
      top: 0;
    }

    #wrapper.toggled #navbar-wrapper,
    #wrapper.toggled #content-wrapper {
      position: relative;
      margin-right: 250px;
    }
  }

  @media (max-width: 767px) {
    #wrapper {
      padding-left: 0;
    }

    #sidebar-wrapper {
      width: 0;
    }

    #wrapper.toggled #sidebar-wrapper {
      width: 250px;
    }
    #wrapper.toggled #navbar-wrapper {
      position: absolute;
      margin-right: -250px;
    }

    #wrapper.toggled #content-wrapper {
      position: absolute;
      margin-right: -250px;
    }

    #navbar-wrapper {
      position: relative;
    }

    #wrapper.toggled {
      padding-left: 250px;
    }

    #content-wrapper {
      position: relative;
      top: 0;
    }

    #wrapper.toggled #navbar-wrapper,
    #wrapper.toggled #content-wrapper {
      position: relative;
      margin-right: 250px;
    }

  }
</style>
{{-- <nav class="hero">
<nav class="navbar navbar-expand-lg navbar p-0">

    <h1 class="navbar-brand ms-5 text-white"
    style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 30px;">
    MUSIC BAR</h1>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="topnav">
    <ul class="navbar-nav ms-5 ms-auto ">
        <li class="nav-item text-white m-2 btn btn-success btn btn-hover">
            <a class="nav-link text-white" href="/home">Home</a>
        </li>
        <li class="nav-item text-white m-2 btn btn-primary btn btn-hover">
            <a class="nav-link text-white" href="/">Music</a>
        </li>
    </ul>
</div>
</div>
</nav>
</nav> --}}


{{-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0c192c;
color: rgb(255, 255, 255);"> --}}
{{-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0c192c;
color: rgb(255, 255, 255);">
    <h1 class="py-2 text-white font-semibold hover:bg-indigo-900 px-2"href="" class="navbar-brand"    style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 30px;">MUSIC BAR</nav-link></h1>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="top">
        <ul class="navbar-nav wrapper flex justify-between ">
            <li class="nav-item text-white m-2 btn btn-success btn btn-hover">
                <a class="nav-link text-white" href="/home"><i class="fa fa-home" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item text-white m-2 btn btn-primary btn btn-hover">
                <a class="nav-link text-white" href="/"><i class="fa fa-music" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mr-3">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown text-warning"
              href="#"
              id=""
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false "> <div class="image"> <img src="images/rea.jpg" style="border-radius: 50%; width: 60px; height: 60px;">
              Profile
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" id="navbarSupportedContent">
                <div class="topnav">
                <ul class="navbar-nav ">
                    <li class="dropdown-item m-2 btn btn-success btn btn-hover">
                        <a class="nav-link text-warning" href="/home">Home</a>
                    </li>
                    <li class=" dropdown-item text-white m-2 btn btn-primary btn btn-hover">
                        <a class="nav-link text-warning" href="/">Music</a>
                    </li>
                </ul>
            </div>
        </div>
      </div>
    </div>
  </nav> --}}


{{-- <style>
 .topnav{
    background-color: #333;
    overflow: hidden;
    display: flex;
    justify-content: right;

    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #0c192c;
    box-shadow: 0 3px 5px 0 black;
 }

/* Change the color of links on hover */
 .topnav li:hover {
    background-color: #f81cc4;;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;

}

/* h1{
    padding: 18px 16px;
    text-decoration: none;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
        background-color:rgb(174, 7, 141);


         box-shadow: 0 3px 5px 0 black;
   hover: cubic-bezier(0.55, 0.055, 0.675, 0.19);
      border-radius: 4vh;
} */
.hero{
    align-items: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
    font-family: Arial, Helvetica, sans-serif;
        background-color:rgb(6, 0, 4);
         box-shadow: 0 4px 5px 0 #0c192c;
         box-shadow: 0 4px 5px 0 rgb(228, 11, 192);

}
</style> --}}
