<?php
    if ($_GET['page'] == '')
        echo '<nav id="nav-header" class="navbar navbar-default navbar-fixed-top" role="navigation">';
    else
        echo '<nav id="nav-header-int" class="navbar navbar-default navbar-fixed-top" role="navigation">';
?>

      <div class="container-fluid">

          <!--<div class="navbar-fixed-top navbar-top col-md-12">
              <div class="container-fluid">
                  <a href="mailto:ufrgsmun@ufrgs.br" alt="Enviar e-mail"><i class="fa fa-envelope fa-lg"></i></a>
                  <a href="https://www.youtube.com/ufrgsmun" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
                  <a href="https://plus.google.com/112578532170821947016" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                  <a href="https://www.facebook.com/ufrgsmun" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                  <a href="https://twitter.com/ufrgsmun" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
              </div>
          </div>-->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php
                if ($_GET['page'] == '')
                    echo '<a class="navbar-brand" href="index.php"><img src="images/logo_brand.png" width="80px"/></a>';
                else
                    echo '<a class="navbar-brand" href="index.php"><img src="images/logo_color.png" width="120px"/></a>';
            ?>
          </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active" id="home-link"><a href="index.php"></a></li>
                <li class="dropdown">
                    <a href="?page=about" class="dropdown-toggle" data-toggle="dropdown">
                        About Us <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=about&section=mun">What is a MUN?</a></li>
                        <li><a href="?page=about&section=meet">Meet Us</a></li>
                        <li><a href="?page=about&section=history">Our History</a></li>
                        <li><a href="?page=about&section=partners">Sponsors</a></li>
                        <li><a href="?page=about&section=projects">Partner Projects</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="?page=conference" class="dropdown-toggle" data-toggle="dropdown">
                        Conference <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <!--
                        <li><a href="?page=about&section=meet">Calendar</a></li>
                        <li><a href="?page=about&section=social">Social Events</a></li>
                        <li><a href="?page=conference&section=invitation">Invitation Letter</a></li>-->
                        <li><a href="?page=conference&section=policies">General Policies</a></li>
                        <li><a href="?page=conference&section=feesanddates">Fees and Dates</a></li>
                        <li><a href="?page=conference&section=schedule">Schedule</a></li>
                        <li><a href="?page=conference&section=location">Location</a></li>
                        <li><a href="?page=conference&section=accommodation">Accommodation</a></li>
                        <!--
                        <li><a href="?page=conference&section=socialevents">Social Events</a></li>-->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="?page=apply" class="dropdown-toggle" data-toggle="dropdown">
                        Apply <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <!--
                        <li><a href="#">Fees and dates</a></li>
                        <li><a href="#">Payment</a></li>-->
                        <li><a href="?page=apply&section=register">How to register</a></li>
                        <!--<li><a href="?page=apply&section=infographic">Quick Guide</a></li>-->
                        <li><a href="?page=apply&section=countries">Country Matrix</a></li>
                        <!--<li><a href="?page=apply&section=payment">Payment</a></li>-->
                        <li><a href="?page=apply&section=formA">Form A</a></li>
                        <li><a href="?page=apply&section=formB">Form B</a></li>
                        <li><a href="?page=apply&section=formIlc">ILC Form</a></li>
                        <li><a href="?page=apply&section=formIpc">IPC Form</a></li>
                    </ul>

                </li>
                <li class="dropdown">
                    <a href="?page=committees" class="dropdown-toggle" data-toggle="dropdown">
                        Committees <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=committees&section=apec">APEC</a></li>
                        <li><a href="?page=committees&section=cjtf">CJTF</a></li>
                        <li><a href="?page=committees&section=cosiplan">COSIPLAN</a></li>
                        <li><a href="?page=committees&section=disec">DISEC</a></li>
                        <li><a href="?page=committees&section=ilc">ILC</a></li>
                        <li><a href="?page=committees&section=ipc">IPC</a></li>
                        <li><a href="?page=committees&section=uacps">UACPS</a></li>
                        <li><a href="?page=committees&section=unhrc">UNHRC</a></li>
                        <li><a href="?page=committees&section=unsc">UNSC</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="?page=preparation" class="dropdown-toggle" data-toggle="dropdown">
                        Preparation <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=preparation&section=study">Study Guides</a></li>
                        <li><a href="?page=preparation&section=handbook">Handbook</a></li>
                        <li><a href="?page=preparation&section=paper">Position Paper</a></li>
                        <li><a href="?page=preparation&section=award">Award Policy</a></li>
                        <!--<li><a href="?page=preparation&section=procedures">Rules of Procedures</a></li>
                        <li><a href="?page=preparation&section=logistics">Logistics</a></li>
                        <li><a href="?page=preparation&section=easyHandbook">Easy Handbook</a></li>
                        <li><a href="?page=preparation&section=links">Useful links</a></li>-->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
