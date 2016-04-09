<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="Web for learning">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $title ?></title>

  <!--CSS-->
  <style>
  .caret.caret-up {
    border-top-width: 0;
    border-bottom: 4px solid #fff;
  }
  </style>

  <!--bootstap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="/css/style.css">

</head>
<body>
  <!--nav bar-->
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="/">NKR</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="/">หน้าหลัก</a>
          </li>

          <li>
            <a href="/news">ข่าวสาร</a>
          </li>

          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">สถานที่ท่องเที่ยว <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/farm">ฟาร์มโชคชัย</a></li>
              <li><a href="/market">ตลาดน้ำเขาใหญ่</a></li>
              <li><a href="/museum">เขาใหญ่อาร์ต มิวเซียม</a></li>
              <li><a href="/temple">วัดโนนกุ่ม</a></li>
              <li><a href="/spring">น้ำพุธรรมชาติ น้ำผุด ปากช่อง</a></li>
              <li><a href="/cliff">ผาเก็บตะวัน อ.วังน้ำเขียว</a></li>
              <li><a href="/waterfall">น้ำตกเหวสุวัต</a></li>
              <li><a href="/sanctuary">วิหารเทพวิทยาคม วัดบ้านไร่</a></li>
              <li><a href="/jim">จิมทอมสัน ฟาร์ม</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ที่พัก <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/ho1">ธัญญะปุระ บูติค รีสอร์ท</a></li>
              <li><a href="/ho2">เดอะ แกรนด์ เรสซิเดนซ์</a></li>
              <li><a href="/ho3">สบาย พาร์ค โฮเทล รีสอร์ท</a></li>
              <li><a href="/ho4">เมาน์เท่นครีก กอล์ฟ รีสอร์ท แอนด์ เรสซิเดนซ์</a></li>
            </ul>
          </li>


          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">อาหาร <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/food1">The Chocolate Factory</a></li>
              <li><a href="/food2">The Great Hornbill</a></li>
              <li><a href="/food3">ครัวเขาใหญ่</a></li>
              <li><a href="/food4">ยุ้งข้าว เขาใหญ่</a></li>
            </ul>
          </li>

          <li>
            <a href="/way">การเดินทาง</a>
          </li>

          <li>
            <a href="/contact">ติดต่อเรา</a>
          </li>
        </ul>
    </div>
  </div>
</nav>

  <!--content-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?= $content ?>
      </div>
    </div>
  </div>

  <!--footer-->
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
          Copyleft &copy; NKR
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
  <!-- Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <!--JS-->
  <script>
  $(document).ready(function(){
  $(".dropdown").on("hide.bs.dropdown", function(){
    $(".btn").html('Dropdown <span class="caret"></span>');
  });
  $(".dropdown").on("show.bs.dropdown", function(){
    $(".btn").html('Dropdown <span class="caret caret-up"></span>');
  });
  });
  </script>
</body>
</html>
