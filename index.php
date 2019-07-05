<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache" />
  <title>IM map</title>
  <!-- normalize.css -->
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <!-- gogole fonts -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&amp;subset=chinese-traditional" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css?v=7.1">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- hide address bar -->
  <?php
    include("addstyle.php");
  ?>
</head>

<body>
  <nav class="nav flex-column">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">三</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#" onclick="showIframe('schedule', 'schedule')">行程表</a>
            <a class="dropdown-item" href="#" onclick="showIframe('inbou', 'inbou')">小隊呈現</a>
            <a class="dropdown-item" href="#" onclick="showIframe('story', 'story')">Story</a>
            <a class="dropdown-item" href="https://ntuimcampcourse.herokuapp.com" >選課網站</a>
            <a class="dropdown-item" href="#" onclick="showIframe('freestyle', 'freestyle')">Freestyle?</a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
  </nav>
  <div id="map" class="map full">
    <img id="mapimg" src="img/map-nbg.png" alt="">
    <button id="btn1" class="btn btn-danger btn-circle-preset glow" type="button">1</button>
    <button id="btn2" class="btn btn-danger btn-circle-preset glow" type="button">2</button>
    <button id="btn3" class="btn btn-danger btn-circle-preset glow" type="button">3</button>
    <button id="btn4" class="btn btn-danger btn-circle-preset glow" type="button">4</button>
    <button id="btn5" class="btn btn-danger btn-circle-preset glow" type="button">5</button>
    <button id="btn6" class="btn btn-danger btn-circle-preset glow" type="button">6</button>
    <button id="btn7" class="btn btn-danger btn-circle-preset glow" type="button">7</button>
    <button id="btn8" class="btn btn-danger btn-circle-preset glow" type="button">8</button>
    <button id="btn9" class="btn btn-danger btn-circle-preset glow" type="button">9</button>
    <button id="btn10" class="btn btn-danger btn-circle-preset glow" type="button">10</button>
    <button id="egg" class="btn btn-info btn-circle-preset" type="button" onclick="tell2()">?</button>
  </div>
  <div id="scheduleCon" class="ifCon">
    <iframe id="schedule" class="frame full" loading="lazy" src="schedule"></iframe>
  </div>
  <div id="storyCon" class="ifCon">
    <iframe id="story" class="frame full" loading="lazy" src="story" ></iframe>
  </div>
  <div id="inbouCon" class="ifCon">
    <iframe id="inbou" class="frame full" loading="lazy" src="inbou" ></iframe>
  </div>
  <div id="freestyleCon" class="ifCon">
    <iframe id="freestyle" class="frame full" loading="lazy" src="freestyle" ></iframe>
  </div>
  <div id="team" class="team">
    <img class="teamimg" src="" alt="">
    <b id="title"></b> 
    <b id="entitle"></b> 
  </div>
  <button id="btnback" class="btn btn-dark" type="button" onclick="goback()">go back</button>
  <script src="script.js?v=7.1" charset="utf-8"></script>
</body>

</html>