<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contract</title>
  <link href="./../../public/css/styles/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet"/>
  <script type="text/javascript" src="./../../public/js/scripts/main.js"></script>
</head>
<!-- Temp code  -->
<style>
#nav-temp ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333333;
}
#nav-temp li {
  float: left;
}
#nav-temp li a {
  display: block;
  color: white;
  text-align: center;
  /* margin: 10px; */
  padding: 12px;
  text-decoration: none;
}
#nav-temp li a:hover {
  background-color: #111111;
}
h5{
  margin : 1px;
}
/* Progress styles */
svg.radial-progress {
    height: auto;
    max-width: 200px;
    padding: 1em;
    transform: rotate(-90deg);
    width: 100%;
}
svg.radial-progress circle {
    fill: rgba(0,0,0,0);
    stroke: #fff;
    stroke-dashoffset: 219.91148575129; /* Circumference */
    stroke-width: 10;
}
svg.radial-progress circle.incomplete {
    opacity: 0.25;
}
svg.radial-progress circle.complete {
    stroke-dasharray: 219.91148575129; /* Circumference */
}
svg.radial-progress text {
    fill: #fff;
    font: 400 1em/1 'Oswald', sans-serif;
    text-anchor: middle;
}



/*** COLORS ***/
/* Primary */
svg.radial-progress:nth-of-type(6n+1) circle {
    stroke: #a2ed56;
}

/* Progress style ends */
/* Model style */
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 35%;
  top: 30%;
  width: 30%; /* Full width */
  height: 25%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* The Modal Close Button (x) */
.close {
  position: absolute;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

</style>
<!--  -->
<body>
<!--Top Bar--> 
<nav class="topbar">
  <ul class="topbar-nav">
    <li class="top-item">
      <a href="./../../index.php?logout=true" class="top-link">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg>
        <span class="top-link-text">Logout</span>
      </a>
    </li>
    <li class="top-item">
      <a href="../user/userNotificationPage.php" class="top-link">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" class="svg-inline--fa fa-bell fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path fill="currentColor" d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>
        </svg>
      </a>
    </li>
    <li class="top-item">
      <a href="./../user/userProfile.php" class="top-link">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" class="svg-inline--fa fa-user-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>
        <span class="top-link-text"><small>You are login as : <i><?php echo getUserAccessRoleByID($_SESSION['r_id']); ?></i></small><span>
      </a>
    </li>
  </ul>
</nav>
<!--End of Top Bar-->

<!--Navbar starts -->
<div class="container">
  <!-- <a class="" href="../dashboard.php">W3 DASHBOARD</a> -->
  <div id="nav-temp">
    <ul class="">
    <li class="">
        <a class="" href="./../dashboard.php">Dashboard</span></a>
      </li>
      <li class="">
        <a class="" href="./contractDashboard.php">Overview<span class="sr-only"></span></a>
      </li>
      <li class="">
        <a class="" href="./contractHome.php">Contract</a>
      </li>
      <li class="">
        <a class="" href="./quotationAdd.php">Quotation</a>
      </li>
      <li class="">
        <a class="" href="./activityHome.php">Activity</a>
      </li>
      <li class="">
        <a class="" href="./invoiceAdd.php">Invoice</a>
      </li>
    </ul>
  </div>
</div>
<!--Navbar ends  -->
<main>