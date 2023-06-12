<?php
include_once('header.php');
?>

    <div class="main">

        <!--hero section start-->
        <section class="hero-slider-section bg-image hero-equal-height ptb-120 dark-bg" data-overlay="8">
            <div class="background-image-wraper" style="background: url('assets/img/domain.webp')no-repeat center center / cover; opacity: 1;"></div>
            <div class="owl-carousel owl-theme hero-slider-one custom-dot dot-bottom-center">
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-content-wrap text-white position-relative z-index">
                                    <span class="text-white h5 mb-3">Reliable hosting to make any website</span>
                                    <h1 class="text-white">We Offer Shared Hosting Fast, Secure & Easy To Manage</h1>
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="fa fa-check-circle text-info me-2"></span><strong>
                                    Unmetered</strong> Sub Domains, Accounts</li>
                                        <li class="py-1"><span class="fa fa-check-circle text-info me-2"></span><strong>
                                    99%</strong> Uptime Guarantee</li>
                                        <li class="py-1"><span class="fa fa-check-circle text-info me-2"></span><strong>
                                    45-Day</strong> Money-Back Guarantee</li>
                                    </ul>
                                    <div class="action-btns mt-4">
                                        <p>Get all the essentials features <strong>Starting at $2.59/mo</strong></p>
                                        <a href="#" class="btn btn-tertiary mr-3">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-md-none d-lg-block">
                                <div class="big-price-wrap position-relative">
                                    <div class="price-block d-flex justify-content-center text-white">
                                        <span class="price-currency">$</span>
                                        <div class="offer-price">5</div>
                                        <div class="right-block d-flex">
                                            <span class="cent-value">.99</span>
                                            <span class="per-value">/mo</span>
                                        </div>
                                    </div>
                                    <span class="d-block text-white regular-price text-center">Regular Price <strong>$10.99</strong> *</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-content-wrap text-white">
                                    <span class="text-white h5 font-weight-normal">Trusted by 700,500 Website Owners</span>
                                    <h1 class="text-white">Your Websites Deserve Faster, Secure & Reliable Hosting</h1>
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span
                                    class="fa fa-check-circle text-info me-2"></span>Industry-leading Performance
                                            & Speed</li>
                                        <li class="py-1"><span class="fa fa-check-circle text-info me-2"></span>Free &
                                            Effortless Migration</li>
                                        <li class="py-1"><span class="fa fa-check-circle text-info me-2"></span>Free SSL
                                            Certificates For ALL Websites</li>
                                        <li class="py-1"><span class="fa fa-check-circle text-info me-2"></span>99.9%
                                            Uptime Guarantee</li>
                                        <li class="py-1"><span class="fa fa-check-circle text-info me-2"></span>30-day
                                            Money-back Guarantee</li>
                                    </ul>
                                    <div class="action-btns mt-4">
                                        <a href="#" class="btn btn-tertiary mr-3">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-md-none d-lg-block">
                                <div class="image-wrap">
                                    <img src="assets/img/wordpress-icon.svg" alt="wordpress" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-content-wrap text-white">
                                    <span class="text-white h5 font-weight-normal">Build your own website</span>
                                    <h1 class="text-white">Own VPS, Fully Managed by Experts, Simple, affordable</h1>
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="fa fa-check-circle text-info me-2"></span>24/7
                                            fully managed support</li>
                                        <li class="py-1"><span
                                    class="fa fa-check-circle text-info me-2"></span>Industry-leading performance
                                            & load speed</li>
                                        <li class="py-1"><span class="fa fa-check-circle text-info me-2"></span>Robust
                                            control panel & advanced security</li>
                                        <li class="py-1"><span class="fa fa-check-circle text-info me-2"></span>99.9%
                                            Uptime Guarantee</li>
                                    </ul>
                                    <div class="action-btns mt-4">
                                        <a href="#" class="btn btn-tertiary mr-3">Get Started Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-md-none d-lg-block">
                                <div class="image-wrap">
                                    <img src="assets/img/web-hosting-icon.svg" alt="wordpress" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--hero section end-->

        <!--domain search promo start-->
        <section class="position-relative zindex-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8 col-12">
                        <div class="domain-search-wrap border gray-light-bg">
                            <h4 class="text-center">Looking For Domain Name?</h4>
                            <form action="domain-search-result.php" method="GET" class="domain-search-form my-4">
                                <input type="text" name="domain" id="domain" class="form-control" placeholder="yourdomainname" />
                                <div class="select-group">
                                    <select name="domainType" class="form-control">
                                        <option value="com" selected>.com</option>
                                        <option value="xyz">.xyz</option>
                                        <option value="net">.net</option>
                                        <option value="org">.org</option>
                                        <option value="store">.store</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search pe-1"></i> Search
                                    </button>
                                </div>
                            </form>
                            <div class="domain-list-wrap text-center">
                                <ul class="list-inline domain-search-list">
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/com.png" alt="com" width="70" class="img-fluid"> <span>$8.99</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/xyz.png" alt="com" width="70" class="img-fluid"> <span>$0.99</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/net.png" alt="com" width="70" class="img-fluid"> <span>$4.99</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/org.png" alt="com" width="70" class="img-fluid"> <span>$2.99</span></a>
                                    </li>
                                    <li class="list-inline-item bg-white border rounded"><a href="#"><img src="assets/img/store.png" alt="com" width="70" class="img-fluid"> <span>$0.99</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--domain search promo end-->

        <!--pricing section start-->
        <section id="pricing" class="pricing-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center mb-4">
                            <h2>Choose Your Web Hosting Plan</h2>
                            <p> Professional hosting at an affordable price. Distinctively recaptiualize principle-centered core competencies through client-centered core competencies. </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-md-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price bg-white pricing-new-wrapper mt-4 p-5 shadow-sm border">
                            <div class="pricing-price d-flex justify-content-between align-items-center pb-4">
                                <span class="p-icon">
              <i class="fa fa-rocket color-secondary"></i>
            </span>
                                <div class="h2 mb-0 text-dark"> $5.99 <span class="price-cycle h5">/mo</span>
                                </div>
                            </div>
                            <div class="pricing-info">
                                <h5>Basic</h5>
                                <p class="text-muted"> High performance, low cost hosting with SSD for the perfect starter plan. </p>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled pricing-feature-list-2 mt-4 mb-3">
                                    <li>
                                        <i class="fa fa-hdd me-2"></i>
                                        <p>
                                            <strong>5GB</strong> SSD Disk Space
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                      data-bs-title="SSD based cloud storage for awesome performance and reliability for your website.">
                  <i class="fa fa-info-circle ms-1"></i>
                </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-route me-2"></i>
                                        <p>
                                            <strong>Unmetered</strong> Brandwidth
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-safari me-2"></i>
                                        <p>
                                            <strong>Host 2</strong> Websites Hosted
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-mail-bulk me-2"></i>
                                        <p>
                                            <strong>Unlimited</strong> Emails Accounts
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                      data-bs-title="Create an unlimited number of mailboxes at no extra cost.">
                  <i class="fa fa-info-circle ms-1"></i>
                </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-globe me-2"></i>
                                        <p>
                                            <strong>Free</strong> Domain Name
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                      data-bs-title="On annual plans or higher. First year only.">
                  <i class="fa fa-info-circle ms-1"></i>
                </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-headset me-2"></i>
                                        <p>
                                            <strong>24/7</strong> Technical Support
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-upload me-2"></i>
                                        <p>
                                            <strong>99.9%</strong> Uptime Guarantee
                                        </p>
                                    </li>
                                </ul>
                                <a href="pricing-specifications.php" class="mb-4 d-block read-more-link">Full specifications <i
                class="fa fa-arrow-right ps-2"></i>
                                </a>
                                <a href="https://portal.xovenhost.com/cart.php?gid=1" class="btn btn-primary btn-block" target="_blank">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price bg-white pricing-new-wrapper mt-4 p-5 shadow-sm border">
                            <div class="pricing-price d-flex justify-content-between align-items-center pb-4">
                                <span class="p-icon">
              <i class="fa fa-space-shuttle color-secondary"></i>
            </span>
                                <div class="h2 mb-0 text-dark"> $8.99 <span class="price-cycle h5">/mo</span>
                                </div>
                            </div>
                            <div class="pricing-info">
                                <h5>Starter</h5>
                                <p class="text-muted"> High performance, low cost hosting with SSD for the perfect starter plan. </p>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled pricing-feature-list-2 mt-4 mb-3">
                                    <li>
                                        <i class="fa fa-hdd me-2"></i>
                                        <p>
                                            <strong>5GB</strong> SSD Disk Space
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                      data-bs-title="SSD based cloud storage for awesome performance and reliability for your website.">
                  <i class="fa fa-info-circle ms-1"></i>
                </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-route me-2"></i>
                                        <p>
                                            <strong>Unmetered</strong> Brandwidth
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-safari me-2"></i>
                                        <p>
                                            <strong>Host 2</strong> Websites Hosted
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-mail-bulk me-2"></i>
                                        <p>
                                            <strong>Unlimited</strong> Emails Accounts
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                      data-bs-title="Create an unlimited number of mailboxes at no extra cost.">
                  <i class="fa fa-info-circle ms-1"></i>
                </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-globe me-2"></i>
                                        <p>
                                            <strong>Free</strong> Domain Name
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                      data-bs-title="On annual plans or higher. First year only.">
                  <i class="fa fa-info-circle ms-1"></i>
                </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-headset me-2"></i>
                                        <p>
                                            <strong>24/7</strong> Technical Support
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-upload me-2"></i>
                                        <p>
                                            <strong>99.9%</strong> Uptime Guarantee
                                        </p>
                                    </li>
                                </ul>
                                <a href="pricing-specifications.php" class="mb-4 d-block read-more-link">Full specifications <i
                class="fa fa-arrow-right ps-2"></i>
                                </a>
                                <a href="https://portal.xovenhost.com/cart.php?gid=1" class="btn btn-primary btn-block" target="_blank">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="popular-price bg-white pricing-new-wrapper mt-4 p-5 shadow-sm border">
                            <div class="pricing-price d-flex justify-content-between align-items-center pb-4">
                                <span class="p-icon">
              <i class="fa fa-medal color-secondary"></i>
            </span>
                                <div class="h2 mb-0 text-dark"> $12.99 <span class="price-cycle h5">/mo</span>
                                </div>
                            </div>
                            <div class="pricing-info">
                                <h5>Professional</h5>
                                <p class="text-muted"> High performance, low cost hosting with SSD for the perfect starter plan. </p>
                            </div>
                            <div class="pricing-content">
                                <ul class="list-unstyled pricing-feature-list-2 mt-4 mb-3">
                                    <li>
                                        <i class="fa fa-hdd me-2"></i>
                                        <p>
                                            <strong>5GB</strong> SSD Disk Space
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                      data-bs-title="SSD based cloud storage for awesome performance and reliability for your website.">
                  <i class="fa fa-info-circle ms-1"></i>
                </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-route me-2"></i>
                                        <p>
                                            <strong>Unmetered</strong> Brandwidth
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-safari me-2"></i>
                                        <p>
                                            <strong>Host 2</strong> Websites Hosted
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-mail-bulk me-2"></i>
                                        <p>
                                            <strong>Unlimited</strong> Emails Accounts
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                      data-bs-title="Create an unlimited number of mailboxes at no extra cost.">
                  <i class="fa fa-info-circle ms-1"></i>
                </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-globe me-2"></i>
                                        <p>
                                            <strong>Free</strong> Domain Name
                                        </p>
                                        <span class="text-under-line" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                      data-bs-title="On annual plans or higher. First year only.">
                  <i class="fa fa-info-circle ms-1"></i>
                </span>
                                    </li>
                                    <li>
                                        <i class="fa fa-headset me-2"></i>
                                        <p>
                                            <strong>24/7</strong> Technical Support
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-upload me-2"></i>
                                        <p>
                                            <strong>99.9%</strong> Uptime Guarantee
                                        </p>
                                    </li>
                                </ul>
                                <a href="pricing-specifications.php" class="mb-4 d-block read-more-link">Full specifications <i
                class="fa fa-arrow-right ps-2"></i>
                                </a>
                                <a href="https://portal.xovenhost.com/cart.php?gid=1" class="btn btn-primary btn-block" target="_blank">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="support-cta text-center mt-5">
                            <a href="pricing-specifications.php">
                                <h5 class="mb-1">
                                    <span class="fa fa-rotate-left color-primary me-2"></span>Compare Hosting Plans
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--pricing section end-->

        <!--call to action start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">Best Cloud Hosting <br> With Trusted Service</h2>
                            <p>Objectively innovate high standards in methodologies vis-a-vis sustainable compellingly architect front-end methods
                                maintain multidisciplinary process proactively streamline mission-critical information via quality imperatives. </p>
                        </div>
                        <div class="action-btns mt-4">
                            <a href="#" class="btn btn-tertiary"> Get start now </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/cta-new.svg" class="img-fluid" alt="server room">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action end-->

        <!--application hosting section start-->
        <section class="appliction-hosting ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center">
                            <h2>Web Application Hosting With CMS</h2>
                            <p>
                                Build your website around your favourite app. Our 1-click installer
                                makes it easy to integrate hundreds of the latest, advanced web
                                applications.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="application-icon-wrap p-5 bg-white rounded-3">
                            <img src="assets/img/wordpress-icon-color.svg" width="45" alt="icon" class="mb-4" />
                            <div class="application-content">
                                <h3 class="h5">Wordpress Hosting</h3>
                                <p>
                                    Get started right away with the most popular website platform.
                                </p>
                                <div class="read-more-link">
                                    <a href="#" target="_blank" class="d-inline-flex align-items-center btn btn-sm">
                                        <span>Read More</span>
                                        <i class="fa fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="application-icon-wrap p-5 bg-white rounded-3">
                            <img src="assets/img/joomla-icon-color.svg" width="45" alt="icon" class="mb-4" />
                            <div class="application-content">
                                <h3 class="h5">Joomla Hosting</h3>
                                <p>
                                    Get started right away with this flexible CMS for your website.
                                </p>
                                <div class="read-more-link">
                                    <a href="#" target="_blank" class="d-inline-flex align-items-center btn btn-sm">
                                        <span>Read More</span>
                                        <i class="fa fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="application-icon-wrap p-5 bg-white rounded-3">
                            <img src="assets/img/wordpress-icon-color.svg" width="45" alt="icon" class="mb-4" />
                            <div class="application-content">
                                <h3 class="h5">Megento Hosting</h3>
                                <p>
                                    Start your web store today on our Magento web hosting platform.
                                </p>
                                <div class="read-more-link">
                                    <a href="#" target="_blank" class="d-inline-flex align-items-center btn btn-sm">
                                        <span>Read More</span>
                                        <i class="fa fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="application-icon-wrap p-5 bg-white rounded-3">
                            <img src="assets/img/wordpress-icon-color.svg" width="45" alt="icon" class="mb-4" />
                            <div class="application-content">
                                <h3 class="h5">Wordpress Hosting</h3>
                                <p>
                                    Get started right away with the most popular website platform.
                                </p>
                                <div class="read-more-link">
                                    <a href="#" target="_blank" class="d-inline-flex align-items-center btn btn-sm">
                                        <span>Read More</span>
                                        <i class="fa fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="application-icon-wrap p-5 bg-white rounded-3">
                            <img src="assets/img/joomla-icon-color.svg" width="45" alt="icon" class="mb-4" />
                            <div class="application-content">
                                <h3 class="h5">Joomla Hosting</h3>
                                <p>
                                    Get started right away with this flexible CMS for your website.
                                </p>
                                <div class="read-more-link">
                                    <a href="#" target="_blank" class="d-inline-flex align-items-center btn btn-sm">
                                        <span>Read More</span>
                                        <i class="fa fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="application-icon-wrap p-5 bg-white rounded-3">
                            <img src="assets/img/wordpress-icon-color.svg" width="45" alt="icon" class="mb-4" />
                            <div class="application-content">
                                <h3 class="h5">Megento Hosting</h3>
                                <p>
                                    Start your web store today on our Magento web hosting platform.
                                </p>
                                <div class="read-more-link">
                                    <a href="#" target="_blank" class="d-inline-flex align-items-center btn btn-sm">
                                        <span>Read More</span>
                                        <i class="fa fa-arrow-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--application hosting section end-->

        <!--features section start-->
        <div class="feature-section ptb-100 ">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-md-7 col-lg-5">
                        <div class="feature-content-wrap">
                            <h2>99% Cloud Hosing High-speed Cutting-edge Platform</h2>
                            <p>
                                Quickly reconceptualize cross-unit e-markets without superior
                                products. Appropriately foster timely and idea-sharing rather than
                                magnetic potentialities. Authoritatively restore high standards in
                                outsourcing whereas vertical meta-services. Compellingly
                                reconceptualize out-of-the-box outsourcing through plug-and-play
                                synergy.
                            </p>
                            <a href="about-us.html" class="read-more-link">
                                Know more about us
                                <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                        <div class="feature-img-wrap text-center">
                            <img src="assets/img/services.svg" class="img-fluid" alt="server room" />
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-lg-between mt-5">
                    <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                        <div class="feature-img-wrap text-center">
                            <img src="assets/img/create-website.svg" class="img-fluid" alt="server room" />
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-5">
                        <div class="feature-content-wrap">
                            <h2>Our Own Interfaces for All Management</h2>
                            <p>
                                Authoritatively transform functionalized information without
                                cross-platform convergence. Quickly superior products. Appropriately
                                foster timely collaboration and idea-sharing rather than magnetic
                                potentialities. Authoritatively restore high standards in
                                outsourcing whereas vertical meta-services. Compellingly
                                reconceptualize out-of-the-box outsourcing through plug-and-play
                                synergy.
                            </p>
                            <a href="about-us.html" class="read-more-link">
                                Know more about us
                                <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--features section end-->

        <!--call to action start-->
        <section class="ptb-60 primary-bg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="cta-content-wrap text-white">
                            <h2 class="text-white">
                                24/7 Expert Hosting Support Our Customers Love
                            </h2>
                            <p>
                                Objectively innovate high compellingly maintain progressively pursue
                                mission-critical information quality imperatives.
                            </p>
                        </div>
                        <div class="support-action d-inline-flex flex-wrap">
                            <a href="/cdn-cgi/l/email-protection#bccfc9ccccd3cec8fcc5d3c9ced8d3d1ddd5d292dfd3d1" class="me-3 text-info"><i class="fa fa-comment me-1 text-tertiary"></i>
                                <span><span class="__cf_email__" data-cfemail="6a191f1a1a05181e2a13051f180e05070b030444090507">[email&#160;protected]</span></span></a>
                            <a href="tel:+00123456789" class="mb-0 text-info"><i class="fa fa-phone-alt me-1 text-tertiary"></i>
                                <span>+00123456789</span></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-none d-lg-block">
                        <div class="cta-img-wrap text-center">
                            <img src="assets/img/call-center-support.svg" width="250" class="img-fluid" alt="server room" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action end-->

        <!--network map section start-->
        <section class="network-map-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Data centers Location</h2>
                            <p>Cloudhub offers a low latency worldwide network, enabling you to deploy your
                                service infrastructure in close proximity to your customer base.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="network-map-wrap">
                            <ul class="custom-map-location">
                                <li style="top: 29%; left: 15.5%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Canada"></span>
                                </li>
                                <li style="top: 42%; left: 20%;">
                                    <span data-toggle="tooltip" data-placement="top" title="United States"></span>
                                </li>
                                <li style="top: 70%; left: 32%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Brazil"></span>
                                </li>
                                <li style="top: 57%; left: 48%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Nigeria"></span>
                                </li>
                                <li style="top: 18%; left: 53%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Finland"></span>
                                </li>
                                <li style="top: 34%; left: 55%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Ukraine"></span>
                                </li>
                                <li style="top: 45%; left: 68%;">
                                    <span data-toggle="tooltip" data-placement="top" title="India"></span>
                                </li>
                                <li style="top: 35%; left: 80%;">
                                    <span data-toggle="tooltip" data-placement="top" title="China"></span>
                                </li>
                                <li style="top: 77%; left: 85%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Australia"></span>
                                </li>
                            </ul>
                            <img src="assets/img/map-dark.svg" alt="location map">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--network map section end-->

        <!--testimonial section start-->
        <section class="review-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center">
                            <h2>Our Lovely Client Say About Us</h2>
                            <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme client-testimonial-1 dot-bottom-center custom-dot">
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Amazing template</h5>
                                        <p>Distinctively foster maintainable metrics whereas multidisciplinary process improvements. Distinctively foster maintainable metrics whereas multidisciplinary process improvements. Objectively implement strategic niches through.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.png" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Best template for app</h5>
                                        <p>Efficiently innovate customized growth strategies whereas error-free paradigms. Monotonectally enhance stand-alone data with prospective innovation.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.png" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Tony Roy</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Efficiently innovate app</h5>
                                        <p>Continually redefine sticky channels whereas extensive "outside the box" thinking. Rapidiously supply focused schemas vis-a-vis optimal users.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.png" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Uniquely mesh flexible</h5>
                                        <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.png" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Compellingly empower app</h5>
                                        <p>Proactively grow focused niche markets with virtual e-services. Rapidiously pursue effective ROI via holistic information completely reintermediate.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.png" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Holisticly reintermediate</h5>
                                        <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.png" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Uniquely mesh flexible</h5>
                                        <p>Phosfluorescently optimize intermandated platforms without integrated infrastructures. Proactively redefine granular thinking before.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.png" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Compellingly empower app</h5>
                                        <p>Proactively grow focused niche markets with virtual e-services. Rapidiously pursue effective ROI via holistic information completely reintermediate.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.png" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="border single-review-wrap bg-white p-4 m-3">
                                    <div class="review-body">
                                        <h5>Holisticly reintermediate</h5>
                                        <p>Collaboratively reintermediate out-of-the-box e-business via economically sound supply chains. Dynamically target client-based holistic information.</p>
                                    </div>
                                    <div class="review-author d-flex align-items-center">
                                        <div class="author-avatar">
                                            <img src="assets/img/client-3.png" width="64" alt="author" class="rounded-circle shadow-sm img-fluid mr-3" />
                                            <span>“</span>
                                        </div>
                                        <div class="review-info">
                                            <h6 class="mb-0">Ana Joly</h6>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->

        <!--our blog section start-->
        <section id="faq" class="ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Frequently Asked Queries</h2>
                            <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize frictionless expertise whereas tactical relationships. Still have questions? Contact us</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-12">
                        <div class="accordion faq-wrap" id="accordionExample">

                            <!-- Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">If I have a WordPress site hosted somewhere else, can I move it to XovenHost?</button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Credibly maximize open-source methodologies via sustainable synergy. Dynamically predominate diverse architectures via user-centric technologies. Credibly enable clicks-and-mortar services whereas extensive services. Proactively integrate orthogonal technologies whereas seamless networks. Dynamically transition intermandated communities via premier mindshare.</div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What’s the difference between WordPress Hosting and shared Web Hosting?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Energistically conceptualize visionary results and premier best practices. Enthusiastically innovate leveraged testing procedures rather than progressive experiences. Uniquely incubate bricks-and-clicks potentialities and process-centric "outside the box" thinking. Dramatically recaptiualize magnetic services rather than fully tested products. Appropriately productize innovative convergence before superior niches.</div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How do I know what WordPress Hosting plan is best for me?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Compellingly utilize go forward portals with go forward manufactured products. Continually evolve clicks-and-mortar web services and just in time quality vectors. Holisticly envisioneer unique technology whereas equity invested networks. Dynamically target reliable services without multifunctional convergence. Seamlessly visualize resource-leveling vortals after prospective partnerships.</div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Is email included with WordPress Hosting?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Professionally integrate optimal initiatives for progressive "outside the box" thinking. Intrinsicly drive real-time synergy with bleeding-edge growth strategies. Synergistically productize mission-critical portals vis-a-vis interactive customer service. Synergistically predominate B2B outsourcing for magnetic synergy. Energistically optimize synergistic expertise whereas premier results.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--our blog section end-->

<!-- 
        
        our team section start
        <section class="client-section  ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="section-heading text-center mb-5">
                            <h2>Lots of Customer Love Us</h2>
                            <p>
                                Rapidiously morph transparent internal or sources whereas resource sucking e-business. Conveniently innovate formulate manufactured products compelling internal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-01.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-02.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-03.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-04.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-05.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-06.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-07.png" alt="client logo" class="customer-logo">
                            </div>
                            <div class="item single-customer">
                                <img src="assets/img/customers/clients-logo-08.png" alt="client logo" class="customer-logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        our team section end


 -->




<?php
include_once('footer.php');
?>