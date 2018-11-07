
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Amazon Valid Email Checker</title>
        

        <meta name="author" content="Meiky Trickle Id">
        <meta name="css by" content="Charisma Template">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="icon" href="http://orig14.deviantart.net/a2fa/f/2017/143/7/5/villainous__black_hat_icon__red_yellow_compliment__by_fonyxion-dba7633.png">

        <!-- Stylesheets -->
        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">


        <!-- Bootstrap and CSS framework -->
        <link rel="stylesheet" href="https://usman.it/themes/charisma/css/bootstrap-cerulean.min.css">
    <link rel="stylesheet" href="demo.madebytilde.com/elephant-v1.4.0/theme-1/css/vendor.min.css">
    <link rel="stylesheet" href="demo.madebytilde.com/elephant-v1.4.0/theme-1/css/elephant.min.css">
    <link rel="stylesheet" href="demo.madebytilde.com/elephant-v1.4.0/theme-1/css/application.min.css">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">
        <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
        <script type="text/javascript" src="dist/sweetalert.min.js"></script>

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    <style type="text/css">
    body,
    html {
      height: 100%;
    }

    .m-splash-screen {
      background-color: #f2f3f8;
      position: absolute;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100%;
      width: 100%;
      z-index: 99999;
    }
  </style>
    </head>
    <body>
<br>
<br>
<br>
<br>
<br>
	<div class="row">
<div class="box col-md-12">
<div class="box-inner">
<div class="box-header well" data-original-title="">
  <div class="panel-head">
<h2><i class="fa fa-globe"></i> Amazon Valid Email Checker</h2>
<div>
					<div class="box-icon">
					<div class="panel-body">
					<textarea name="mailpass" id="mailpass" placeholder="email@domain.tld|password © NoobBisaApa Checker" class="form-control" rows="7"></textarea><br>
                     <input type="hidden" name="delim" id="delim" style="text-align: center;display:inline;width: 40px;margin-right: 8px;padding: 4px;" value="|" type="text" class="form-control">
                     <button type="button" class="btn btn-info" id="submit">Submit</button>
                     <button type="button" class="btn btn-danger" id="stop">Stop</button>&nbsp;

                     <div class="pull-right">
					<img id="loading">
					<span id="checkStatus" style="color:gray"></span>
        </div>
          </div>
        </div>
      </div>
    </div>
          </div> 
          <!-- Footer -->
            <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
                <div class="pull-right">
                    Coded <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="" target="_blank">Meiky Trickle Id</a> ( 2018 )
                </div>
                <div class="pull-left">
                    <a class="font-w600" color="red"><marquee>Thanks To .Alfattih./NoobBisaApaTeam./Sc0d3.</marquee></a>
                </div>
            </footer>
            <!-- END Footer -->
            <br>
				</div>   
      <div id="result" style="display: none;">
  
<div class="row">
      <div class="col-lg-11" style="margin: 0px auto;float:none;">  
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-check"></i> LIVE &nbsp;
                  <span class="label label-success" id="acc_live_count">0</span>
                  <span class="pull-right">
                    <button onclick="selectText('acc_live')" type="button" class="btn btn-xs btn-info"><i class="fa fa-copy"></i></button>
                    <button type="button" id="live_btn-hide" class="btn btn-xs btn-info"><i class="fa fa-minus"></i></button>
                  </span>
                </div>
                <div id="body_live" class="panel-body">
                  <div id="acc_live"></div>
                </div>
              </div>
            </div>
          </div> 
          <div class="row">
            <div class="col-lg-11" style="margin: 0px auto;float:none;"> 
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-window-close"></i> DIE &nbsp;
                  <span class="label label-danger" id="acc_die_count">0</span>
                  <span class="pull-right">
                    <button type="button" class="btn btn-xs btn-info" id="die_hide"><i class="fa fa-minus"></i></button>
                  </span>
                </div>
                <div id="body_hide_die" class="panel-body">
                  <div id="acc_die"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-11" style="margin: 0px auto;float:none;"> 
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-shield"></i> WRONG &nbsp;
                  <span id="wrong_count" class="label label-info">0</span>
                  <span class="pull-right">
                    <button type="button" id="wrong-btn-hide" class="btn btn-xs btn-info"><i class="fa fa-minus"></i></button>
                  </span>
                </div>
                <div id="wrong-body-hide" class="panel-body">
                  <div id="wrong"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-11" style="margin: 0px auto;float:none;">  
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-bolt"></i> BAD &nbsp;
                  <span class="label label-warning" id="bad_count">0</span>
                  <span class="pull-right">
                    <button type="button" id="btn-sock-hide" class="btn btn-xs btn-info"><i class="fa fa-minus"></i></button>
                  </span>
                </div>
                <div id="body-sock" class="panel-body">
                  <div id="acc_bad"></div>
                </div>
              </div>
            </div>
          </div>  
          <br>
          <br>
 <hr />
  
	<meta name="description" content="MBoCinemas">
	<link href="css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.chk.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="js/style.min.js"></script>
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="assets/js/core/jquery.appear.min.js"></script>
    <script src="assets/js/core/jquery.countTo.min.js"></script>
    <script src="assets/js/core/jquery.placeholder.min.js"></script>
    <script src="assets/js/core/js.cookie.min.js"></script>
    <script src="assets/js/app.js"></script>


</body>
</html>