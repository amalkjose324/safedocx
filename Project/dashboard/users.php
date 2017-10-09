<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="../asset/icons/android-icon-192x192.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Secure, Varified and Faster Solution for Document Storage and Share">
  <meta name="keywords" content="SafeDoc, SafeDocx, Share documents, documents, Share doc, Docx">
  <meta name="author" content="SafeDocx">
  <title>SafeDocx : Secure Document Storage &amp; Share</title>

  <?php
  include_once '../db_connect.php';
  include_once 'check_logout.php';
  include_once 'profile_check.php';
  include_once 'sidemenu.php';
  $page=$_SESSION['user_page'];
  if($page<>'users.php'){
    header("location: $page");
  }
  ?>
  <?php
  include_once 'lobibox.php'; ?>

  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-block">
                    <div class="media">
                      <div class="media-body text-xs-left">
                        <h3 class="pink">28</h3>
                        <span>Toatal Documents</span>
                      </div>
                      <div class="media-right media-middle">
                        <i class="icon-bag2 pink font-large-2 float-xs-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-block">
                    <div class="media">
                      <div class="media-body text-xs-left">
                        <h3 class="teal">16</h3>
                        <span>Shared Links</span>
                      </div>
                      <div class="media-right media-middle">
                        <i class="icon-user1 teal font-large-2 float-xs-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-block">
                    <div class="media">
                      <div class="media-body text-xs-left">
                        <h3 class="deep-orange">24.89 %</h3>
                        <span>Space Usage</span>
                      </div>
                      <div class="media-right media-middle">
                        <i class="icon-diagram deep-orange font-large-2 float-xs-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-xs-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-block">
                    <div class="media">
                      <div class="media-body text-xs-left">
                        <h3 class="cyan">423</h3>
                        <span>Support Tickets</span>
                      </div>
                      <div class="media-right media-middle">
                        <i class="icon-ios-help-outline cyan font-large-2 float-xs-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="card doc-list">
              <?php
                $query=mysqli_query($con,"SELECT * FROM safedocx_docs,safedocx_doc_status,safedocx_doc_type WHERE doc_type=doc_type_id AND doc_status=doc_status_id AND doc_user_id=$user_id");
                while($row=mysqli_fetch_array($query)){
                  ?>
                  <div class="col-xl-2 col-md-3 col-sm-4 doc_items">
                    <img src="./images/docs/1.jpg" height="100px" width="100%" class="col-xl-12 doc_item_tumbanail">
                    <?php echo $row['doc_caption'];?>
                  </div>
                  <div class="col-xl-2 col-md-3 col-sm-4 doc_items">
                    <img src="./images/docs/1.jpg" height="100px" width="100%" class="col-xl-12 doc_item_tumbanail">
                    <?php echo $row['doc_caption'];?>
                  </div>
                  <div class="col-xl-2 col-md-3 col-sm-4 doc_items">
                    <img src="./images/docs/1.jpg" height="100px" width="100%" class="col-xl-12 doc_item_tumbanail">
                    <?php echo $row['doc_caption'];?>
                  </div>
                  <div class="col-xl-2 col-md-3 col-sm-4 doc_items">
                    <img src="./images/docs/1.jpg" height="100px" width="100%" class="col-xl-12 doc_item_tumbanail">
                    <?php echo $row['doc_caption'];?>
                  </div>
                  <div class="col-xl-2 col-md-3 col-sm-4 doc_items">
                    <img src="./images/docs/1.jpg" height="100px" width="100%" class="col-xl-12 doc_item_tumbanail">
                    <?php echo $row['doc_caption'];?>
                  </div>
                  <div class="col-xl-2 col-md-3 col-sm-4 doc_items">
                    <img src="./images/docs/1.jpg" height="100px" width="100%" class="col-xl-12 doc_item_tumbanail">
                    <?php echo $row['doc_caption'];?>
                  </div>
                  <div class="col-xl-2 col-md-3 col-sm-4 doc_items">
                    <img src="./images/docs/1.jpg" height="100px" width="100%" class="col-xl-12 doc_item_tumbanail">
                    <?php echo $row['doc_caption'];?>
                  </div>
                  <div class="col-xl-2 col-md-3 col-sm-4 doc_items">
                    <img src="./images/docs/1.jpg" height="100px" width="100%" class="col-xl-12 doc_item_tumbanail">
                    <?php echo $row['doc_caption'];?>
                  </div>
                  <div class="col-xl-2 col-md-3 col-sm-4 doc_items">
                    <img src="./images/docs/1.jpg" height="100px" width="100%" class="col-xl-12 doc_item_tumbanail">
                    <?php echo $row['doc_caption'];?>
                  </div>
                  <?php
                }
              ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
  </footer>

  <!-- BEGIN VENDOR JS-->

  <script src="vendors/js/ui/tether.min.js" type="text/javascript"></script>
  <script src="js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
  <script src="vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
  <script src="vendors/js/ui/unison.min.js" type="text/javascript"></script>
  <script src="vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
  <script src="vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
  <script src="vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
  <script src="vendors/js/extensions/pace.min.js" type="text/javascript"></script>
  <script src="../js/ajaxscripts.js"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="vendors/js/charts/chart.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN ROBUST JS-->

  <script src="js/core/app.js" type="text/javascript"></script>
  <!-- END ROBUST JS-->
  <!-- BEGIN PAGE LEVEL JS-->

  <script src="js/ajaxscripts.js"></script>
  <script src="js/popup.js"></script>
  <script src="js/core/app-menu.js" type="text/javascript"></script>
  <script>
  $(function(){
    $(document).attr("title", "New Title");
  });
  </script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>
