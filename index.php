<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Quản lý file</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-dark-outline tabs-panel">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs pull-left type-document">
                                <li class="active"><a data-toggle="tab" href=".documents-panel" aria-expanded="true"> <i class="fa fa-file"></i> Documents</a></li>
                                <li class=""><a data-toggle="tab" href=".images-panel" aria-expanded="false"><i class="fa fa-file-image-o"></i> Images </a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="panel-body tab-content">
                            <div class="tab-pane active documents-panel">
                                <a class="label label-success  label-left" href="#">Excel</a>
                                <a class="label label-info label-left" href="#">Word</a> 
                                <a class="label label-warning label-left" href="#">Powerpoint</a>
                                <a class="label label-danger label-left" href="#">PDF</a>
                                <a class="label label-dark label-left" href="#">Video</a>
                                <div class="clear"></div>
                                <div class="v-spacing-xs"></div>
                                <h4 class="no-margin-top"> Folders</h4>
                                <ul class="folders list-unstyled">
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Web projects
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Presentation files
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Books
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Contest
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Our Projects
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Our Music
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Messenger sounds
                                        </a>
                                    </li>
                                </ul>
                                <div class="v-spacing-xs"></div>
                                <a class="btn btn-block btn-success"> <i class="fa fa-plus"> </i> Upload</a>
                            </div>
                            <div class="tab-pane images-panel">
                             <h4 class="no-margin-top"> Folders</h4>
                                <ul class="folders list-unstyled">
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> April meeting
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Application presentation
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Staff profile pictures
                                        </a>
                                    </li>
                                    <li> 
                                        <a href="#">
                                            <i class="fa fa-folder"></i> Trip to Yosemite
                                        </a>
                                    </li>
                                </ul>
                                <div class="v-spacing-xs"></div>
                                <a class="btn btn-block btn-success"> <i class="fa fa-plus"> </i> Upload</a>
                            </div>
                        </div>
                    </div>
                    <a href="http://localhost:81/project/admin/login.php">Đăng nhập</a>
                </div>
                <div class="col-sm-8 tab-content no-bg no-border">
                    <div class="tab-pane active documents documents-panel">
                        <div class="document success">
                            <div class="document-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Excel database 2019 </span>
                                <span class="document-description"> 1.2 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Excel database 2016 </span>
                                <span class="document-description"> 1.1 MB </span>
                            </div>
                        </div>
                        <div class="document info">
                            <div class="document-body">
                                <i class="fa fa-file-word-o text-info"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Word file 2017 </span>
                                <span class="document-description"> 932 KB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <i class="fa fa-file-word-o text-info"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Word file 2016 </span>
                                <span class="document-description"> 426 MB </span>
                            </div>
                        </div>
                        <div class="document warning">
                            <div class="document-body">
                                <i class="fa fa-file-powerpoint-o text-warning"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Presentation 2017 </span>
                                <span class="document-description"> 2.7 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <i class="fa fa-file-powerpoint-o text-warning"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Presentation 2016 </span>
                                <span class="document-description"> 1.9 MB </span>
                            </div>
                        </div>
                        <div class="document danger">
                            <div class="document-body">
                                <i class="fa fa-file-pdf-o text-danger"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> PDF file 2017 </span>
                                <span class="document-description"> 5.3 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <i class="fa fa-file-pdf-o text-danger"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> PDF file 2016 </span>
                                <span class="document-description"> 4.4 MB </span>
                            </div>
                        </div>
                        <div class="document dark">
                            <div class="document-body">
                                <i class="fa fa-file-video-o text-dark"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name text-dark"> Video file 2017 </span>
                                <span class="document-description"> 18.2 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <i class="fa fa-file-video-o text-dark"></i>
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Video file 2016 </span>
                                <span class="document-description"> 23.7 MB </span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane documents images-panel">
                        <div class="document">
                            <div class="document-body">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Forest.png </span>
                                <span class="document-description"> 1.2 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Developer.png </span>
                                <span class="document-description"> 2.5 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png">
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Meeting.png </span>
                                <span class="document-description"> 1.1 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png">
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Hiking.png </span>
                                <span class="document-description"> 3.5 MB </span>
                            </div>
                        </div>
                        <div class="document">
                            <div class="document-body">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
                            </div>
                            <div class="document-footer">
                                <span class="document-name"> Developers meeting.png </span>
                                <span class="document-description"> 862 KB </span>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>

