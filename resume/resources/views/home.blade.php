@extends('layouts.master')

@section('content')
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Ulises Martinez</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Skills</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Projects</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
      <div id="video-container">
        <video autoplay="" loop="" class="vcover" poster= {{ asset("img/typing.jpg") }} >
            <source src= {{ asset("img/typing.mp4") }} type="video/mp4">
            <source src= {{ asset("images/typing.webm") }} type="video/webm">
            <img src= {{ asset("images/fallback3.jpg") }} title="not_supported"  alt="lol">
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
                    <div class="row" id="vis">
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
                    <div class="row" id="projects" >
                    </div>
                    <!-- /.row (nested) -->
			<a href="#" class="btn btn-dark" id="repo_link">Repo</a>
                    <a href="#" class="btn btn-dark" id="loadMore" >View More Items</a>
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
                        <li><i class="fa fa-phone fa-fw"></i> +1(915) 790 8009</li>
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
                            <a href="https://linkedin.com/ulimartinez"><i class="fa fa-linkedin fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>
@endsection

@section('javascript')
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


	function render_random(repos){
		var random = Math.floor(Math.random() * Math.floor(repos.length));
		var repo_name = repos[random].full_name;
		$.ajax({
			headers: {
				'Authorization': 'token {{config('services.github.token')}}'
			},
			dataType: 'json',
			url: "https://api.github.com/repos/" + repo_name + "/readme",
			success: function(data) {
				var readme_url = data.download_url;
				console.log(readme_url);
				console.log(data);
				$.ajax({
					url: readme_url.replace("raw.githubusercontent.com", "cdn.jsdelivr.net/gh").replace("/master", "@master"),
					success: function(data){
						$('#projects').html(marked(data));
						$('#repo_link').attr('href', 'https://github.com/' + repo_name);
					}
				});
			},
			error: function(){
				render_random(repos);
			}
		});
	}
	function get_repos(){
		var repos = [];
		$.ajax({
			headers: {
				'Authorization': 'token {{config('services.github.token')}}'
			},
			dataType: 'json',
			url: 'https://api.github.com/users/ulimartinez/repos',
		}).done(function(data) {
			render_random(data);
		});
	}

        $(function() {
		var repos = [];
		$.ajax({
			headers: {
				'Authorization': 'token {{config('services.github.token')}}'
			},
			dataType: 'json',
			url: 'https://api.github.com/users/ulimartinez/repos',
		}).done(function(data) {
			render_random(data);
		});

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

	$('#loadMore').click(function(e){ e.preventDefault(); get_repos() });
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

        function bubbleChart() {
            const width = 940;
            const height = 800;

            // location to centre the bubbles
            const centre = { x: width/2, y: height/2 };

            // strength to apply to the position forces
            const forceStrength = 0.03;

            // these will be set in createNodes and chart functions
            let svg = null;
            let bubbles = null;
            let labels = null;
            let nodes = [];

            // charge is dependent on size of the bubble, so bigger towards the middle
            function charge(d) {
                return Math.pow(d.radius, 2.0) * 0.01
            }

            // create a force simulation and add forces to it
            const simulation = d3.forceSimulation()
                .force('charge', d3.forceManyBody().strength(charge))
                // .force('center', d3.forceCenter(centre.x, centre.y))
                .force('x', d3.forceX().strength(forceStrength).x(centre.x))
                .force('y', d3.forceY().strength(forceStrength).y(centre.y))
                .force('collision', d3.forceCollide().radius(d => d.radius + 1));

            function dragstarted(d) {
                if (!d3.event.active) simulation.alphaTarget(0.3).restart()
                d.fx = d.x;
                d.fy = d.y;
            }

            function dragged(d) {
                d.fx = d3.event.x;
                d.fy = d3.event.y;
            }

            function dragended(d) {
                if (!d3.event.active) simulation.alphaTarget(0);
                d.fx = null;
                d.fy = null;
            }

            // force simulation starts up automatically, which we don't want as there aren't any nodes yet
            simulation.stop();


            // data manipulation function takes raw data from csv and converts it into an array of node objects
            // each node will store data and visualisation values to draw a bubble
            // rawData is expected to be an array of data objects, read in d3.csv
            // function returns the new node array, with a node for each element in the rawData input
            function createNodes(rawData) {
                // use max size in the data as the max in the scale's domain
                // note we have to ensure that size is a number
                const maxSize = 100;

                // size bubbles based on area
                const radiusScale = d3.scaleSqrt()
                    .domain([0, maxSize])
                    .range([0, 100]);

                // use map() to convert raw data into node data
                const myNodes = rawData.map(d => ({
                    ...d,
                    radius: radiusScale(+d.Count),
                    size: +d.Count,
                    x: Math.random() * 900,
                    y: Math.random() * 800
                }));

                return myNodes;
            }

            // main entry point to bubble chart, returned by parent closure
            // prepares rawData for visualisation and adds an svg element to the provided selector and starts the visualisation process
            let chart = function chart(selector, rawData) {
                // convert raw data into nodes data
                nodes = createNodes(rawData);

                // create svg element inside provided selector
                svg = d3.select(selector)
                    .append('svg')
                    .attr('width', width)
                    .attr('height', height);

                // bind nodes data to circle elements
                const elements = svg.selectAll('.bubble')
                    .data(nodes, d => d.id)
                    .enter()
                    .append('g');

                bubbles = elements
                    .append('circle')
                    .classed('bubble', true)
                    .attr('r', d => d.radius)
                    .attr('fill', "#FFFFFF").call(d3.drag()
                        .on("start", dragstarted)
                        .on("drag", dragged)
                        .on("end", dragended));

                // labels
                labels = elements
                    .append('text')
                    .attr('dy', '.3em')
                    .style('text-anchor', 'middle')
                    .style('font-size', 10)
                    .text(d => d.Name)
                    .attr("fill", "#337ab7");

                // set simulation's nodes to our newly created nodes array
                // simulation starts running automatically once nodes are set
                simulation.nodes(nodes)
                    .on('tick', ticked)
                    .restart();
            };

            // callback function called after every tick of the force simulation
            // here we do the actual repositioning of the circles based on current x and y value of their bound node data
            // x and y values are modified by the force simulation
            function ticked() {
                bubbles
                    .attr('cx', d => d.x)
                    .attr('cy', d => d.y);

                labels
                    .attr('x', d => d.x)
                    .attr('y', d => d.y)
            }

            // return chart function from closure
            return chart;
        }



        let myBubbleChart = bubbleChart();

        // function called once promise is resolved and data is loaded from csv
        // calls bubble chart function to display inside #vis div



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

        function display(dataset) {
            myBubbleChart('#vis', dataset);
        }

        display(dataset.children);

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
@endsection
