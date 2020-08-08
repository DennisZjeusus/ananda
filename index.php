<!DOCTYPE html>
<!--Code By Webdevtrick ( https://webdevtrick.com )-->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>AMM | ANANDA MARGA</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
  </script>
  <script src="lazysizes/src/lazysizes.js" async></script>
  <script src="picturefill/src/picturefill.js" async></script>
  <script src="picturefill/src/plugins/intrinsic-dimension/pf.intrinsic.js" async></script>
  <link rel="stylesheet" href="css/sty.css">

  <link rel="stylesheet" type="text/css" href="css/ico.css">
  <link rel="stylesheet" type="text/css" href="sly.css">
  <link rel="stylesheet" href="css/responsive.css">

<style type="text/css">
  #social-sidebar a[class*="linkedin"]:hover,
  #social-sidebar a[class*="linkedin"] span,
  #social-sidebar a[class*="linkedin"] span:before {background: #0073b0;}

  #social-sidebar a[class*="instagrem"]:hover,
  #social-sidebar a[class*="instagrem"] span,
  #social-sidebar a[class*="instagrem"] span:before{background: #E1306C;}

  #social-sidebar a[class*="paypal"]:hover,
  #social-sidebar a[class*="paypal"] span,
  #social-sidebar a[class*="paypal"] span:before {background: #27346a;}

main{
  width:100%;
}

button.tog{
  width:100%;
  height: 2.4em;
  background-color: tomato;
}

#socials{
  background-color: rgba(255,255,255,0.9);
  height: 100vh;
}

#socials div{
  padding:.33em;
  heig
}

.social-header{
    width:100%;
    height:2.4em;
}

.form-news{
  background-color: #FFD700;
}

#dtext, #cmtlist{
  display: flex;
  flex-flow:column;
  width: 100%;
/*  height: auto;*/
}

#cmtlist{
  height:39em;
  overflow-y: auto;
}

h4, #namebox, #txt1{
  width: 100%;
  padding:.63em;
}

#dtext button{
  background-color: tomato;
  color: #fff;
  border: 0;
  padding: 1.8em 2.7em;
  border-radius:40px;
  font-family: poppins;
  font-size:16px;
  text-transform: uppercase;
  margin:1em;
  text-align: center;
}

#cmtlist p{
  border: .33em solid rgba(255, 255, 0, 0.9);
  border-radius:.63em;
}

#namebox, #txt1{
  border-radius:.33em;
}


#footer{
  width: 100%;
  height: 6vh;
  z-index: 1;
  background-color: rgba(255, 255, 0, 0.9);
  bottom: 0;
  padding-top: .18em;
}

  @media screen and (max-width:657px)
{

  header nav a{
    font-size:.6em;
    padding:.06em;
  }

  header nav a:hover {
  -moz-box-shadow: 0 0 0 0.6px #fff;
  -webkit-box-shadow: 0 0 0 0.6px #fff;
  box-shadow: 0 0 0 .6px #fff;
  background-color: #6BB130;
}
}



  </style>

  <script>
