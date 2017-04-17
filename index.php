<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Take Off Rally 2017 - Keio Univ. SFC Graduate Party -</title>
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
    </style>
  </head>
  <body class="black bg-white center">
    <nav class="clearfix py2 bg-darken-1 fixed sm-show">
      <div class="sm-flex center nowrap">
        <div class="flex-auto">
          <a href="#top" class="btn btn-primary black bg-white navbtn">Top</a>
        </div>
        <div class="flex-auto">
          <a href="#news" class="btn btn-primary black bg-white navbtn">News</a>
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
      <h2>
         2016.06.16 SHINJUKU CLUB SCIENCE</br>
         Restart
      </h2>
      More info is comming soon...
    </div>
    <div id="music" class="px4 py1 center">
      <h2>Music</h2>
      <h3>1st Music Video "wrist"</h3>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/mykE-93Uc0Y" frameborder="0" allowfullscreen></iframe>
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
