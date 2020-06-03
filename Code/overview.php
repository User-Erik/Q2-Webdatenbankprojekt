<?php
//Get all required functions
require 'functions.php';
//connect to the DB with the website-user account and fetch their data to display it
conn()
?>
<!DOCTYPE html>
<html>
<head>
  <title>Abiplaner</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="description" content="Abitur-Planer">
  <meta name="author" content="Erik Weber">
  <link rel="stylesheet" href="style.css">
  <script src="script.js" charset="utf-8"></script>
</head>
<body>
  <nav>
    <ul>
      <li class="active"><a href="#">Übersicht</a></li>
      <li><a href="classes.php">Kurse</a></li>
      <li><a href="exercises.php">Aufgaben</a></li>
      <li><a href="calendar.php">Kalender</a></li>
      <li><a href="add.php">+</a></li>
      <li id="float"><a href="info.html">Infos</a></li>
      <li id="float"><a href="settings.html">Einstellungen</a></li>
    </ul>
  </nav>
  <br>
  <br>
  <section class="widgets">
    <ul>
      <li>
        <article class="schedule">
            <h2>Termine</h2>
            <div class="timeline">
              <?php TimelineContent(); ?>
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
            </div>
            <br>
            <br>
            <h3>Stundenplan</h3>
            <div class="timetable">
              <?php TimetableContent(); ?>
            </div>
            <a href="calendar.html">
              <img src="Resources\Link.svg" height=30>
              Zum Kalender
            </a>
        </article>
      </li>
      <li>
        <article class="classes">
          <h1>Kursübersicht</h1>
          <div class="pendingHomework">
            <?php HomeworkPending(); ?>
          </div>
          <h2>Anstehende Klausuren</h2>
          <div class="upcomingExams">
            <?php ExamsUpcoming(); ?>
          </div>
          <a href="classes.html">
            <img src="Resources\Link.svg" height=30>
            Zur Kursübersicht
          </a>
        </article>
      </li>
      <li>
        <article class="grades">
          <h1>Notenrechner</h1>
          <h2>Bisheriger Notendurchschnitt</h2>
          <div class="avgGrade">
            <?php AvgGrade(); ?>
          </div>
          <h2>Weitere Werte</h2>
          <div class="Grad1">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
          <a href="classes.html#gradeCalculator">
            <img src="Resources\Link.svg" height=30>
            Zum Notenrechner
          </a>
        </article>
      </li>
      <li>
        <article class="files">
          <h1>Dateiablage</h1>
          <?php FiletableContent(); ?>
          <a href="files.html">
            <img src="Resources\Link.svg" height=30>
            Zur Dateiablage
          </a>
        </article>
      </li>
    </ul>
  </section>
  <article class="serverStatus">
    <?php ConnectionStatus(); ?>
  </article>
  <footer>
    <a href="info.html#Kontakt">Kontakt</a>
    <a href="info.html#Impressum">Impressum</a>
    <a href="info.html#Datenschutz">Datenschutz</a>
    <?php Footer(); ?>
  </footer>
</body>
</html>
