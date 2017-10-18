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
  <link rel="stylesheet" href="./css/doc_item_card.css" type="text/css">
  <link rel="stylesheet" href="./css/jquery.contextMenu.css">

  <?php
  include_once '../db_connect.php';
  include_once 'check_logout.php';
  include_once 'profile_check.php';
  include_once 'sidemenu.php';
  $page=$_SESSION['user_page'];
  if($page<>'users.php'){
    header("location: $page");
  }
  $docx_dir=0;
  $query=mysqli_query($con,"SELECT * FROM safedocx_directory WHERE directory_user_id=$user_id AND directory_parent_id=0");
  while($row=mysqli_fetch_array($query)){
    $docx_dir=$row['directory_id'];
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
          <div class="row card-head">
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
                      <div class="col-xl-6 col-lg-6 col-xs-6 media-right media-middle add_rm" id="doc_add_btn">
                        <i class="icon-cloud-upload green font-large-1"><br></i>Upload
                      </div>
                      <div class="divider"></div>
                      <div class="col-xl-6 col-lg-6 col-xs-6 media-right media-middle add_rm" id="directory_add_btn">
                        <i class="icon-folder-plus red font-large-1"></i><br>Directory
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="doc-list-div" class="col-xl-12 col-md-12 col-sm-12">
            <div class="card doc-list">
              <?php
              $query1=mysqli_query($con,"SELECT * FROM safedocx_directory WHERE directory_user_id=$user_id AND directory_status=1 AND directory_parent_id=$docx_dir");
              $query2=mysqli_query($con,"SELECT * FROM safedocx_docs,safedocx_doc_status,safedocx_directory WHERE doc_directory_id=directory_id AND doc_status=doc_status_id AND doc_directory_id=$docx_dir AND directory_user_id=$user_id");
              while($row1=mysqli_fetch_array($query1)){
                ?>
                <div class="sd-directory flip-container col-xl-2 col-md-3 col-sm-4" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                    <div class="front">
                      <div class="media-center-folder">
                        <i style="color:#ff9933"class="icon-folder font-large-5 "></i>
                      </div>
                      <div style="height:100px;">
                        <p class="inner-flip"><?php echo $row1['directory_name'];?></p>
                      </div>
                    </div>
                    <div class="back">
                      <p class="inner-flip"><?php echo $row1['directory_description'];?></p>
                    </div>
                  </div>
                </div>
                <?php
              }
              while($row2=mysqli_fetch_array($query2)){
                ?>
                <div class="sd-document flip-container col-xl-2 col-md-3 col-sm-4" ontouchstart="this.classList.toggle('hover');">
                  <div class="flipper">
                    <div class="front">
                      <div class="media-center-file">
                        <i style="color:#3366cc; " class="icon-file-pdf-o font-large-4 "></i>
                      </div>
                      <div>
                        <p class="inner-flip"><?php echo $row2['doc_caption'];?></p>
                      </div>
                    </div>
                    <div class="back">
                      <p class="inner-flip"><?php echo $row2['doc_description'];?></p>
                    </div>
                  </div>
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

  <div class="cd-popup" id="doc_add_pop" role="alert">
    <div class="cd-popup-container pasvs-pop">
      <h3>Select Documents</h3>
      <hr>
      <form method="post" id="doc_add_form" onsubmit="return false">
        <div class="form-group ">
          <p>You can upload one or more documents/certificates, which should be in pdf format</p>
          <input class="form-control" type="file" id="multiDocx" name="files[]" multiple="multiple" accept="application/pdf"/>
          <span class="cd-error-message" id="docx_upload_error" >Invalid Password</span>
        </div>
        <input type="hidden" name="doc_directory_id" id="doc_directory_id" value="<?php echo $docx_dir;?>">
        <hr>
        <button id="upload-docx" class="btn btn-success" style="width:100%;">Upload</button>
        <a href="#0" class="cd-popup-close img-replace">Close</a>
      </div> <!-- cd-popup-container -->
    </form>
  </div> <!-- cd-popup -->


  <div class="cd-popup" id="add_directory_pop" role="alert">
    <div class="cd-popup-container pasvs-pop">
      <h3>Add New Directory</h3>
      <hr>
      <form method="post" id="directory_add_form" onsubmit="return false">
        <div class="form-group ">
          <input class="form-control" type="text" id="dir_name_add" placeholder="Directory Name" name="dir_name_add"/>
          <span class="cd-error-message" id="dir_name_add_error" >Invalid Name..!</span>
        </div>
        <div class="form-group ">
          <textarea class="form-control" id="dir_description_add" placeholder="Directory Description" name="dir_description_add"/></textarea>
          <span class="cd-error-message" id="dir_description_add_error" >Invalid Description..!</span>
        </div>
        <input type="hidden" name="directory_id" id="directory_id" value="<?php echo $docx_dir;?>">
        <hr>
        <input type="submit" class="btn btn-success" style="width:100%;" value="Create Directory">
        <a href="#0" class="cd-popup-close img-replace">Close</a>
      </div> <!-- cd-popup-container -->
    </form>
  </div> <!-- cd-popup -->
  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
  </footer>

  <!-- BEGIN VENDOR JS-->
  <script src="js/jquery.contextMenu.js"></script>
  <script src="js/jquery.ui.position.js"></script>
  <script src="js/context.js"></script>
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
