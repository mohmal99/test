<!-- Delete User Modal -->
<div class="modal fade" id="delete<?php  echo $userid;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!---<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="myModalLabel">حذف طالب</h4>
      </div>
      <div class="modal-body">
			<div class="alert alert-danger">
				
        هل تريد بالتأكيد حذف الطالب<span class="label-primary label label-default"><?php echo $fname." ".$familyname; ?></span> ؟
			</div>
			<div class="modal-footer">
			<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-remove icon-white"></i> لا</button>
			<a href="delete_user_query.php<?php echo '?user_id='.$userid; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-ok icon-white"></i> نعم</a>
			</div>
      </div>
    </div>
  </div>
</div>