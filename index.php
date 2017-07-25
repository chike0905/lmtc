<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Layout my Torturechamber Official Web Cite</title>
    <meta name="keywords" content="Layout my Torturechamber,lmtc,バンド,band">
    <meta name="description" content="エレクトロコアバンドLayout my Torturechamber公式HP 音源、ライブ情報など">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style/basscss.css">
    <link rel="stylesheet" href="style/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/feedin.js"></script>
    <script type="text/javascript" src="./js/nav.js"></script>
    <!--scroll --!>
    <script type="text/javascript">
      $(document).ready(function() {
       $('#top').scrollInTurn({
           fadeInSpeed:1000
        });
        $('#music').scrollInTurn();
        $('#contact').scrollInTurn();
        $('#head').scrollInTurn();
      });
    </script>
    <style>
      .fixed {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10000;
      }
      @media screen and (max-width:800px){
        .movie-wrap {
          position: relative;
          padding-bottom: 56.25%;
          padding-top: 30px;
          height: 0;
          overflow: hidden;
        }
        .movie-wrap iframe {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
        }
      }
    </style>
  </head>
  <body class="black bg-white center">
    <nav class="clearfix py2 bg-darken-3 fixed sm-show">
      <div class="sm-flex center nowrap">
        <div class="flex-auto">
          <a href="#top" class="btn btn-primary black bg-white navbtn">Top</a>
        </div>
        <div class="flex-auto">
          <a href="#news" class="btn white navbtn">Live</a>
        </div>
        <div class="flex-auto">
          <a href="#music" class="btn white navbtn">Music</a>
        </div>
        <div class="flex-auto">
          <a href="#contact" class="btn white navbtn">Contact</a>
        </div>
      </div>
    </nav>
    <article id="top">
    <div class="target">
    </div>
    <div id="photo">
        <img src="./img/top.jpg" alt="Layout my Torturechamber" style="width:100%">
    </div>
    <div id="news" class="clearfix py1 px3">
    <h2>Live</h2>
    <table class="table-light col-8 mx-auto mb3">
        <tr>
            <th class="col-2">Date</th><th class="col-10">2017/8/15(Thu.)</th>
        </tr>
        <tr>
            <th class="col-2">Title</th><th class="col-10">Nobody Dies A Virgin,InFix,ANTIKNOCK pre.【Exist Episodes】</th>
        </tr>
        <tr>
            <th class="col-2">Venue</th><th class="col-10">Shinjuku ANTIKNOCK</th>
        </tr>
        <tr>
            <th class="col-2">Bands</th><th class="col-10">Layout my Torturechamber / Nobody Dies A Virgin / InFix / MASRAO / GIVEN BY THE FLAMES / おしゃめがね / EJECTS</th>
        </tr>
        <tr>
            <th class="col-2">OPEN/START</th><th class="col-10">17:30 / 18:00</th>
        </tr>
        <tr>
            <th class="col-2">ADV/DOOR</th><th class="col-10">2000yen / 2500yen</th>
        </tr>
    </table>
    <table class="table-light col-8 mx-auto mb3">
        <tr>
            <th class="col-2">Date</th><th class="col-10">2017/9/10(Sun.)</th>
        </tr>
        <tr>
            <th class="col-2">Title</th><th class="col-10">豆腐メンタルVol.2</th>
        </tr>
        <tr>
            <th class="col-2">Venue</th><th class="col-10">大塚MEETS</th>
        </tr>
        <tr>
            <th class="col-2">Bands</th><th class="col-10">Layout my Torturechamber / Finisaporia / NEO DESIVE MyND and more!</th>
        </tr>
        <tr>
            <th class="col-2">OPEN/START</th><th class="col-10">12:00 / 12:20</th>
        </tr>
        <tr>
            <th class="col-2">ADV/DOOR</th><th class="col-10">1000yen</th>
        </tr>
    </table>
    <table class="table-light col-8 mx-auto mb3">
        <tr>
            <th class="col-2">Date</th><th class="col-10">2017/9/20(Wed.)</th>
        </tr>
        <tr>
            <th class="col-2">Title</th><th class="col-10">Zirco Tokyo presents Chased by Ghost of HYDEPARK 【3rd EP "ESCAPE" リリースツアー！】</th>
        </tr>
        <tr>
            <th class="col-2">Venue</th><th class="col-10">Zirco Tokyo</th>
        </tr>
        <tr>
            <th class="col-2">Bands</th><th class="col-10">Layout my Torturechamber / Chased by Ghost of HYDEPARK / SLEEP GOAT CITY / PYGMY / WACALiTY and more!</th>
        </tr>
        <tr>
            <th class="col-2">OPEN/START</th><th class="col-10"> TBA </th>
        </tr>
        <tr>
            <th class="col-2">ADV/DOOR</th><th class="col-10">2000yen / 2800yen</th>
        </tr>
    </table>
    </div>
    <div id="music" class="px4 py1 center">
      <h2>Music</h2>
      <h3>Catch Me If You Can</h3>
        <div class="movie-wrap">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/gPANwMoT8a4" frameborder="0" allowfullscreen=""></iframe>
        </div>
      <h3>1st Music Video "wrist"</h3>
      <div class="movie-wrap">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/mykE-93Uc0Y" frameborder="0" allowfullscreen></iframe>
      </div>
      <h3>Truth Calling</h3>
      <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/269962844%3Fsecret_token%3Ds-OId00&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
      <h3>All in me</h3>
      <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/267452319%3Fsecret_token%3Ds-hz4tg&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
      <h3>Sunset maybe I said</h3>
      <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/269962850%3Fsecret_token%3Ds-zkowM&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
      <h3>Hero of the day</h3>
      <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/269962854%3Fsecret_token%3Ds-TwXKR&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
      <h3>Monster of Grimm’s Fairy tales</h3>
      <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/269962853%3Fsecret_token%3Ds-52dKX&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
    </div>
    <div id="contact" class="py2 px3 center">
      <h2>Contact</h2>
        <h3>Mail : lmtc_band[at]gmail.com</h3>
    </div>
    </article>
    <footer class="clearfix py3">
    <div class="clearfix">
      <div id="copyright" class="px3 right">
        &copy Layout my Torturechamber <?php echo date(Y); ?>
      </div>
    </div>
    </footer>
  </body>
</html>
