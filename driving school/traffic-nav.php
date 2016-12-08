  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">إسم السيستم</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li > <a href="traffic-main.php"> <i class="fa fa-home" aria-hidden="true"></i> الرئيسية</a></li>
                       <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users" aria-hidden="true"></i> الطلاب <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>
                            <a href="students-intraffic-theoretical.php"><i class="fa fa-laptop" aria-hidden="true"></i> الطلاب للإمتحان النظري </a>
                        </li>
                        <li>
                            <a href="students-intraffic-practical.php"><i class="fa fa-car" aria-hidden="true"></i> الطلاب للإمتحان العملي</a>
                        </li>
                    </ul>
                </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-building" aria-hidden="true"></i> دائرة السير في <?php echo $_SESSION['trafficname']; ?> 
                       <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> تغيير الرقم السري </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> تسجيل الخروج</a>
                        </li>
                    </ul>
                </li>
             </ul>
            </div>
    </nav>