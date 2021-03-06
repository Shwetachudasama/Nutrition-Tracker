<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <title>Meal Plan Prepper</title>
  <meta name="description" content="Add meals to a list and generate a random weekly menu">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="stylesheet" href="styles/main.css">
  <style>
    body{
background-color: #ffffff;
    }
    </style>
</head>

<body >
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <header class="main-header">
    <span>MealPlanner</span>  
  </header>

  <main>
    <section class="content-container">
      <h1>Need a meal menu this week?&nbsp;<span>We can help!</span></h1>
      
      <div class="controls-wrapper">
          <label for="dayOptions">How many days do you need planned?</label>
          <select id="dayOptions" autofocus="true" required="true">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7" selected="selected">7</option>
          </select>
        </div>

        <button id="GenerateMealList" class="primary-btn" name="generate_meal_list" value="primary" >Make My Menu</button>
    </section>
  </main>
  
  <!-- installed Modernizr w/ npm but not using yet -->
  <script src="js/vendor/modernizr-3.6.0.min.js"></script> 
  <!-- installed jQuery w/ npm but not using yet -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="dist/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <!-- <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script> -->
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body
>

</html>
