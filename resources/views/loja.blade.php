<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
        @livewireStyles
<style>
@charset 'UTF-8';
/* Slider */
.slick-loading .slick-list
{
    background: #fff url('./ajax-loader.gif') center center no-repeat;
}

/* Icons */
@font-face
{
    font-family: 'slick';
    font-weight: normal;
    font-style: normal;

    src: url('./fonts/slick.eot');
    src: url('./fonts/slick.eot?#iefix') format('embedded-opentype'), url('./fonts/slick.woff') format('woff'), url('./fonts/slick.ttf') format('truetype'), url('./fonts/slick.svg#slick') format('svg');
}
/* Arrows */
.slick-prev,
.slick-next
{
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 20px;
    height: 20px;
    padding: 0;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);

    cursor: pointer;

    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus
{
    color: transparent;
    outline: none;
    background: transparent;
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
    opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
    opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;

    opacity: .75;
    color: white;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
    left: -25px;
}
[dir='rtl'] .slick-prev
{
    right: -25px;
    left: auto;
}
.slick-prev:before
{
    content: '←';
}
[dir='rtl'] .slick-prev:before
{
    content: '→';
}

.slick-next
{
    right: -25px;
}
[dir='rtl'] .slick-next
{
    right: auto;
    left: -25px;
}
.slick-next:before
{
    content: '→';
}
[dir='rtl'] .slick-next:before
{
    content: '←';
}

/* Dots */
.slick-dotted.slick-slider
{
    margin-bottom: 30px;
}

.slick-dots
{
    position: absolute;
    bottom: -25px;

    display: block;

    width: 100%;
    padding: 0;
    margin: 0;

    list-style: none;

    text-align: center;
}
.slick-dots li
{
    position: relative;

    display: inline-block;

    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;

    cursor: pointer;
}
.slick-dots li button
{
    font-size: 0;
    line-height: 0;

    display: block;

    width: 20px;
    height: 20px;
    padding: 5px;

    cursor: pointer;

    color: transparent;
    border: 0;
    outline: none;
    background: transparent;
}
.slick-dots li button:hover,
.slick-dots li button:focus
{
    outline: none;
}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{
    opacity: 1;
}
.slick-dots li button:before
{
    font-family: 'slick';
    font-size: 6px;
    line-height: 20px;

    position: absolute;
    top: 0;
    left: 0;

    width: 20px;
    height: 20px;

    content: '•';
    text-align: center;

    opacity: .25;
    color: black;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before
{
    opacity: .75;
    color: black;
}

#slider{
    padding: 4%;
}

.slideropts{
    padding: 1%;
}

footer p {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #777777;
    background-color:black
}

.ui.icon.header:first-child {
    margin-top: 0;
    color: white;
}


.ui.placeholder.segment {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    max-width: initial;
    -webkit-animation: none;
    animation: none;
    overflow: visible;
    padding: 1em 1em;
    min-height: 18rem;
    background: #2185d0;
    border-color: rgba(34,36,38,.15);
    -webkit-box-shadow: 0 2px 25px 0 rgba(34,36,38,.05) inset;
    box-shadow: 0 2px 25px 0 rgba(34,36,38,.05) inset;
    color: white;
}
</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
    <body>


   <div >
    <div  style="margin:0px"  class=" ui icon menu fixed">
     <a class="item">
       <i class="home icon blue"></i>
     </a>
     <a class="item">
       <i class="table camera icon blue"></i>

     </a>
     <a class="item">
       <i class="search icon blue"></i>
     </a>


     <div class="right menu">

        <a class="item">Criar Conta</a>
        <a class="item">Login</a>
      </div>
   </div>

    <div class="ui  placeholder segment ">

        <div class="ui icon header">
            {{setting('site.description')}}
          </div>

    <img class="ui centered small circular image" src="https://semantic-ui.com/images/wireframe/square-image.png">

</div>

   <div class="container-fluid">

   <div id="slider" class="slider slider-nav">
    <div><h3><img class="slideropts ui medium circular image" src="https://img.itdg.com.br/tdg/images/blog/uploads/2019/05/deixar-o-sorvete-caseiro-mais-cremoso.jpg"></h3></div>
    <div><h3><img class="slideropts ui medium circular image" src="https://img.itdg.com.br/tdg/images/blog/uploads/2019/05/deixar-o-sorvete-caseiro-mais-cremoso.jpg"></h3></div>
    <div><h3><img class="slideropts ui medium circular image" src="https://img.itdg.com.br/tdg/images/blog/uploads/2019/05/deixar-o-sorvete-caseiro-mais-cremoso.jpg"></h3></div>
    <div><h3><img class="slideropts ui medium circular image" src="https://img.itdg.com.br/tdg/images/blog/uploads/2019/05/deixar-o-sorvete-caseiro-mais-cremoso.jpg"></h3></div>
    <div><h3><img class="slideropts ui medium circular image" src="https://img.itdg.com.br/tdg/images/blog/uploads/2019/05/deixar-o-sorvete-caseiro-mais-cremoso.jpg"></h3></div>
  </div>

   <livewire:listproducts :lojaid="1" />
   </div>

        <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    </body>


</div>



<script>
$('.slider-nav').slick({
    infinite: true,
  slidesToShow: 4,
  slidesToScroll: 3,
   autoplay: true,
  autoplaySpeed: 2000,
 });


</script>
@livewireScripts
</html>