<style type="text/css">
body{
    margin-top:20px;
    background:#eee;
}

.type-document{
    width:100%; 
    margin-bottom:20px;
}

.documents {
    padding:20px;    
}

.tabs {
  margin-bottom: 20px;
}

.tabs .nav-tabs {
  border-bottom: 1px solid #dce2e9;
}

.tabs .nav-tabs > li > a {
  font-size: 15px;
  padding: 10px 20px;
}

.tabs .nav-tabs > li.active > a {
  border: 1px solid #dce2e9;
  border-bottom-color: #fff;
}

.tabs-panel .panel-heading {
  padding: 3px 10px 2px 10px;
}

.tabs-panel .panel-heading > .nav.nav-tabs {
  padding: 0;
}

.tabs-panel .panel-heading:after {
  padding-bottom: 3px;
}

.tabs-panel .panel-heading .panel-options {
  margin-top: 10px;
}
.tabs-panel .panel-body {
  padding: 20px 15px 15px 15px;
  font-size: 14px;
}

.tabs-panel .nav-tabs {
  border: none;
}

.tabs-panel .nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}

.tabs-panel .nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  font-weight: 600;
  font-size: 15px;
  color: #555;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}

.tabs-panel .nav-tabs > li > a > i {
  font-size: 13px;
  margin-right: 2px;
}

.tabs-panel .nav-tabs > li > a:hover {
  border-color: #eee #eee #ddd;
  background-color: rgba(0,0,0,0);
  border: 1px solid rgba(0,0,0,0);
  color: #000;
}

.tabs-panel .nav-tabs > li.active > a,
.tabs-panel .nav-tabs > li.active > a:hover,
.tabs-panel .nav-tabs > li.active > a:focus {
  color: #4a4d56;
  cursor: default;
  background-color: inherit;
  border: none;
  border-bottom-color: transparent;
}

.tabs-panel .nav-tabs > li.active > a:after,
.tabs-panel .nav-tabs > li.active > a:hover:after,
.tabs-panel .nav-tabs > li.active > a:focus:after {
  display: block;
  position: absolute;
  width: calc(100% - 4px);
  left: 2px;
  content: "";
  padding-bottom: 12px;
  border-bottom: 4px solid #314557;
}

.tabs-panel .tab-content {
  background-color: #fff;
  border: none;
}

.tabs-panel.panel-success .panel-heading:after,
.tabs-panel.panel-info .panel-heading:after,
.tabs-panel.panel-danger .panel-heading:after,
.tabs-panel.panel-warning .panel-heading:after,
.tabs-panel.panel-dark .panel-heading:after {
  display: none;
}

.tabs-panel.panel-success-outline .nav-tabs > li.active > a:after,
.tabs-panel.panel-success-outline .nav-tabs > li.active > a:hover:after,
.tabs-panel.panel-success-outline .nav-tabs > li.active > a:focus:after {
  border-bottom: 4px solid #0ec8a2;
}

.tabs-panel.panel-info-outline .nav-tabs > li.active > a:after,
.tabs-panel.panel-info-outline .nav-tabs > li.active > a:hover:after,
.tabs-panel.panel-info-outline .nav-tabs > li.active > a:focus:after {
  border-bottom: 4px solid #2da9e9;
}

.tabs-panel.panel-warning-outline .nav-tabs > li.active > a:after,
.tabs-panel.panel-warning-outline .nav-tabs > li.active > a:hover:after,
.tabs-panel.panel-warning-outline .nav-tabs > li.active > a:focus:after {
  border-bottom: 4px solid #ff9e2a;
}

