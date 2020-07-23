<?php
// define variables and set to empty values
$title = $author = $body = $created_at = "";
$titleError = $authorError = $bodyError = $created_atError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['title'])) {
        $titleError = "title is required";
    } else {
        $title = test_input($_POST["title"]);
    }
    if (empty($_POST['author'])) {
        $authorError = "Author is required";
    } else {
        $author = test_input($_POST["author"]);
    }
    if (empty($_POST['body'])) {
        $bodyError = "Body is required";
    } else {
        $body = test_input($_POST["body"]);
    }
    if (empty($_POST['created_at'])) {
        $created_atError = "Date is required";
    } else {
        $created_at = test_input($_POST["created_at"]);
    }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>