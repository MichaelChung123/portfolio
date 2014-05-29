
<?php include('head.php'); ?>

<body>
<div class="wrapper">

    <nav class="nav" role="navigation">
        <header>
            <div class="logo"><a href="index.php"><h1 class="initial">D</h1><h2 class="name">DANIEL DESTEFANIS</h2></a></div>
        </header>
        <!-- <a href="index.php"><img class="logo" src="img/medium-logo.png" alt="Daniel Destefanis Portfolio"></a> -->
        <div class="nav-bar">
            <ul class="nav-links">
                <li><a href="#work">Work</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div class="overlay group">
            <div class="item one-third">
                <?php include('svg/left-side-frames.php'); ?>
            </div>
            <header class="hero-header item one-third" role="banner">
                <div class="circle"></div>
                <h1>Daniel Destefanis</h1>
                <h5>Web Design & Front End Development</h5>
            </header>
            <div class="item one-third">
                <?php include('svg/right-side-frames.php'); ?>
            </div>
        </div>
    </section>

    <div class="divider">
        <h2 id="work" class="h2">Recent Client Work</h2>
    </div>

    <main class="section" role="main">
    	<div class="group">
            <figure class="item two-thirds">
                <img class="work-image" src="img/krispyfringe.png" 
                alt="KrispyFringe Vintage Store Desktop Image" width="900" height="463">
            </figure>
            <article class="work-content item one-third">
                <header>
                    <h4 class="h4">KrispyFringe Vintage<h4>
                    <h6 class="sub-header">Web Design / Responsive Design / Custom Wordpress Site</h6>
                </header>
                <p class="p client-paragraph">
                    I created a new Wordpress site for a local Chicago vintage 
                    clothing store, Krispyfringe Vintage. They needed a site 
                    that provided content management while still capturing 
                    their stores unique aesethtic and product selection.
                    Using <a target="_blank" href="http://320press.com/themes/wp-bootstrap/">320Press's WP-Bootstrap</a>
                    as a starting point, the end result was elegant, responsive 
                    design, with Etsy integration, that could easily be maintained by their staff.
                </p>
                <a class="project-link" href="krispyfringe.php">View Project</a>
            </article>
        </div>
    </main>

    <section class="section alternate">
        <div class="group">
            <figure class="item two-thirds">
                <img class="work-image" src="img/bootcamp.png" 
                alt="Northside Bootcamp Website" width="900" height="463">
            </figure>
            <article class="work-content item one-third">
                <header>
                    <h4 class="h4">Northside Bootcamp<h4>
                    <h6 class="sub-header">Web Design / Responsive Design / Custom Wordpress Site</h6>
                </header>
                <p class="p client-paragraph">
                    The owner and sole employee of this women's fitness bootcamp 
                    needed a site that he could run entirely on his own.
                    We worked together to give Northside Bootcamp a new contemporary
                    look while providing his users with a mobile friendly experience.
                </p>
                <a class="project-link" href="northside-bootcamp.php">View Project</a>
            </article>
        </div>
    </section>

    <section class="section">
        <div class="group">
            <figure class="item two-thirds">
                <img class="work-image" src="img/studio-within.png" 
                alt="Studio Within Website" width="900" height="463">
            </figure>
            <article class="work-content item one-third">
                <header>
                    <h4 class="h4">Studio Within<h4>
                    <h6 class="sub-header">Web Design / Responsive Design</h6>
                </header>
                <p class="p client-paragraph">
                    This local Chicago saloon and spa went through an interior 
                    redesign and business restructuring, but their previous website 
                    wasn't reflecting those changes. I worked with Studio Within
                    to build them a responsive website that captured their companies
                    identity and provided them a platform for online booking. 
                </p>
                <a class="project-link" href="studio-within.php">View Project</a>
            </article>
        </div>
    </section>

    <div class="divider">
        <h2 id="projects" class="h2">PROJECTS</h2>
    </div>

    <section class="section tiles">
        <div class="group">
            <figure class="project-tile">
                <a href="scroll-for-the-goal.php">
                    <img class="work-image thumb" src="img/scroll-thumb.jpg" 
                    alt="Scroll For the Goal" width="474" height="474">
                    <figcaption class="caption">Scroll For the Goal</figcaption>
                </a>
            </figure>
            <figure class="project-tile">
                <a href="cptt.php">
                    <img class="work-image thumb" src="img/cptt-thumb.jpg" 
                    alt="CPTT Site" width="474" height="474">
                    <figcaption class="caption">CPTT Site</figcaption>
                </a>
            </figure>
            <figure class="project-tile">
                <a href="columbia.php">
                    <img class="work-image thumb" src="img/columbia-thumb.jpg" 
                    alt="IAM Redesign" width="474" height="474">
                    <figcaption class="caption">IAM Redesign</figcaption>
                </a>
            </figure>
            <figure class="project-tile">
                <a href="poster.php">
                    <img class="work-image thumb" src="img/print-thumb.jpg" 
                    alt="UX Poster" width="474" height="474">
                    <figcaption class="caption">UX Poster</figcaption>
                </a>
            </figure>
            <figure class="project-tile">
                <a href="shirt-design.php">
                    <img class="work-image thumb" src="img/shirt-thumb.jpg" 
                    alt="Shirt Design" width="474" height="474">
                    <figcaption class="caption">Knuckle Puck Shirt</figcaption>
                </a>
            </figure>
            <figure class="project-tile">
                <a href="cta.php">
                    <img class="work-image thumb" src="img/cta-thumb.jpg" 
                    alt="CTA Redesign" width="474" height="474">
                    <figcaption class="caption">CTA Redesign</figcaption>
                </a>
            </figure>
        </div>
    </section>

<?php include('footer.php'); ?>

    
