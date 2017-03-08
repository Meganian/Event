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
        <div>
          <main>
            <div class='type-contact-us bg-contact'></div>
            
            <form method="post" action='contact_form.php' class='contact_form' id='contact_form'>
              <ul class='form-container'>
                <li class='form-header'>Ask question</li>
                <li class='form-group'>
                  <label for='name'> Name</label>
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <input type="text" name='name' id='name' class='form_control' autocomplete="off">
                </li>
                <li class='form-group'>
                  <label for='e-mail'>e-mail</label>
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <input type="text" name='email' id='email' class='form_control' autocomplete="off">
                </li>
                <li class='form-group'>
                  <label for='phone'>phone</label>
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <input type="text" name='phone' id='phone' class='form_control' autocomplete="off">
                </li>
                <li class='form-group'>
                  <label for='info'>Info...</label>
                  <i class="fa fa-comments-o i-textarea" aria-hidden="true"></i>
                  <textarea name='info' class='form_control'></textarea>
                </li>   
              </ul>
              <button type='submit' name="submit" class="btn">Send<i class="fa fa-paper-plane" aria-hidden="true" ></i></button>
               
            </form> 
          </main>
        </div>
      </div>
    </section>
<script>

document.addEventListener("DOMContentLoaded", function(e) {
    //var currentId = e.target.value;
    document.getElementById('name').addEventListener('change', function() {
        var classText = 'errorField';
        var reg = new RegExp('^[a-zA-Z]{3,}$', 'g');
    
        if (!reg.test(this.value)) {
            this.className += " "+classText; //dodaję klase do pola
        } else {
            var regError = new RegExp('(\\s|^)'+classText+'(\\s|$)');
            this.className = this.className.replace(regError, ''); //usuwam klasę
        }
    });
});
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('email').addEventListener('change', function() {
        var classText = 'errorField';
        var mailReg = new RegExp('^[0-9a-z_.-]+@[0-9a-z.-]+\.[a-z]{2,3}$', 'i');

        if (!mailReg.test(this.value)) {
            this.className += " "+classText; //dodaję klase do pola
        } else {
            var regError = new RegExp('(\\s|^)'+classText+'(\\s|$)');
            this.className = this.className.replace(regError, ''); //usuwam klasę
        }
    });
});
</script>
  
</body>
</html>
