<!--
SMART STATS IS A FREE SOFTWARE LICENSED UNDER GPLv3.0
DO NOT DISTRIBUTE IT TO ANYONE WITHOUT INCLUDING 
CREDITS TO THE OWNER OR A LINK BACK TO HIS WEBSITE

OFFICIAL REPO : GITHUB.COM/SMARTINCORP/SMARTSTATS
OFFICIAL WEBSITE : SMARTCLASHCOC.COM
-->
<?php require('scripts/init.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $server_Name; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Pace theme -->
  <link rel="stylesheet" href="plugins/pace/themes/pace-main.css" />
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    .pace-running > *:not(.pace) {
  display: none;
}
  </style>
</head>
<body class="hold-transition <?php echo $skin; ?> sidebar-mini">
  <div class="pace-hide-contents">

<?php include('views/head.php'); ?>
<?php include('views/status.php'); ?>
<?php include('views/foot.php'); ?>

</div>
<script src="plugins/pace/pace.js"></script>
</body>
</html>