.tabs-panel.panel-danger-outline .nav-tabs > li.active > a:after,
.tabs-panel.panel-danger-outline .nav-tabs > li.active > a:hover:after,
.tabs-panel.panel-danger-outline .nav-tabs > li.active > a:focus:after {
  border-bottom: 4px solid #f95858;
}

.tabs-panel.panel-success .panel-heading .nav.nav-tabs > li > a,
.tabs-panel.panel-info .panel-heading .nav.nav-tabs > li > a,
.tabs-panel.panel-danger .panel-heading .nav.nav-tabs > li > a,
.tabs-panel.panel-warning .panel-heading .nav.nav-tabs > li > a,
.tabs-panel.panel-dark .panel-heading .nav.nav-tabs > li > a {
  color: #fff;
}

.tabs-panel.panel-success .panel-heading li.active > a:after,
.tabs-panel.panel-success .panel-heading li.active > a:hover:after,
.tabs-panel.panel-success .panel-heading li.active > a:focus:after {
  display: block;
  margin: 0 auto;
  width: 18px;
  height: 18px;
  background-color: #0ec8a2;
  transform: rotate(45deg);
  border: none;
  margin-top: 4px;
  left:40%;
}

.tabs-panel.panel-info .panel-heading li.active > a:after,
.tabs-panel.panel-info .panel-heading li.active > a:hover:after,
.tabs-panel.panel-info .panel-heading li.active > a:focus:after {
  display: block;
  margin: 0 auto;
  width: 18px;
  height: 18px;
  background-color: #2da9e9;
  transform: rotate(45deg);
  border: none;
  margin-top: 4px;
  left:40%;
}

.tabs-panel.panel-warning .panel-heading li.active > a:after,
.tabs-panel.panel-warning .panel-heading li.active > a:hover:after,
.tabs-panel.panel-warning .panel-heading li.active > a:focus:after {
  display: block;
  margin: 0 auto;
  width: 18px;
  height: 18px;
  background-color: #ff9e2a;
  transform: rotate(45deg);
  border: none;
  margin-top: 4px;
  left:40%;
}

.tabs-panel.panel-danger .panel-heading li.active > a:after,
.tabs-panel.panel-danger .panel-heading li.active > a:hover:after,
.tabs-panel.panel-danger .panel-heading li.active > a:focus:after {
  display: block;
  margin: 0 auto;
  width: 18px;
  height: 18px;
  background-color: #f95858;
  transform: rotate(45deg);
  border: none;
  margin-top: 4px;
  left:40%;
}

.tabs-panel.panel-dark .panel-heading li.active > a:after,
.tabs-panel.panel-dark .panel-heading li.active > a:hover:after,
.tabs-panel.panel-dark .panel-heading li.active > a:focus:after {
  display: block;
  margin: 0 auto;
  width: 18px;
  height: 18px;
  background-color: #314557;
  transform: rotate(45deg);
  border: none;
  margin-top: 4px;
  left:40%;
}

.nav-tabs {
  border-bottom: 1px solid #98a3af;
}

.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
  opacity: 0.5;
}

.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  font-weight: 600;
  font-size: 16px;
  color: #555;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eee #eee #ddd;
  background-color: rgba(0,0,0,0);
  border: 1px solid rgba(0,0,0,0);
  color: #000;
}

.nav-tabs > li.active {
  opacity: 1;
}

.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555;
  cursor: default;
  background-color: #fff;
  border: 1px solid #dce2e9;
  border-bottom-color: transparent;
}

.tabs-panel .nav-tabs > li.active > a,
.tabs-panel .nav-tabs > li.active > a:hover,
.tabs-panel .nav-tabs > li.active > a:focus {
  margin-top: -1px;
  border: 1px solid rgba(0,0,0,0) !important;
  border-bottom: none;
}

.tab-content {
  background-color: #fff;
  border: 1px solid #dce2e9;
  border-radius: 4px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  border-top: none;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}

.nav-tabs.nav-justified > li {
  float: none;
}

.nav-tabs.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}

.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}

.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}

.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #dce2e9;
}

