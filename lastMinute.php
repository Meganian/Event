<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="best, beaches, ever, world, ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noodp,noydir"/>
  <meta name="description" content="💻 Best beaches in the world" />
  <meta name="title" content="Best beaches in the world"/>
  <meta name="Author" content="Best beaches in the world" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Beaches Map &#8211; </title>    
  <link href="sass/style.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <link rel='canonical' href='http://magic-websites.pl' />
    <meta http-equiv="Content-Language" content="pl-PL" />
</head>
<body>
  <section id="content">
    <div id="container">
      <div class="page-header">
        <h1>localStorage <small>just a test...</small></h1>
        <div class="alert alert-success" id="yay">Your browser supports Web Storage. Yay!</div>
        <div class="alert alert-danger" id="ooh">Oooh... Your browser seems to be retarted. He can't use Web Storage.</div>
      </div>
      <div class="body-form">
        
          <h3>Add next trip</h3>
          <form action="#" class="form-inline">
          <div id='todoList'></div>
            <span class="form-group">
              <input type="text" name="save" id="text" class="form-control" placeholder="save a value here...">
            </span>
            <select name="colorPriorit" id="colorPriority">
              <option value="red">Red</option>
              <option value="green">Green</option>
              <option value="blue">Blue</option>

            </select>
            <button id="set" class="btn">save</button>

            <a id="clear" href="#">Czyść</a>
          </form>
          <hr>
          <h3>read the value</h3>
          <div class="alert alert-info" id="val"><i>nothing saved...</i></div>
          <button id="get" class="btn">get saved value</button>
          <button id="remove" class="btn">clear the value</button>
      
      </div>
    </div>
  </section>
</body>

</html>
