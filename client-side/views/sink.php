<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kitchen Sink (HTML/CSS)</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <link type="text/css" rel="stylesheet" href="/siv-v3/assets/css/reset.css"/>
    <link type="text/css" rel="stylesheet/less" href="/siv-v3/assets/css/less/bootstrap/bootstrap.less"/>
    <link type="text/css" rel="stylesheet/less" href="/siv-v3/assets/css/less/twine.less"/>
    <link type="text/css" rel="stylesheet" href="/siv-v3/assets/css/siv.jquery-ui.css"/>
    <link type="text/css" rel="stylesheet" href="/siv-v3/assets/css/leaflet.css"/>
    <link type="text/css" rel="stylesheet" href="/siv-v3/assets/css/leaflet.draw.css"/>
    <link type="text/css" rel="stylesheet" href="/siv-v3/assets/css/MarkerCluster.css"/>
    <link type="text/css" rel="stylesheet" href="/siv-v3/assets/css/MarkerCluster.Default.css"/>

    <style>
        body, html {
            overflow: auto !important;
        }
    </style>

</head>
<body style="overflow: auto;">

<div class="container">
<div class="row">
<div class="span-12">


<h1>Kitchen Sink</h1>

<table class="table table-bordered">

<?php include("sink/typography.php"); ?>
<?php include("sink/buttons.php"); ?>
<?php include("sink/toolbar.php"); ?>
<?php include("sink/tour_window.php"); ?>
<?php include("sink/grid.php"); ?>
<?php include("sink/notifications_list.php"); ?>
<?php include("sink/modal.window.php"); ?>


</table>

</div>
</div>
</div>


<!--[if gte IE 9 ]>
<script src="app/vendor/es5-shim.min.js"></script>
<script src="app/vendor/es5-sham.min.js"></script>
<![endif]-->

<!--[if gte IE 9 ]>
<script src="app/vendor/aight.min.js"></script>
<script src="app/vendor/aight.d3.min.js"></script>
<![endif]-->

<script type="text/javascript">
    less = {
        env: "development" // or "production"
    };
</script>
<!-- build:js build/main.js -->
<!-- endbuild -->
<script type="text/javascript" src="/siv-v3/app/vendor/raphael-min.js"></script>
<script type="text/javascript" src="/siv-v3/app/vendor/less-1.5.0.min.js"></script>


</body>
</html>
