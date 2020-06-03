<?php

//// Variables ////
$servername = "";
$username = "";
$password = "";

// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

/// Querys ///


$Q "";
$Q "";
$Q "";
$Q "";

//// Functions ////

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Connect to DB //
function Conn() {
  // Create connection
  $conn = new mysqli($servername, $username, $password);
  // Check connection
  if ($conn->connect_error) {
    die(echo "<script src="script.js">ConError()</script>");
  }
  else {
    echo "<script src="script.js">ConSuccess()</script>";
  }
}

// gets the content from the DB and displays it //
function TimelineContent() {
  // code...
  Conn();
  $QTimeline "";
  $result = $conn->query($QTimeline);
  if ($result->num_rows > 0) {
    echo '<div class="slides fade" style="display: block;"><table class="slideContent"><thead>';
    while ($row = $result->fetch_assoc()) {
      echo $row["Titel"].'</thead>';
    }
    echo '</table></div>';
  } else {
    echo "0 results";
  }


}

// Connect to DB //
function TimetableContent() {
  // code...
  Conn();
  $QTimetable "";
  $result = $conn->query($QTimetable);
  if ($result->num_rows > 0) {
    echo '<h3>Stundenplan</h3><table><tr><th>Stunde</th><th>Montag</th><th>Dienstag</th><th>Mittwoch</th><th>Donnerstag</th><th>Freitag</th></tr><tr>';
    while ($row = $result->fetch_assoc()) {
      echo '<td>'.$row["ID"].'</td><td id="Mon'.$stunde'">'.$row["Mon"].'</td><td id="Tue'+ $stunde'">'.$row["Tue"].'</td><td id="Wed'+ $stunde'">'.$row["Wed"].'</td><td id="Thu'+ $stunde'">'.$row["Thu"].'</td><td id="Fri'+ $stunde'">'.$row["Fri"].'</td>'
      $stunde++;
    }
    echo '</tr></table>';
  } else {
    echo "0 results";
  }
}

// Connect to DB //
function HomeworkPending() {
  // code...
  echo "
  <table style="width:100%">
  </table>";
}

// Connect to DB //
function ExamsUpcoming() {
  // code...
echo "
  <table style="width:100%">
  </table>";
}

// Connect to DB //
function AvgGrade() {
  // code...
  echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>";
}

// Connect to DB //
function FiletableContent() {
  // code...
echo "
  <table class="filetable"style="width:100%">
  </table>";
}

// Connect to DB //
function ConnectionStatus() {

}

// Connect to DB //
function Footer() {
  echo "";
}

?>
