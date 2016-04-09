<?
use \google\appengine\api\mail\Message;
$title = "Contact";

$msgAlert = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_POST["email"] && $_POST["subject"] && $_POST["content"]) {
    $msg = new Message();
    $msg->setSender("5610513050@psu.ac.th");
    $msg->addTo("5610513050@psu.ac.th");
    $msg->setSubject("[NKR] " . $_POST["subject"]);
    $msg->setTextBody($_POST["email"] . "\n\n" . $_POST["content"]);
    $msg->send();
    $msgAlert = <<<END
    <div class="alert alert-success">
      Your email has been sent.
    </div>
END;
  } else {
    $msgAlert = <<<END
    <div class="alert alert-warning">
      All fields are required.
    </div>
END;
  }
}
$content = <<<END
<div class="container">
  <div class="row" >
    <div class="col-lg-12">
<center><h1 class="page-header">ติดต่อเรา</h1></center>
  <ol class="breadcrumb">
    <li><a href="/">หน้าแรก</a></li>
    <li class="active">ติดต่อเรา</li>
  </ol>

{$msgAlert}
<form method="post">
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email"
      value="{$_POST["email"]}" />
  </div>
  <div class="form-group">
    <label>Subject</label>
    <input type="text" class="form-control" name="subject"
      value="{$_POST["subject"]}" />
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea class="form-control" rows="10" name="content">
      {$_POST["content"]}
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
</form>

    </div>
  </div>
</div>
END;
include __DIR__ . '/layouts/default.php';
