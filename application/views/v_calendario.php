<!-- head -->
  <?php include "html/head.php" ?>
<!-- end head -->
<body style="background-image: none;">

<!--   header -->
  <?php include "html/header.php" ?>

<!-- /header -->

<!-- menu -->
  <?php include "html/menu.php" ?>
 <!--  end menu -->

 <!-- cuerpo -->

  <div class="container">
  	<div class="cinta-cuerpo container2">
     <!-- calendario -->
     <h1 style="text-align: center">Programacion de Eventos</h1>
     <br>
     <div class="responsive-calendar container2">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary">Prev</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary">Next</div></a>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mon</div>
          <div class="day header">Tue</div>
          <div class="day header">Wed</div>
          <div class="day header">Thu</div>
          <div class="day header">Fri</div>
          <div class="day header">Sat</div>
          <div class="day header">Sun</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
     <!-- endCalendario -->

     <br>
     <br>
    </div>
  </div>
<!-- end cuerpo -->

<!-- footer -->
  <?php include "html/footer.php" ?>
<!-- end footer -->

        <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time: '2013-04',
          events: {
            "2013-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2013-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2013-05-03":{"number": 1}, 
            "2013-06-12": {}}
        });
      });
    </script>
</body>
</html>