$(document).ready(function(){

$('#oneb').on('click', function () { /* do stuff */
  // Get class list string
  var classList = $(".active").attr("id");
  console.log(classList);
  if(classList == 'onem')
  {
    $('#'+classList+'').removeClass("active");
    $("#oneb").css("height", "4.2em");
    console.log(classList);
  }else
  {
    console.log($(".active").attr("id"));
    if(classList != null)
    {
      $('#'+classList+'').find( "button" ).trigger( "click" );
      // $( 'a[ id='+classList+' ]' ).removeClass("active");
    }
    $('#onem').addClass("active");
    $("#oneb").css("height", "2.4em");
    console.log($(".active").attr("id"));
  }

  $('#one').slideToggle();
  console.log($(".active").attr("id"));
});

$('#twob').on('click', function () { /* do stuff */
  // Get class list string
  var classList = $(".active").attr("id");
console.log(classList);
  if(classList == 'twom')
  {
    $('#'+classList+'').removeClass("active");
    $("#twob").css("height", "4.2em");
  }else
  {
    console.log($(".active").attr("id"));
    if(classList != null)
    {
      $('#'+classList+'').find( "button" ).trigger( "click" );
      // $( 'a[ id='+classList+' ]' ).removeClass("active");
    }
    $('#twom').addClass("active");
    $("#twob").css("height", "2.4em");
    console.log($(".active").attr("id"));
  }
  $('#two').slideToggle();
  console.log($(".active").attr("id"));
});

  $( "#oneb" ).trigger( "click" );
  $( "#twob" ).trigger( "click" );

});
</script>
</head>
<body>
<div id="contain" class="container">
  <header>
      <h1><a href="index.php" title="Ananda Marga: Meditation, Yoga and Social Service" rel="home"><picture><img width="440" height="96" src="img/logo44096.png" class="attachment-full size-full lazyload" alt="Ananda Marga: Meditation, Yoga and Social Service" srcset="img/logo44096.png 440w, img/logo1040.png 1040w" sizes="(max-width: 440px) 100vw, 440px"/></picture></a></h1>
      <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#socials">Posts</a>
        <a href="#gallery">Gallery</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
      </nav>
  </header>
  <ul id="social-sidebar" style="z-index: 1;">
      <li>
        <a class="entypo-twitter"><span>Twitter</span></a>
      </li>
      <li>
        <a class="entypo-facebook"><span>Facebook</span></a>
      </li>
      <li>
        <a class="entypo-instagrem"><span>Instagram</span></a>
      </li>
      <li>
        <a class="entypo-gplus"><span>Google+</span></a>
      </li>
      <li>
        <a class="entypo-linkedin"><span>Linkedin</span></a>
      </li>
      <li>
        <a class="entypo-paypal"><span>Donate</span></a>
      </li>
      <!-- <li>
        <a class="entypo-dribbble"><span>Dribbble</span></a>
      </li> -->
      <!-- <li>
        <a class="entypo-dropbox"><span>Dropbox</span></a>
      </li> -->
      <!-- <li>
        <a class="entypo-github"><span>Github</span></a>
      </li> -->
      <!-- <li>
        <a class="entypo-evernote"><span>Evernote</span></a>
      </li> -->
    </ul>
  <div class="wraper">
    <div id="home" class="section">
      <ul class="cb-slideshow">
            <li class="lazyload"><span>Image 01</span><div><h3>projects</h3></div></li>
            <li class="lazyload"><span>Image 02</span><div><h3>events</h3></div></li>
            <li class="lazyload"><span>Image 03</span><div><h3>meditation</h3></div></li>
            <li class="lazyload"><span>Image 04</span><div><h3>service</h3></div></li>
        </ul>
    </div>
    <div id="about" class="section flx">
      <div class="item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex libero cupiditate deserunt earum, fuga, ab labore esse animi, nihil est tenetur non delectus perferendis. Maxime accusamus ea rem sint at!</p>
      </div>
      <div class="item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ut aspernatur omnis neque iusto. Veritatis rem ad atque optio perferendis. Dolorum qui consequatur, repellat soluta impedit porro totam molestiae sit.</p>
      </div>
      <div class="item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus iusto, omnis quas, rem minus cupiditate, sunt voluptates minima sint nemo ipsa itaque consequatur dolor, quam necessitatibus vitae. Quod, eaque, quam.</p>
      </div>
      <div class="item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus iusto, omnis quas, rem minus cupiditate, sunt voluptates minima sint nemo ipsa itaque consequatur dolor, quam necessitatibus vitae. Quod, eaque, quam.</p>
      </div>
      <div class="item">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus iusto, omnis quas, rem minus cupiditate, sunt voluptates minima sint nemo ipsa itaque consequatur dolor, quam necessitatibus vitae. Quod, eaque, quam.</p>
      </div>
    </div>

    <div id="socials" class="section flx">
      <div class="fb">
        <h2 class="social-header" style="color:#fff;background-color:#3B5998; text-transform:uppercase;">Facebook</h2>
        <div id="cmtlist">
          <p style="border: .33em solid #3B5998;border-radius:.63em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex libero cupiditate deserunt earum, fuga, ab labore esse animi, nihil est tenetur non delectus perferendis. Maxime accusamus ea rem sint at!</p>
          <p style="border: .33em solid#3B5998;border-radius:.63em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex libero cupiditate deserunt earum, fuga, ab labore esse animi, nihil est tenetur non delectus perferendis. Maxime accusamus ea rem sint at!</p>
        </div>
      </div>
      <div class="ig">
        <h2 class="social-header" style="color:#fff;background-color:#E1306C; text-transform:uppercase;">Instagram</h2>
        <div id="cmtlist">
          <p style="border: .33em solid #E1306C;border-radius:.63em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ut aspernatur omnis neque iusto. Veritatis rem ad atque optio perferendis. Dolorum qui consequatur, repellat soluta impedit porro totam molestiae sit.</p>
          <p style="border: .33em solid #E1306C;border-radius:.63em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex libero cupiditate deserunt earum, fuga, ab labore esse animi, nihil est tenetur non delectus perferendis. Maxime accusamus ea rem sint at!</p>
        </div>
      </div>
      <div class="tw">
        <h2 class="social-header" style="color:#fff;background-color:#00aced; text-transform:uppercase;">Twitter</h2>
        <div id="cmtlist">
          <p style="border: .33em solid #00aced;border-radius:.63em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus iusto, omnis quas, rem minus cupiditate, sunt voluptates minima sint nemo ipsa itaque consequatur dolor, quam necessitatibus vitae. Quod, eaque, quam.</p>
          <p style="border: .33em solid #00aced;border-radius:.63em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex libero cupiditate deserunt earum, fuga, ab labore esse animi, nihil est tenetur non delectus perferendis. Maxime accusamus ea rem sint at!</p>
        </div>
      </div>
      <div class="li">
        <h2 class="social-header" style="color:#fff;background-color:#0073b0; text-transform:uppercase;">Linkedin</h2>
        <div id="cmtlist">
          <p style="border: .33em solid #0073b0;border-radius:.63em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus iusto, omnis quas, rem minus cupiditate, sunt voluptates minima sint nemo ipsa itaque consequatur dolor, quam necessitatibus vitae. Quod, eaque, quam.</p>
          <p style="border: .33em solid #0073b0;border-radius:.63em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex libero cupiditate deserunt earum, fuga, ab labore esse animi, nihil est tenetur non delectus perferendis. Maxime accusamus ea rem sint at!</p>
        </div>
      </div>
    </div>

    <div id="gallery" class="section" style="height:100vh;">
      <ul class="cb-slideshow">
            <li class="lazyload"><span>Image 01</span><div><h3>projects</h3></div></li>
            <li class="lazyload"><span>Image 02</span><div><h3>events</h3></div></li>
            <li class="lazyload"><span>Image 03</span><div><h3>meditation</h3></div></li>
            <li class="lazyload"><span>Image 04</span><div><h3>service</h3></div></li>
        </ul>
    </div>
    <div id="projects" class="section">
      <main id="onem"  class="active" style="margin-bottom: .9em;">
        <button id="oneb" class="tog">Click to view and hide project 1</button>
        <div id="one" class='photo-grid-container'>
          <div id="about" class="section flx">
            <div class="item">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex libero cupiditate deserunt earum, fuga, ab labore esse animi, nihil est tenetur non delectus perferendis. Maxime accusamus ea rem sint at!</p>
            </div>
            <div class="item">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ut aspernatur omnis neque iusto. Veritatis rem ad atque optio perferendis. Dolorum qui consequatur, repellat soluta impedit porro totam molestiae sit.</p>
            </div>
          </div>
        </div>

      </main>
      <main id="twom"  class="active">
        <button id="twob" class="tog">Click to view and hide project 2</button>
        <div id="two" class='photo-grid-container'>
          <div id="about" class="section flx">
            <div class="item">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex libero cupiditate deserunt earum, fuga, ab labore esse animi, nihil est tenetur non delectus perferendis. Maxime accusamus ea rem sint at!</p>
            </div>
            <div class="item">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ut aspernatur omnis neque iusto. Veritatis rem ad atque optio perferendis. Dolorum qui consequatur, repellat soluta impedit porro totam molestiae sit.</p>
            </div>
          </div>
        </div>

      </main>
    </div>

    <div id="contact" class="section flx">

      <div class="item form-news" >
        <form method="post" action="" style="">
          <h1>Newsletter Signup</h1>
          <p>No spam, unsubscribe at any time.</p>
          <div class="info">
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
          </div>
          <input type="submit" value="Subscribe">
        </form>
      </div>
      <div id="commentsec" class="item">

        <h4 style="text-transform:uppercase;">Comments</h4>
        <div id="cmtlist">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ut aspernatur omnis neque iusto. Veritatis rem ad atque optio perferendis. Dolorum qui consequatur, repellat soluta impedit porro totam molestiae sit.</p>
          <!-- <button class="navbutton" onClick="clearComment()">Clear Comment</button> -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ut aspernatur omnis neque iusto. Veritatis rem ad atque optio perferendis. Dolorum qui consequatur, repellat soluta impedit porro totam molestiae sit.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum enim sunt delectus, reiciendis omnis laudantium animi, et nulla quidem, aliquam aliquid. A consectetur deleniti voluptates eius neque, voluptate voluptatibus nostrum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ut aspernatur omnis neque iusto. Veritatis rem ad atque optio perferendis. Dolorum qui consequatur, repellat soluta impedit porro totam molestiae sit.</p>
        </div>

        <div id="dtext" >
          <h4 style="text-transform: uppercase;">Write Comment</h4>
          <input id="namebox" type="text" maxlength="32" size="20" placeholder="Name" />
          <br />
          <textarea id="txt1" class="textbox" rows="6" placeholder="Your comment"></textarea>
          <button class="navbutton" onClick="saveComment()">Save Comment </button>
        </div>
      </div>
    </div>
    <div id="footer" class="section flx">
      <footer style="position: relative;">
        <h3 style="text-transform: uppercase; ">ananda marga</h3>
      </footer>
    </div>
</div>



  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/amm.js"></script>
</body>
</html>
