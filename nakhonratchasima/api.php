<?
use \google\appengine\api\mail\Message;
function router() {
  switch ($_GET["action"]) {
  case "contact":
    contact();
    break;
  }
}
router();
function contact() {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["email"] && $_POST["subject"] && $_POST["content"]) {
      $msg = new Message();
      $msg->setSender("saxlogo@hotmail.com");
      $msg->addTo("saxlogo@hotmail.com");
      $msg->setSubject("[nakhonratchasima-nkr] " . $_POST["subject"]);
      $msg->setTextBody($_POST["email"] . "\n\n" . $_POST["content"]);
      $msg->send();
    } else {
      http_response_code(422);
    }
  }
}
