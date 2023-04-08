<?php  require_once "./header.php" ?>

<div id="color">
<h1 class="myhead3">AMD Graphics</h1>
<div class="row text-justify">
    <div class="col-sm-6"> 
        <h3>AMD Radeon RX</h3>
        <p>A video card (also called a display card, graphics card, display adapter, or graphics adapter) is an expansion card 
        which generates a feed of output images to a display device (such as a computer monitor). Frequently, these are advertised 
        as discrete or dedicated graphics cards, emphasizing the distinction between these and integrated graphics. At the core 
        of both is the graphics processing unit (GPU), which is the main part that does the actual computations, but should not 
        be confused as the video card as a whole, although "GPU" is often used to refer to video cards.</p>
    </div>
    <div class="col-sm-6">  
        <div id="carouselId2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId2" data-slide-to="1"></li>
                <li data-target="#carouselId2" data-slide-to="2"></li>
                <li data-target="#carouselId2" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="./images/g1.png">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/g2.jpg">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/g3.jpg">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/g4.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId2"  data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carouselId2" data-slide="next">
                <span class="carousel-control-next-icon" ></span>
            </a>
        </div>
    </div>
</div>

<?php  require_once "./footer.php" ?>