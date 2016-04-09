<?
use \google\appengine\api\mail\Message;
$title = "Contact";

$content = <<<END

<div class="container">
  <div class="row" >
    <div class="col-lg-12">
      <center><h1 class="page-header">ติดต่อเรา</h1></center>
      <ol class="breadcrumb">
      <li><a href="/">หน้าแรก</a></li>
        <li class="active">ติดต่อเรา</li>
      </ol>

<div class="alert alert-success hidden">
  Your email has been sent.
</div>
<div class="alert alert-warning hidden">
  All fields are required.
</div>
<form id="contact-form">
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" id="email" />
  </div>
  <div class="form-group">
    <label>Subject</label>
    <input type="text" class="form-control" id="subject" />
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea class="form-control" rows="10" id="content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary btn-lg"
      id="contact-form-button">
    Submit
  </button>
  <div id="spinner" class="hidden">
    <i class="fa fa-spinner fa-spin fa-3x"></i>
  </div>
</form>

    </div>
  </div>
</div>
END;
include __DIR__ . '/layouts/default.php';
