<?php include('src/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>RW Lifecare : About Us</title>
    <?php include('src/head.php') ?>
</head>

<body>
    
    <?php include('src/preload.php') ?>
    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('src/header.php') ?>
    <!--=========== END HEADER SECTION ================-->

    <?php echo youAreHere("About Us") ?>

    <!--=========== BEGAIN Doctors SECTION ================-->
    <?php include('src/meet_our_doc.php') ?>
    <!--=========== End Doctors SECTION ================-->

    <!--=========== BEGAIN Counter SECTION ================-->
    <?php include('src/counter.php') ?>
    <!--=========== End Counter SECTION ================-->

    <!--=========== Start Footer SECTION ================-->
    <?php include('src/footer.php') ?>
    <!--=========== End Footer SECTION ================-->

    <?php include('src/incfooter.php') ?>
     <!-- ALAN AI -->
     <div class="alan-btn"></div>
    <script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
  var alanBtnInstance = alanBtn({
    key: "f1505f74def0b33a2f27486844a213bb2e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "go:back") {
        //call client code that will react on the received command
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });
</script>
 <!-- ALAN AI -->
</body>

</html>
