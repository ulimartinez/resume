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
        <video autoplay muted playsinline loop class="vcover" poster={{ asset("img/typing.jpg") }}>
            <source src={{ asset("img/typing.mp4") }} type="video/mp4">
            <source src={{ asset("img/typing.webm") }} type="video/webm">
            <img src={{ asset("img/fallback3.jpg") }} title="not_supported" alt="Typing background">
        </video>
      </div>
        <div class="profile">
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
			<a href="https://github.com/ulimartinez" class="btn btn-dark" id="repo_link" target="_blank" rel="noopener noreferrer">Open repo</a>
                    <a href="#" class="btn btn-dark" id="loadMore">View another project</a>
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


    var repoCache = [];
    var currentRepo = null;

    function escapeHtml(text) {
        return $('<div>').text(text || '').html();
    }

    function pickRandomRepo(repos) {
        var candidates = repos.filter(function(repo) {
            return repo && !repo.fork && !repo.archived && repo.html_url;
        });

        if (!candidates.length) {
            return null;
        }

        if (currentRepo && candidates.length > 1) {
            candidates = candidates.filter(function(repo) {
                return repo.full_name !== currentRepo.full_name;
            });
        }

        if (!candidates.length) {
            candidates = repos.filter(function(repo) {
                return repo && repo.html_url;
            });
        }

        return candidates[Math.floor(Math.random() * candidates.length)];
    }

    function renderRepo(repo, markdown) {
        var title = escapeHtml(repo.name || repo.full_name);
        var description = repo.description ? '<p class="lead">' + escapeHtml(repo.description) + '</p>' : '';

        $('#projects').html(
            '<div class="repo-feature">' +
                '<p class="text-muted">Random public GitHub repo</p>' +
                '<h3>' + title + '</h3>' +
                description +
                '<div class="repo-markdown">' + marked.parse(markdown) + '</div>' +
            '</div>'
        );

        $('#repo_link').attr({
            href: repo.html_url,
            target: '_blank',
            rel: 'noopener noreferrer'
        }).text('Open repo');
    }

    function renderFallback(repo) {
        var description = repo.description ? escapeHtml(repo.description) : 'Public repository with no README available.';

        $('#projects').html(
            '<div class="repo-feature">' +
                '<p class="text-muted">Random public GitHub repo</p>' +
                '<h3>' + escapeHtml(repo.name || repo.full_name) + '</h3>' +
                '<p>' + description + '</p>' +
            '</div>'
        );

        $('#repo_link').attr({
            href: repo.html_url,
            target: '_blank',
            rel: 'noopener noreferrer'
        }).text('Open repo');
    }

    function loadReadme(repo) {
        $.ajax({
            dataType: 'json',
            url: 'https://api.github.com/repos/' + repo.full_name + '/readme'
        }).done(function(data) {
            if (!data.download_url) {
                renderFallback(repo);
                return;
            }

            $.ajax({
                url: data.download_url,
                dataType: 'text',
                success: function(markdown) {
                    renderRepo(repo, markdown);
                },
                error: function() {
                    renderFallback(repo);
                }
            });
        }).fail(function() {
            renderFallback(repo);
        });
    }

    function loadRandomProject() {
        if (repoCache.length) {
            currentRepo = pickRandomRepo(repoCache);

            if (!currentRepo) {
                $('#projects').html('<p class="lead">No public repos found.</p>');
                return;
            }

            loadReadme(currentRepo);
            return;
        }

        $.ajax({
            dataType: 'json',
            url: 'https://api.github.com/users/ulimartinez/repos?per_page=100&sort=updated&type=owner'
        }).done(function(data) {
            repoCache = data.filter(function(repo) {
                return repo && !repo.fork && !repo.archived;
            });
            loadRandomProject();
        }).fail(function() {
            $('#projects').html('<p class="lead">GitHub is unavailable right now, so the projects feed could not load.</p>');
            $('#repo_link').attr({
                href: 'https://github.com/ulimartinez',
                target: '_blank',
                rel: 'noopener noreferrer'
            }).text('GitHub profile');
        });
    }

        $(document).ready(function() {
            loadRandomProject();

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

    $('#loadMore').click(function(e){ e.preventDefault(); loadRandomProject() });
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
            let scrollRaf = null;
            let scrollBound = false;

            const xForce = d3.forceX().strength(forceStrength).x(centre.x);
            const yForce = d3.forceY().strength(forceStrength).y(centre.y);

            // charge is dependent on size of the bubble, so bigger towards the middle
            function charge(d) {
                return Math.pow(d.radius, 2.0) * 0.01
            }

            // create a force simulation and add forces to it
            const simulation = d3.forceSimulation()
                .force('charge', d3.forceManyBody().strength(charge))
                // .force('center', d3.forceCenter(centre.x, centre.y))
                .force('x', xForce)
                .force('y', yForce)
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

            function updateScrollGravity() {
                const maxScroll = Math.max(1, document.documentElement.scrollHeight - window.innerHeight);
                const progress = Math.max(0, Math.min(1, window.pageYOffset / maxScroll));
                const wobbleX = (progress - 0.5) * 180;
                const wobbleY = Math.sin(progress * Math.PI * 2) * 120;

                xForce.x(centre.x + wobbleX);
                yForce.y(centre.y + wobbleY);
                simulation.alpha(0.35).restart();
            }

            function bindScrollGravity() {
                if (scrollBound) {
                    return;
                }

                scrollBound = true;

                window.addEventListener('scroll', function() {
                    if (scrollRaf) {
                        return;
                    }

                    scrollRaf = window.requestAnimationFrame(function() {
                        scrollRaf = null;
                        updateScrollGravity();
                    });
                }, { passive: true });

                window.addEventListener('resize', function() {
                    updateScrollGravity();
                });
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
                    .attr('height', height)
                    .attr('viewBox', '0 0 ' + width + ' ' + height)
                    .attr('preserveAspectRatio', 'xMidYMid meet');

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
                    .style('font-size', d => Math.max(12, Math.min(24, d.radius * 0.28)) + 'px')
                    .style('font-weight', 700)
                    .style('paint-order', 'stroke')
                    .style('stroke', 'rgba(255,255,255,0.7)')
                    .style('stroke-width', '3px')
                    .text(d => d.Name)
                    .attr("fill", "#337ab7");

                // set simulation's nodes to our newly created nodes array
                // simulation starts running automatically once nodes are set
                simulation.nodes(nodes)
                    .on('tick', ticked)
                    .restart();

                updateScrollGravity();
                bindScrollGravity();
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

    </script>
@endsection
