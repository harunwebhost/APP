<?php require_once('../webtemplate/headtags.php'); ?>
<?php require_once('../webtemplate/header_nav.php'); ?>
<?php require_once('../webtemplate/side_navigation.php'); ?>        

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
    <?php require_once('../webtemplate/breadcrumb.php'); ?>     
     <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload Lead</div>
                    <div class="panel-body">
                        <div class="col-md-6 col-md-offset-2">
                            <form role="form" action="load_leads.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                    <label>File input</label>
                                    <input type="file" name="uplaod">
                                     <p class="help-block">Upload CSV file Here</p>
                                </div>
                                  <button type="submit" class="btn btn-primary"  name="submit" id="upload_leads">Submit</button>
                            </form>
                            </div>
                           
                        
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->    
                                
    </div>  <!--/.main-->

<?php require_once('../webtemplate/footer.php'); ?> 