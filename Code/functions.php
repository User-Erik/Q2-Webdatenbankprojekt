<?php

//// Variables ////
$servername = "";
$username = "";
$password = "";

//// Functions ////

// Connect to DB //

function Con($servernname, $username, $password) {
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

function TimelineContent() {
  // code...
  echo " <div class="slides fade" style="display: block;">
          <table class="slideContent">

          </table>
        </div>
        <div class="slides fade">
          <table class="slideContent">

          </table>
        </div>
        <div class="slides fade">
          <table class="slideContent">

          </table>
        </div>
        <div class="slides fade">
          <table class="slideContent">

          </table>
        </div>";

}

function TimetableContent() {
  // code...
  echo "
    <table>
     <tr>
       <th>Stunde</th>
       <th>Montag</th>
       <th>Dienstag</th>
       <th>Mittwoch</th>
       <th>Donnerstag</th>
       <th>Freitag</th>
     </tr>
     <tr>
       <td>1</td>
       <td id="Mon1">Mathe</td>
       <td id="Tue1">Mathe</td>
       <td id="Wed1">Mathe</td>
       <td id="Thu1">Mathe</td>
       <td id="Fri1">Mathe</td>
     <tr>
       <td>2</td>
       <td id="Mon2">Mathe</td>
       <td id="Tue2">Mathe</td>
       <td id="Wed2">Mathe</td>
       <td id="Thu2">Mathe</td>
       <td id="Fri2">Mathe</td>
     </tr>
     <tr>
       <td>3</td>
       <td id="Mon3">Mathe</td>
       <td id="Tue3">Mathe</td>
       <td id="Wed3">Mathe</td>
       <td id="Thu3">Mathe</td>
       <td id="Fri3">Mathe</td>
     </tr>
     <tr>
       <td>4</td>
       <td id="Mon4">Mathe</td>
       <td id="Tue4">Mathe</td>
       <td id="Wed4">Mathe</td>
       <td id="Thu4">Mathe</td>
       <td id="Fri4">Mathe</td>
     </tr>
     <tr>
       <td>5</td>
       <td id="Mon5">Mathe</td>
       <td id="Tue5">Mathe</td>
       <td id="Wed5">Mathe</td>
       <td id="Thu5">Mathe</td>
       <td id="Fri5">Mathe</td>
     </tr>
     <tr>
       <td>6</td>
       <td id="Mon6">Mathe</td>
       <td id="Tue6">Mathe</td>
       <td id="Wed6">Mathe</td>
       <td id="Thu6">Mathe</td>
       <td id="Fri6">Mathe</td>
     </tr>
     <tr>
       <td>7</td>
       <td id="Mon7">Mathe</td>
       <td id="Tue7">Mathe</td>
       <td id="Wed7">Mathe</td>
       <td id="Thu7">Mathe</td>
       <td id="Fri7">Mathe</td>
     </tr>
     <tr>
       <td>8</td>
       <td id="Mon8">Mathe</td>
       <td id="Tue8">Mathe</td>
       <td id="Wed8">Mathe</td>
       <td id="Thu8">Mathe</td>
       <td id="Fri8">Mathe</td>
     </tr>
    </table>";
}

function HomeworkPending() {
  // code...
  echo "
  <table style="width:100%">
  </table>";
}

function ExamsUpcoming() {
  // code...
echo "
  <table style="width:100%">
  </table>";
}

function AvgGrade() {
  // code...
  echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>";
}

function FiletableContent() {
  // code...
echo "
  <table class="filetable"style="width:100%">
  </table>";
}

function ConnectionStatus() {

}

function Footer() {

}

?>
