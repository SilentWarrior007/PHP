<?php  require_once "./header.php" ?>

<div id="color">
<h1 class="myhead3">AMD Processors</h1>
<div class="row text-justify">
    <div class="col-sm-6"> 
        <h3>AMD Ryzen™ Threadripper™ and Ryzen 3, 5 and 7</h3>
        <p>From the beginning, the AMD Ryzen™ Threadripper™ processor was designed for the world’s fastest and most premium 
            desktop systems. But it also started small: a small skunkworks team of enthusiasts at AMD believed that the users 
            of such systems needed and wanted more than an 8-core AMD Ryzen CPU. The rest is legend. The pace of progress for 
            AMD—and the overall HEDT market—since that little idea has been breathtaking. Where 10 cores once cost $1723 USD 
            (Core i7-6950X), the 1st Gen Ryzen Threadripper CPU delivered 16 cores at half the cost (a 2.5X price/perf leap 
            in one generation).1 Threadripper also delivered the world’s first 16-core desktop CPU, and we challenged our 
            competitor to step it up. Where PCIe® lanes once pointlessly varied with the CPU in the socket, Threadripper made 
            an always-on 64 lanes table stakes. All of that fed into phenomenal acclaim: Ryzen and Threadripper collected 
            550+ industry awards and accolades in 2017.</p>
    </div>
    <div class="col-sm-6">  
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
                <li data-target="#carouselId" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="./images/p1.png">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/p2.png">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/p3.jpg">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/p4.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId"  data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carouselId" data-slide="next">
                <span class="carousel-control-next-icon" ></span>
            </a>
        </div>
    </div>
</div>

<br>

<div class="row text-justify">
    <div class="col-sm-6"> 
        <h3>AMD EPYC</h3>
        <p>Epyc is a brand of x86-64 microprocessors designed and marketed by AMD based on the company's Zen microarchitecture 
        specifically targeted for server and embedded system markets. It was introduced in June 2017. Epyc processors share 
        the same microarchitecture as its regular desktop-grade counterparts but have enterprise-graded features such as higher 
        core counts, more PCI Express lanes, support for larger amounts of RAM, and larger cache memory. It also supports 
        multi-chip and dual-socket system configurations through the Infinity Fabric interchip interconnect.</p>
        <p>The platform includes one- and two-socket systems. In multi-processor configurations, two Epyc CPUs communicate 
        via AMD's Infinity Fabric. Each server chip supports 8 channels of memory and 128 PCIe 3.0 lanes, of which 64 lanes 
        from each are used for CPU-to-CPU communication through Infinity Fabric when installed in a dual-processor configuration. 
        All Epyc processors are composed of four eight-core Zeppelin dies (the same die as found in Ryzen processors) in a 
        multi-chip module, with the varying product core counts produced by symmetrically disabling cores of each core complex 
        on each Zeppelin die.</p>
    </div>
    <div class="col-sm-6">  
        <div id="carouselId1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId1" data-slide-to="1"></li>
                <li data-target="#carouselId1" data-slide-to="2"></li>
                <li data-target="#carouselId1" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="./images/p5.jpg">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/p6.jpg">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/p7.png">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="./images/p8.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId1"  data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carouselId1" data-slide="next">
                <span class="carousel-control-next-icon" ></span>
            </a>
        </div>
    </div>
</div>

<?php  require_once "./footer.php" ?>