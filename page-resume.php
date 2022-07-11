<?php
$current_user = wp_get_current_user();
$user_id = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Resume</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My Resume">
    <meta name="author" content="My Resume">
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- FontAwesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Global CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">

</head>

<body>
    <!-- ******HEADER****** -->
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <img class="profile-image float-start rounded-circle" style="width:128px !important;height:128px !important;" src="<?php the_field('photo', 'user_1'); ?>" alt="profile image" />
                    <div class="profile-content">
                        <h1 class="name"><?php echo get_bloginfo('name'); ?></h1>
                        <h2 class="desc"><?php echo get_bloginfo('description'); ?></h2>
                        <ul class="social list-inline">
                            <li class="list-inline-item"><a href="<?php the_field('facebook', 'user_' . $user_id); ?>"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="<?php the_field('twitter', 'user_' . $user_id); ?>"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="<?php the_field('github', 'user_' . $user_id); ?>"><i class="fab fa-github-alt"></i></a></li>
                            <li class="list-inline-item"><a href="<?php the_field('instagram', 'user_' . $user_id); ?>"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item last-item"><a href="<?php the_field('tiktok', 'user_' . $user_id); ?>"><i class="fab fa-tiktok"></i></a></li>
                        </ul>
                    </div>
                    <!--//profile-->
                </div>
                <!--//col-->
                <div class="col-12 col-md-auto">
                    <div class="dark-mode-switch d-flex">
                        <div class="form-check form-switch mx-auto mx-md-0">
                            <input type="checkbox" class="form-check-input me-2" id="darkSwitch" />
                            <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                        </div>
                    </div>
                    <!--//dark-mode-switch-->
                    <a class="btn btn-cta-primary" href="mailto:<?php echo get_bloginfo('admin_email'); ?>" target="_blank"><i class="fas fa-paper-plane"></i> Contact Me</a>
                </div>
                <!--//col-->
            </div>
            <!--//row-->
        </div>
        <!--//container-->
    </header>
    <!--//header-->

    <div class="container sections-wrapper py-5">
        <div class="row">
            <div class="primary col-lg-8 col-12">
                <section class="about section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>

                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </section>
                <!--//section-->

                <section class="latest section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Latest Projects</h2>
                        <div class="content">

                            <div class="item featured text-center">

                                <div class="featured-image has-ribbon">
                                    <a href="#" target="_blank">
                                        <img class="img-fluid project-image rounded shadow-sm" src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/project-featured.png" alt="project name" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                    </div>
                                </div>

                                <h3 class="title mb-3"><a href="#/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank">Launch - The perfect Bootstrap template for SaaS products</a></h3>

                                <div class="desc text-start">
                                    <p>You can promote your main project here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                                </div>
                                <!--//desc-->
                                <a class="btn btn-cta-secondary" href="#/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank"><i class="fas fa-thumbs-up"></i> Back my project</a>
                            </div>
                            <!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-12" href="#/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/project-1.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="#/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/" target="_blank">CoderPro - Boootstrap Startup Template For Software Projects</a></h3>
                                    <p class="mb-2">You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="#/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div>
                                <!--//desc-->
                            </div>
                            <!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-12" href="#/bootstrap-templates/resume/devcard-bootstrap-4-vcard-portfolio-template-for-software-developers/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/project-2.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="#/bootstrap-templates/resume/devcard-bootstrap-4-vcard-portfolio-template-for-software-developers/" target="_blank">DevCard - Boootstrap Portfolio Template for Software Developers</a></h3>
                                    <p class="mb-2">You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="#/bootstrap-templates/resume/devcard-bootstrap-4-vcard-portfolio-template-for-software-developers/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div>
                                <!--//desc-->
                            </div>
                            <!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-12" href="#/bootstrap-templates/resume/instance-bootstrap-portfolio-theme-for-developers/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/project-3.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="#/bootstrap-templates/resume/instance-bootstrap-portfolio-theme-for-developers/" target="_blank">Instance - Boootstrap Portfolio Template for Aspiring Full Stack Developers</a></h3>
                                    <p class="mb-2">You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="#/bootstrap-templates/resume/instance-bootstrap-portfolio-theme-for-developers/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div>
                                <!--//desc-->
                            </div>
                            <!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-12" href="#/bootstrap-templates/startup/bootstrap-template-for-mobile-apps-nova-pro/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/project-4.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="#/bootstrap-templates/startup/bootstrap-template-for-mobile-apps-nova-pro/" target="_blank">Nova Pro - Boootstrap Template for Mobile Startups</a></h3>
                                    <p class="mb-2">You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus.</p>
                                    <p><a class="more-link" href="#/bootstrap-templates/startup/bootstrap-template-for-mobile-apps-nova-pro/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div>
                                <!--//desc-->
                            </div>
                            <!--//item-->
                            <div class="item row">
                                <a class="col-md-4 col-12" href="#/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/project-5.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="#/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/" target="_blank">DevStudio - Boootstrap Template for WebDev Agencies and Freelance Developers</a></h3>
                                    <p class="mb-2"> You can put one of your secondary projects here. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                                    <p><a class="more-link" href="#/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div>
                                <!--//desc-->
                            </div>
                            <!--//item-->

                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </section>
                <!--//section-->

                <section class="projects section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Other Projects</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><a href="#/bootstrap-templates/resume/free-bootstrap4-resume-cv-template-for-developers-pillar/" target="_blank">Pillar - Free Boootstrap Resume/CV Template for Developers</a> <span class="badge badge-theme">Free</span></h3>
                                <p class="summary">Provide a brief description of your project. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatu.</p>
                                <p><a class="more-link" href="#/bootstrap-templates/resume/free-bootstrap4-resume-cv-template-for-developers-pillar/" target="_blank"><i class="fas fa-external-link-alt"></i>Download Now</a></p>
                            </div>
                            <!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="#/bootstrap-templates/speciality/devblog-free-bootstrap-4-blog-template-for-developers/" target="_blank">DevBlog - Free Boootstrap Blog Template for Developers</a> <span class="badge badge-theme">Free</span></h3>
                                <p class="summary">Provide a brief description of your project. Maecenas ornare ultricies risus, in fermentum augue consectetur in. Vestibulum vitae mauris iaculis, sollicitudin velit in, molestie nulla. </p>
                                <p><a class="more-link" href="#/bootstrap-templates/speciality/devblog-free-bootstrap-4-blog-template-for-developers/" target="_blank"><i class="fas fa-external-link-alt"></i>Download Now</a></p>
                            </div>
                            <!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="#/bootstrap-templates/startup/nova-bootstrap-landing-page-template-for-mobile-apps/" target="_blank">Nova - Free App Landing Page Template for App Developers</a> <span class="badge badge-theme">Free</span></h3>
                                <p class="summary">Provide a brief description of your project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel purus enim. Etiam tortor felis, fermentum ac ultrices sed.</p>
                                <p><a class="more-link" href="#/bootstrap-templates/startup/nova-bootstrap-landing-page-template-for-mobile-apps/" target="_blank"><i class="fas fa-external-link-alt"></i>Download Now</a></p>
                            </div>
                            <!--//item-->

                            <a class="btn btn-cta-secondary" href="#">More on GitHub <i class="fas fa-chevron-right pt-1"></i></a>

                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </section>
                <!--//section-->

                <section class="experience section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Co-Founder & Lead Developer - <span class="place"><a href="#">Startup Hub</a></span> <span class="year">(2022 - Present)</span></h3>
                                <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.</p>
                            </div>
                            <!--//item-->
                            <div class="item">
                                <h3 class="title">Software Engineer - <span class="place"><a href="#">Google</a></span> <span class="year">(2019 - 2022)</span></h3>
                                <p>Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                            </div>
                            <!--//item-->

                            <div class="item">
                                <h3 class="title">Software Engineer - <span class="place"><a href="#">eBay</a></span> <span class="year">(2018 - 2019)</span></h3>
                                <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                            </div>
                            <!--//item-->

                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </section>
                <!--//section-->
            </div>
            <!--//primary-->
            <div class="secondary col-lg-4 col-12">
                <aside class="info aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Location:</span>San Francisco, US</li>
                                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span><a href="#"><?php echo $current_user->user_email; ?></a></li>
                                <li><i class="fas fa-link"></i><span class="sr-only">Website:</span><a href="#"><?php echo $current_user->user_url; ?></a></li>
                            </ul>
                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
                <!--//aside-->

                <aside class="skills aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            <p class="intro">
                                Intro about your skills goes here. Keep the list lean and only show your primary skillset. You can always provide a link to your Linkedin or Github profile so people can get more info there.</p>

                            <div class="skillset">

                                <div class="item">
                                    <h3 class="level-title">Python &amp; Django<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Expert</span></h3>

                                    <div class="level-bar progress">
                                        <div class="progress-bar level-bar-inner" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="96"></div>
                                    </div>
                                    <!--//level-bar-->
                                </div>
                                <!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Javascript &amp; jQuery<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Expert</span></h3>
                                    <div class="level-bar progress">
                                        <div class="progress-bar level-bar-inner" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="94"></div>
                                    </div>
                                    <!--//level-bar-->
                                </div>
                                <!--//item-->

                                <div class="item">
                                    <h3 class="level-title">HTML5, CSS3, SASS &amp; LESS<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Expert</span></h3>
                                    <div class="level-bar progress">
                                        <div class="progress-bar level-bar-inner" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="96"></div>
                                    </div>
                                    <!--//level-bar-->
                                </div>
                                <!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Ruby on Rails<span class="level-label" data-bs-toggle="tooltip" data-placement="left" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Pro</span></h3>
                                    <div class="level-bar progress">
                                        <div class="progress-bar level-bar-inner" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="96"></div>
                                    </div>
                                    <!--//level-bar-->
                                </div>
                                <!--//item-->

                                <p><a class="more-link" href="#"><i class="fas fa-external-link-alt"></i>More on GitHub</a></p>
                            </div>
                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
                <!--//section-->

                <aside class="testimonials aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">
                                    <p><i class="fas fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                </blockquote>
                                <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>
                            </div>
                            <!--//item-->

                            <p><a class="more-link" href="#"><i class="fas fa-external-link-alt"></i>More on Linkedin</a></p>

                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
                <!--//section-->

                <aside class="education aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Education</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> MSc Computer Science</h3>
                                <h4 class="university">University College London <span class="year">(2017-2018)</span></h4>
                            </div>
                            <!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> BSc Computer Science</h3>
                                <h4 class="university">University of Bristol <span class="year">(2013-2017)</span></h4>
                            </div>
                            <!--//item-->
                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
                <!--//section-->

                <aside class="languages aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Languages</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>English:</strong></span>
                                    <span class="level">Native Speaker <br class="visible-xs" /><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                                </li>
                                <!--//item-->
                                <li class="item">
                                    <span class="title"><strong>Spanish:</strong></span>
                                    <span class="level">Professional Proficiency <br class="visible-sm visible-xs" /><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half"></i></span>
                                </li>
                                <!--//item-->
                            </ul>
                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
                <!--//section-->

                <aside class="blog aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Latest Blog Posts</h2>
                        <p>You can use Sascha Depold's <a href="https://github.com/sdepold/jquery-rss" target="_blank">Vanilla RSS plugin</a> to pull in your blog post feeds.</p>
                        <div id="rss-feeds" class="content">

                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
                <!--//section-->

                <aside class="list music aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Favourite coding music</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">Ut sollicitudin in mauris non auctor</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">Duis et felis bibendum</a></li>
                            </ul>
                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
                <!--//section-->

                <aside class="list conferences aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Conferences</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="far fa-calendar-alt"></i> <a href="#" target="_blank">WWDC 2030</a> (San Francisco)</li>
                                <li><i class="far fa-calendar-alt"></i> <a href="#">Hive</a> (Seattle)</li>
                            </ul>
                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
                <!--//section-->

                <aside class="credits aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Credits</h2>
                        <div class="content">
                            <ul class="list-unstyled pb-2">
                                <li><a href="https://getbootstrap.com/" target="_blank"><i class="fas fa-external-link-alt"></i>Bootstrap</a></li>
                                <li><a href="https://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fas fa-external-link-alt"></i>FontAwesome</a></li>
                                <li><a href="https://github.com/IonicaBizau/github-calendar" target="_blank"><i class="fas fa-external-link-alt"></i>GitHub Calendar Plugin</a></li>

                                <li><a href="https://caseyscarborough.com/projects/github-activity/" target="_blank"><i class="fas fa-external-link-alt"></i>GitHub Activity Stream</a></li>

                                <li><a href="https://github.com/sdepold/vanilla-rss" target="_blank"><i class="fas fa-external-link-alt"></i>Vanilla RSS</a></li>
                                <li><a href="https://github.com/coliff/dark-mode-switch"><i class="fas fa-external-link-alt"></i>Dark Mode Switch</a></li>

                            </ul>

                            <hr />

                            <p class="pt-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                                layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                                'Content here, content here'.</p>
                            <p>If you’d like to <strong>learn about website development</strong>, you can <a href="#/bootstrap-templates/resume#/" target="_blank">Learn from here</a>.</p>

                            <a class="btn btn-cta-primary btn-download" href="#/bootstrap-templates/resume/#/" target="_blank"><i class="fas fa-download"></i> Download Report</a>
                            <hr />
                            <h5 class="subheading pt-3">Want more free tutorials on website development?</h5>
                            <p>Check out our <a href="#/bootstrap-templates/free/">collection of free tutorials are here.</a></p>
                            <p>Follow <a href="#" target="_blank">My Theme</a> on twitter so you don't miss any future updates!</p>

                            <a class="btn btn-cta-secondary btn-follow" href="#" target="_blank"><i class="fab fa-twitter"></i> Follow on twitter</a>

                        </div>
                        <!--//content-->
                    </div>
                    <!--//section-inner-->
                </aside>
                <!--//section-->

            </div>
            <!--//secondary-->
        </div>
        <!--//row-->
    </div>
    <!--//masonry-->

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="container text-center">
            <p class="copyright">Made for Wordpress Theme</p>
        </div>
        <!--//container-->
    </footer>
    <!--//footer-->

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous" defer></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/rss.global.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/dark-mode-switch@1.0.0/dark-mode-switch.min.js" defer></script>
    <!-- github calendar plugin -->
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js" defer></script>
    <!-- custom js -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" defer></script>
</body>

</html>