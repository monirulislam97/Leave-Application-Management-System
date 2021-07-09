<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Staff Main</title>
  <link rel="stylesheet" href="./css/staff_main1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
 
  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <h3>Main Page <span>Staffs</span></h3>
    </div>
    <div class="right_area">
      <button class="logout_btn" onclick="window.location.href='logout.php';"> Logout |<img src="./css/images/logout.png" alt="Italian Trulli"> </button>


    </div>
  </header>
  <!--sidebar start-->
  <div class="sidebar">
    <center>
      <img src="./css/images/user.png" class="profile_image" alt="">
      <h4><?php echo $_SESSION["USER"] ?> </h4>
    </center>
    <a href="update_info_form.php"><i class="fas fa-user"></i><span>Edit Profile</span></a>
    <a href="leave_form.php"><i class="fa fa-th"></i><span>Leave Form</span></a>
    <a href="result.php"><i class="fas fa-eye"></i><span>View Result</span></a>
    <a href="#"><i class="fas fa-list"></i><span>Work List</span></a>
    <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
    <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
  </div>
  <!--sidebar end-->


  <div class="content"></div>


<div class="nature">
  <h1>Like Nature Be Creative</h1>
  <p>
    Findings from this study show that nature does indeed have the capacity to enhance creativity.
    This study explains how nature has the ability to evoke the creative way of thinking by making us more curious,
    able to get new ideas as well as flexible in our way of thinking.
  </p>
  <button onclick="window.location.href='https://positivepsychologynews.com/news/cordele-glass/2020012440097';">More Info</button>

</div>
</body>

</html>