@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }

  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
    border-bottom: 1px solid #98a3af;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}

@media (max-width: 767px) {
  .nav-justified > li > a {
    border: 1px solid #98a3af;
  }

  .nav-justified + .tab-content {
    border: 1px solid #dce2e9;
  }
}

.document {
  float: left;
  width: calc(33% - 20px);
  max-width: 240px;
  margin: 0px 10px 20px;
  background-color: #fff;
  border-radius: 3px;
  border: 1px solid #dce2e9;
}

.document .document-body {
  height: 130px;
  text-align: center;
  border-radius: 3px 3px 0 0;
  background-color: #fdfdfe;
}

.document .document-body i {
  font-size: 45px;
  line-height: 120px;
}

.document .document-body img {
  width: 100%;
  height: 100%;
}

.document .document-footer {
  border-top: 1px solid #ebf1f5;
  height: 46px;;
  padding: 5px 12px;
  border-radius: 0 0 2px 2px;
}

.document .document-footer .document-name {
  display: block;
  margin-bottom: 0;
  font-size: 15px;
  font-weight: 600;
  width: 100%;
  line-height: normal;
  overflow-x: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.document .document-footer .document-description {
  display: block;
  margin-top: -1px;
  font-size: 11px;
  font-weight: 600;
  color: #8998a6;
  width: 100%;
  line-height: normal;
  overflow-x: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.document.info .document-footer >*, .document.success .document-footer >*,
.document.danger .document-footer >*, .document.warning .document-footer >*,
.document.dark .document-footer >* {
  color: #fff;
}

.document.info .document-footer {
  background-color: #2da9e9;
}

.document.success .document-footer {
  background-color: #0ec8a2;
}

.document.warning .document-footer {
  background-color: #ff9e2a;
}

.document.danger .document-footer {
  background-color: #f95858;
}

.document.dark .document-footer {
  background-color: #314557;
}

.folders {
  width: 100%;
}

.folders li {
  font-size: 14px;
  padding: 3px 4px 3px 12px;
}

.folders li a {
  text-decoration: none;
  color: #4a4d56;
}

.folders li a i {
  color: #5e6168;
  font-size: 16px;
  margin-right: 5px;
}

@media screen and (max-width: 600px) {
  .document  {
    width: 100%;
    margin: 5px 0;
    max-width: none;
  }
}


/* Drag and drop */

.dropzone {
  border: 2px dashed #cfdbe2;
  width: 100%;
  height: auto;
  text-align: center;
  border-radius: 5px;
  padding: 5%;
}

.dropzone-image {
  display: block;
  margin: 0 auto 5%;
  width: 100%;
  max-width: 190px;
  height: auto;
  opacity: 0.75;
}

.dropzone a.btn {
  padding: 9px 28px 8px;
}

.dropzone-thin {
  width: 100%;
}

.dropzone-thin .dropzone-image {
  min-width: 35px;
  width: 10%;
  max-width: 80px;
  display: inline-block;
  margin: 0 10px 0 0;
}

.dropzone-thin .dz-message > span {
  display: inline-block;
  vertical-align: middle;
  font-size: 15px;
  font-weight: 600;
}

.dz-preview {
  padding: 10px 0;
  border-bottom: 1px solid #edf2f4;
}

.dz-preview:nth-child(2) {
  margin-top: 30px;
}

.dz-preview:last-child {
  border-bottom: none;
}

.dz-image {
  display: inline-block;
}

.dz-image img {
  width: 50px;
  height: 50px;
  border-radius: 5px;
}

.dz-details {
  display: inline-block;
  width: calc(100% - 60px);
  text-align: left;
  vertical-align: middle;
  padding-left: 20px;
}

.dz-error-message {
  display: none;
}

.dz-success-mark, .dz-error-mark {
  display: none;
}

.dropzone:hover {
  background-color: #fbfdff;
  cursor: pointer;
}

.dropzone:hover .dropzone-image {
  opacity: 1;
}

.
</style>

<script type="text/javascript">

</script>
</body>
</html>