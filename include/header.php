
<!DOCTYPE html>
<html lang="en">
<head>

	<?php include 'include/header-meta.php'; ?>

	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
	<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />

	<title> <?php echo $page_title ?> </title>

	<?php include 'include/header-links.php'; ?>

</head>

<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>

<?php if($page == "home"): ?>
<div id="bteb">
  <p>
    <img src="assets/images/bteb.png">
    <span>Approved by Bangladesh Technical Education Board. </span>
      &nbsp;
      <div>Institute Code: 50693</div>
  </p>
    <a id="close" class="" href="javascript:void();" onclick="javascript:closebteb();">X</a>
</div>
<?php endif; ?>

<!-- Header Top ==== -->
<header class="header rs-nav<?php echo ($page == "home")?" header-transparent":""; ?>">

<?php include 'include/top-bar.php'; ?>
<?php include 'include/nav-bar.php'; ?>

</header>
<!-- Header Top END -->

<!-- Content -->
<div class="page-content bg-white">
