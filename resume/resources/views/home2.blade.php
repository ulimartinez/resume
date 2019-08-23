<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>

    <title>Ulises Martinez</title>

    <!-- Bootstrap Core CSS -->
    <link href="index_files/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="index_files/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="index_files/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="index_files/css.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick='$("#menu-close").click();'>Ulises Martinez</a>
            </li>
            <li>
                <a href="#top" onclick='$("#menu-close").click();'>Home</a>
            </li>
            <li>
                <a href="#about" onclick='$("#menu-close").click();'>About</a>
            </li>
            <li>
                <a href="#services" onclick='$("#menu-close").click();'>Skills</a>
            </li>
            <li>
                <a href="#portfolio" onclick='$("#menu-close").click();'>Projects</a>
            </li>
            <li>
                <a href="#contact" onclick='$("#menu-close").click();'>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
      <div id="video-container">
        <video autoplay="autoplay" loop="" class="vcover">
            <source src="index_files/typing.mp4" type="video/mp4">
            <source src="index_files/typing.webm" type="video/webm">
            <img src="index_files/fallback3.jpg" title="Your browser does not support the &lt;video&gt; tag">
        </video>
      </div>
        <div class="profile text-vertical-center">
            <h1>Ulises Martinez</h1>
            <br>
            <div class="round"></div>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Me</h2>
                    <p class="lead">I am a Computer Scientist, graduated from The University of Texas at El Paso. I love structure and order and strive for efficiency. Check out some of the things that I've worked on and feel free to <a href="#contact">contact</a> me</a>!</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>My skills</h2>
                    <hr class="small">
                    <div class="row" id="skills">
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>My Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="http://martechnologic.com/cookpal">
                                    <img class="img-portfolio img-responsive" src="index_files/portfolio-1.jpg">
                                </a>
                                <div class="portfolio-description">
                                  <p>CookPal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="http://martechnologic.com/bachego">
                                    <img class="img-portfolio img-responsive" src="index_files/portfolio-2.jpg">
                                </a>
                                <div class="portfolio-description">
                                  <p>BacheGO</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="http://ctis.utep.edu/">
                                    <img class="img-portfolio img-responsive" src="index_files/portfolio-3.jpg">
                                </a>
                                <div class="portfolio-description">
                                  <p>CTIS Website</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="index_files/portfolio-4.jpg">
                                </a>
                                <div class="portfolio-description">
                                  <p>Martech Agenda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="https://github.com/ulimartinez" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Professional Experience.</h3>
                    <a href="https://docs.google.com/document/d/1ME3oStiP4Rk-Gi_Ce8egoKDmdCL1Vfc3FVdbmfI2D5s/edit?usp=sharing" target="_blank" class="btn btn-lg btn-light" ;="">Resume</a>
                    <a href="https://github.com/ulimartinez" class="btn btn-lg btn-dark"><i class="fa fa-github"></i> Github</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Contact Me</strong>
                    </h4>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> +1(915) 449-0820</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:ulimartinez96@gmail.com">ulimartinez96@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://facebook.com/ulimartine"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/ulimartine"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href"https:="" linkedin.com="" ulimartinez"=""><i class="fa fa-linkedin fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg" style="display: none; position: fixed;"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="index_files/jquery.js"></script>

    <!-- d3 Core JavaScript -->
    <script src="index_files/d3.min.js"></script>

    <!-- d3 force JavaScript -->
    <script src="index_files/d3-force.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="index_files/bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    //portfolio item hover
    $(".portfolio-item").hover(function () {
      $(this).find('.portfolio-description').slideToggle("fast");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    </script>
    <script type="text/javascript">

        dataset = {
            "children": [
                {"Name":"C","Count":98},
                {"Name":"C++","Count":65},
                {"Name":"Java","Count":99},
                {"Name":"Php","Count":97},
                {"Name":"SQL","Count":76},
                {"Name":"d3","Count":71},
                {"Name":"Node","Count":60},
                {"Name":"Angular","Count":55},
                {"Name":"BASH","Count":98},
                {"Name":"Python","Count":99},
                {"Name":"MongoDB","Count":49},
                {"Name":"GIT","Count":87},
                {"Name":"Spring","Count":63},
                {"Name":"Servlet","Count":63},
                {"Name":"Code Igniter","Count":75}]
        };

        var diameter = 600;

        var bubble = d3.pack(dataset)
            .size([diameter, diameter])
            .padding(1.5);

        var svg = d3.select("#skills")
            .append("svg")
            .attr("width", diameter)
            .attr("height", diameter)
            .attr("class", "bubble")
            .attr("viewBox", "0 0 " + diameter + " " + diameter);

        var nodes = d3.hierarchy(dataset)
            .sum(function(d) { return d.Count; });
        console.log(nodes);

        var node = svg.selectAll(".node")
            .data(bubble(nodes).descendants())
            .enter()
            .filter(function(d){
                return  !d.children
            })
            .append("g")
            .attr("class", "node")
            .attr("transform", function(d) {
                return "translate(" + d.x + "," + d.y + ")";
            });

        node.append("title")
            .text(function(d) {
                return d.data.Name + ": " + d.data.Count + "%";
            });

        node.append("circle")
            .attr("r", function(d) {
                return d.r;
            })
            .style("fill", function(d,i) {
                return "white"
            });

        node.append("text")
            .attr("dy", ".2em")
            .style("text-anchor", "middle")
            .text(function(d) {
                return d.data.Name.substring(0, d.r / 3);
            })
            .attr("font-family", "sans-serif")
            .attr("font-size", function(d){
                return d.r/5;
            })
            .attr("font-weight", 700)
            .attr("fill", "#337ab7");

        d3.select(self.frameElement)
            .style("height", diameter + "px");

        var chart = $(".bubble"),
            aspect = chart.width() / chart.height(),
            container = chart.parent();
        $(window).on("resize", function() {
            var targetWidth = container.width();
            chart.attr("width", targetWidth);
            chart.attr("height", Math.round(targetWidth / aspect));
        }).trigger("resize");

    </script>




</body></html>