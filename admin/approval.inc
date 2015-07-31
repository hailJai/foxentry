<link href="_/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- <link href="_/css/admin_lte.css" rel="stylesheet"> -->
<div class="row">
<div class="col-md-12">
<a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Pending sign-up approvals.</strong></a>  
<p>Once you've approved the request, an email will be sent to the email for final confirmation.</p>
<hr>
<div class="box-body" style="background-color:#fff">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Student Number</th>
                        <th>Email Address</th>
                        <th>Date Signed</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php getPendingAccounts(); ?>                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Student Number</th>
                        <th>Email Address</th>
                        <th>Date Signed</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
</div>
</div><!-- /.row -->