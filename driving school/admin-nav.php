<div class="container-fluid">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                    <li> <a href="admin-page.php"> <i class="fa fa-home" aria-hidden="true"></i> الرئيسية</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-building" aria-hidden="true"></i>  المدارس <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="add-school.php"><i class="fa fa-plus" aria-hidden="true"></i> إضافة مدرسة  </a>
                        </li>
                         <li>
                            <a href="show-schools.php"><i class="fa fa-eye" aria-hidden="true"></i>  عرض المدارس </a>
                        </li>
                    </ul>
                </li>
                 <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-files-o" aria-hidden="true"></i> النماذج <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-car" aria-hidden="true"></i> أسئلة تؤريا خصوصي </a>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-truck" aria-hidden="true"></i>  أسئلة تؤريا شحن خفيف </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bus" aria-hidden="true"></i> أسئلة تؤريا عمومي </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bicycle" aria-hidden="true"></i> أسئلة تؤريا دراجة نارية </a>                       
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-circle-o" aria-hidden="true"></i><i class="fa fa-circle-o fa-lg" aria-hidden="true"></i> أسْلة تؤريا تراكتور </a>
                        </li>
                    </ul>
                </li>
                <li> <a href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i>  الإشارات  </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-building" aria-hidden="true"></i> الادمن<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-cogs" aria-hidden="true"></i> تغيير الرقم السري </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> تسجيل الخروج</a>
                        </li>
                    </ul>
                </li>
             </ul>
            </div>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel"> تغيير الرقم السري </h4>
			</div> <!-- /.modal-header -->
	    	<div class="modal-body">
			 <form role="form" method="POST" action="changepassword.php">
			  <fieldset>
                  <div class="form-group input-group">
                    <span class="input-group-addon">
                     <i class="glyphicon glyphicon-lock"></i>
                    </span>
                   <input type="password" data-minlength="6" class="form-control"  name="oldpassword" id="inputPassword" placeholder="الرقم السري القديم" required>
                 </div>
                  <div class="form-group input-group">
                      <span class="input-group-addon">
                         <i class="glyphicon glyphicon-lock"></i>
                      </span>
                    <input type="password" data-minlength="6" class="form-control" name="newpassword1" id="password" placeholder="الرقم السري الجديد" required>
                 </div>
                 <div class="form-group input-group">
                      <span class="input-group-addon">
                         <i class="glyphicon glyphicon-lock"></i>
                      </span> 
                      <input type="password" class="form-control" id="confirmPassword" name="newpassword2" placeholder="تأكيد الرقم السري الجديد" required>
                     <div class="help-block with-errors"></div>
                 </div>
                 <div class="form-group">
                      <p class="help-block">
                      <a class="pull-right text-muted" href="#" id="olvidado"><small> هل نسيت الرقم السري؟ </small></a> </p>
                </div>
           </fieldset>
                  <div class="modal-footer">
		               <button class="form-control btn btn-primary" name="changepassword" type="submit">تسجيل الدخول</button>
                   </div> <!-- /.modal-footer -->
	       </form>
         </div> <!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
            <!-- /.navbar-collapse -->
    </nav>