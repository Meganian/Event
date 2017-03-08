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
  <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
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

  <div id="wrapper">
    <header>
      <h1>Best Beaches ever</h1>   
      <nav>
        <a href="index.php">Main</a>
        <a href="lastMinute.php">Last Minute</a>
        <a href="rentCar.php">Rent a car</a>
        <a href="contact.php">Contact us</a>
      </nav>
    </header>
    <section id="content">
      <div id="container">

        <div class="third nav">
          <div id="event" class="event-photo">
            <a href="lastMinute.php" id="ca"><img src="img/sydney.jpg" alt="Sydney beaches"><p>Sydney beaches</p></a>
            <a href="rentCar.php" id="tx"><img src="img/eden.jpg" alt="Eden beaches"><p>Eden beaches</p></a>
            <a href="contact.php" id="ny"><img src="img/tasmania.jpg" alt="Tasmania beaches"><p>Tasmania beaches</p></a>
          </div>
        </div>

        <div class="third more-info">
          <div id="sessions">Choose event from right column</div>
        </div>

        <div class='third map'>
          <div id='map' style="height: 100%;">
            
          </div>
        </div>   
      </div>

    </section>
  </div>
 <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="Modernizr-master/modernizr.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/validation-form.js"></script>
  
<script>

          $(function(){

            $('nav a').on('click', function(e){
              e.preventDefault();
              var url = this.href;
              $('#container').remove();
              $('#content').load(url + ' #container').hide().fadeIn('slow');
            });

            $('#content').height($(window).height());




            $("body").on('focus','#content', function (e) {

              $('form').find('input, textarea').on('keyup blur focus submit', function (e) {

                var $this = $(this);
                var label = $this.parent().find('label');

                if (e.type === 'keyup' ) {

                  if ($this.val() === '') {
                    label.removeClass('active highlight');
                  } else {
                    label.addClass('active highlight');
                  }
                } else if (e.type === 'blur') {
                  if( $this.val() === '' ) {
                    label.removeClass('active highlight'); 
                  } else {
                    label.removeClass('highlight');   
                  }   
                } else if (e.type === 'focus') {
                 console.log(label);
                 if( $this.val() === '' ) {
                  label.removeClass('highlight'); 
                } 
                else if( $this.val() !== '' ) {
                  label.addClass('highlight');
                }
              }
            });


//$('#set').on('click',function(e){
  //e.preventDefault(); 

  /*var set = document.getElementById('set');
  var todo = document.getElementById('text').value;
  var selectC = document.getElementById('colorPriority');
  var selectClass = selectC.options[selectC.selectedIndex].value;
  
  var todoList = document.getElementById('todoList');
  var znacznik = document.createElement('li');
 
  znacznik.className = selectClass;
  znacznik.append(todo);
  todoList.appendChild(znacznik);*/


 
   

   





            });

$('body').on('DOMContentLoaded',function(){
     if (!typeof(Storage) !== 'undefined') {
      $('#yay').fadeIn('slow');
    } else {
      $('#ooh').fadeIn('slow');
    }
     $('#set').on('click',function(e) {
      e.preventDefault();
      //e.stopPropagation();

      localStorage.setItem("test", test);
      
      var selectC = document.getElementById('colorPriority');
      var className = selectC.options[selectC.selectedIndex].value;
      console.log(className);
      var test = $('#text').val();
    
       $('#val').append('<div class="'+ className +'">'+test+'</div>');
    var store_data = {
    content : selectC.innerHTML
  };
  var store_data_string = JSON.stringify(store_data);
  localStorage.setItem('todoData', store_data_string);
//localStorage.getItem("test")
    
  
    });
  $('#remove').click(function() {
      localStorage.remove().children("#val");
    });
})





          });

</script>
</body>
</html>
