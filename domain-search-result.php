<?php
include_once('header.php');
?>




<div class="main">

    <!--hero section start-->
    <section class="hero-equal-height ptb-120 gradient-overlay bg-image" data-overlay="7">
        <div class="background-image-wraper" style="background: url('assets/img/domain.webp')no-repeat center center / cover; opacity: 1;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="hero-content-left text-white text-center">
                        <h1 class="text-white">Search for Find Unique Domains!</h1>
                        <p class="lead">Up to 50% Off domain and hosting, Starting from $2.99/month, free SSL certificate, 24/7/365 support, money back guarantee.</p>

                        <?php 
                                $from       = !empty($_GET['from']) ? htmlspecialchars($_GET['from'], ENT_QUOTES, 'UTF-8') : '';
                                $domain     = !empty($_GET['domain']) ? htmlspecialchars($_GET['domain'], ENT_QUOTES, 'UTF-8') : '';
                                $domainType = !empty($_GET['domainType']) ? htmlspecialchars($_GET['domainType'], ENT_QUOTES, 'UTF-8') : '';

                                $domainName = "";
                                if($domain && $domainType) {
                                    $domainName = $domain . '.' . $domainType;
                                } else if($domain && !$domainType) {
                                    if(strpos($domain, ".") === false) {
                                        $domainName = $domain.'.com';
                                    } else {
                                        $domainName = $domain;
                                        $domain     = substr($domain, 0, strpos($domain, "."));
                                    }
                                }

                                include_once 'libs/whois/src/whois.main.php';

                                $whois = new Whois();
                                $whois->deep_whois = false;
                                $result = $whois->Lookup($domainName);


                                // if (sizeof(dns_get_record($domainName)) > 0) echo "Domain has DNS records";
                                // else echo "Domain does not have any DNS records";

                                $domainInfo = !empty($result['regrinfo']['registered']) && $result['regrinfo']['registered'] == 'yes' ? true : false;
                            ?>

                        <form action="domain-search-result.php" method="GET" class="domain-transfer-form mt-3 w-75 d-block mx-auto">
                            <div class="input-group">
                                <input type="text" name="domain" id="domain" class="form-control" placeholder="<?php echo $domainName ? $domainName : 'yourdomainname.com'; ?>" value="<?php echo $domainName ? $domainName : ''; ?>" />
                                <div class="input-group-append">
                                    <button class="btn search-btn btn-brand-03 btn-hover d-flex align-items-center bg-warning h-100" type="submit">
                                    <i class="fa-solid fa-magnifying-glass px-1"></i>  Search
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="domain-list-wrap text-center mt-4">
                            <ul class="list-inline domain-search-list">
                                <li class="list-inline-item border rounded bg-white text-black"><a href="#"><img src="assets/img/com.png" alt="com" width="60" class="img-fluid"> <span>$8.99</span></a>
                                </li>
                                <li class="list-inline-item border rounded bg-white text-black"><a href="#"><img src="assets/img/xyz.png" alt="com" width="60" class="img-fluid"> <span>$0.99</span></a>
                                </li>
                                <li class="list-inline-item border rounded bg-white text-black"><a href="#"><img src="assets/img/net.png" alt="com" width="60" class="img-fluid"> <span>$4.99</span></a>
                                </li>
                                <li class="list-inline-item border rounded bg-white text-black"><a href="#"><img src="assets/img/org.png" alt="com" width="60" class="img-fluid"> <span>$2.99</span></a>
                                </li>
                                <li class="list-inline-item border rounded bg-white text-black"><a href="#"><img src="assets/img/store.png" alt="com" width="60" class="img-fluid"> <span>$0.99</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="domain-list-wrap text-center mt-4">
                        <?php
                        
                        if($domainName == ""){

                        }else if(!sizeof(dns_get_record($domainName)) > 0){
                            $domainarray = $domainName.".afterserver.com";
                            echo $domainarray;
                            ?>
                            <div class="alert alert-primary" role="alert">
                                <?php echo $domainName; ?></span> is available!
                                </div>
                        <?php } else if(sizeof(dns_get_record($domainName)) > 0){
                            $dns_array = dns_get_record($domainName);
                            $domainarray = $domainName.".afterserver.com";
                            echo $domainarray;
                            if($dns_array['host'] == $domainarray){
                                ?>
                                <div class="alert alert-primary" role="alert">
                                    <?php echo $domainName; ?></span> is available!
                                    </div>
                            <?php
                            }else{
                                ?>
                            <div class="alert alert-warning" role="alert">
                            <?php echo $domainName; ?></span> is registered!
                            </div>
                            <?php 
                            }
                            echo dns_get_record($domainName);
                            var_dump(dns_get_record($domainName));
                            echo "<br/><br/><br/>";
                            print_r(dns_get_record($domainName));
                            ?>
                            <div class="alert alert-warning" role="alert">
                            <?php echo $domainName; ?></span> is registered!
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--hero section end-->

    <!--domain search result section start-->
    <section class="domain-search-result-section gray-light-bg ptb-100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3">
                    <div class="domain-extension-filter-wrap p-4 white-bg rounded">
                        <div class="domain-filter-title">
                            <h5 class="mb-0">Filter Results <span class="ti-angle-down float-right"></span></h5>
                        </div>
                        <ul class="list-unstyled domain-filter-list mt-3">
                            <li class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Show All
                                </label>
                            </li>
                            <li class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">.com
                                </label>
                            </li>
                            <li class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">.net
                                </label>
                            </li>
                            <li class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">.online
                                </label>
                            </li>
                            <li class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">.org
                                </label>
                            </li>
                            <li class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">.xyz
                                </label>
                            </li>
                            <li class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">.store
                                </label>
                            </li>
                            <li class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">.website
                                </label>
                            </li>
                            <li class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">.biz
                                </label>
                            </li>
                            <button type="submit" class="btn btn-block btn-outline-brand-01 btn-sm mt-3">Apply</button>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="content-with-sidebar">
                        <!--alert table start-->
                        <?php if(!sizeof(dns_get_record($domainName)) > 0){?>
                        <!-- <?php //if($from != 'transfer' && empty($domainInfo)) {?> -->
                        <table class="table vps-hosting-pricing-table domain-search-result-table alert-table mb-5">
                            <tbody>
                            <tr class="vps-pricing-row">
                                <td>Domain <span class="color-primary"><?php echo $domainName; ?></span> is available!
                                    <br><small>Get this domain now </small></td>
                                <td>
                                    <p>
                                        <span class="rate">$3.95<span>/month</span></span>
                                        <span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save 30%</span></span>
                                    </p>
                                </td>
                                <td>
                                    <a href="https://portal.xovenhost.com/cart.php?systpl=xovenhost&a=add&domain=register&query=<?php echo $domainName; ?>" class="btn btn-brand-01 btn-sm">Add to Cart</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <?php } else if(sizeof(dns_get_record($domainName)) > 0){?>
                        <!-- <?php //} else if($from == 'transfer' && !empty($domainInfo)) {?> -->
                        <table class="table vps-hosting-pricing-table domain-search-result-table alert-table mb-5">
                            <tbody>
                            <tr class="vps-pricing-row">
                                <td>Domain <span class="color-primary"><?php echo $domainName; ?></span> is ready to transfer!
                                    <br><small>Transfer your domain now </small></td>
                                <td>
                                    <p>
                                        <span class="rate">$3.95<span>/month</span></span>
                                        <span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save 30%</span></span>
                                    </p>
                                </td>
                                <td>
                                    <a href="https://portal.xovenhost.com/cart.php?systpl=xovenhost&a=add&domain=transfer&query=<?php echo $domainName; ?>" class="btn btn-brand-01 btn-sm">Add to Cart</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <?php } else if(!sizeof(dns_get_record($domainName)) > 0){?>
                        <!-- <?php //} else if($from != 'transfer' && !empty($domainInfo)){?> -->
                        <div class="row">
                            <div class="col-12 pb-3">
                                <div class="alert alert-danger">Domain(<?php echo $domainName; ?>) is not available. </div>
                            </div>
                        </div>
                        <?php } else if(sizeof(dns_get_record($domainName)) > 0){?>

                        <!-- <?php //} else if($from == 'transfer' && empty($domainInfo)){?> -->
                        <div class="row">
                            <div class="col-12 pb-3">
                                <div class="alert alert-danger">Domain(<?php echo $domainName; ?>) is not registered. </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!--alert table end-->
                        <h4 class="text-center">More domain options</h4>
                        <table class="table vps-hosting-pricing-table domain-search-result-table">
                            <tbody>
                            <tr class="vps-pricing-row">
                                <td data-value="Available"><?php echo $domain ? $domain : 'xovenhost'; ?><span class="color-primary">.com</span></td>
                                <td data-value="Price">
                                    <p>
                                        <span class="rate">$3.95<span>/month</span></span>
                                        <span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save 30%</span></span>
                                    </p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-sm">Add to Cart</a>
                                </td>
                            </tr>
                            <tr class="vps-pricing-row">
                                <td data-value="Available"><?php echo $domain ? $domain : 'xovenhost'; ?><span class="color-primary">.net</span></td>
                                <td data-value="Price">
                                    <p>
                                        <span class="rate">$8.95<span>/month</span></span>
                                        <span class="pricing-onsale">On sale - <span class="badge color-1 color-1-bg">Save 50%</span></span>
                                    </p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-sm">Add to Cart</a>
                                </td>
                            </tr>
                            <tr class="vps-pricing-row">
                                <td data-value="Available"><?php echo $domain ? $domain : 'xovenhost'; ?><span class="color-primary">.org</span></td>
                                <td data-value="Price">
                                    <p>
                                        <span class="rate">$12.95<span>/month</span></span>
                                        <span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save 10%</span></span>
                                    </p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-sm">Add to Cart</a>
                                </td>
                            </tr>
                            <tr class="vps-pricing-row">
                                <td data-value="Available"><?php echo $domain ? $domain : 'xovenhost'; ?><span class="color-primary">.info</span></td>
                                <td data-value="Price">
                                    <p><span class="rate">$15.95<span>/month</span></span><span class="pricing-onsale">On sale - <span
                                            class="badge color-3 color-3-bg">Save 30%</span></span></p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-sm">Add to Cart</a>
                                </td>
                            </tr>
                            <tr class="vps-pricing-row">
                                <td data-value="Available"><?php echo $domain ? $domain : 'xovenhost'; ?><span class="color-primary">.store</span></td>
                                <td data-value="Price">
                                    <p><span class="rate">$23.95<span>/month</span></span><span class="pricing-onsale">On sale - <span
                                            class="badge color-5 color-5-bg">Save 40%</span></span></p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-sm">Add to Cart</a>
                                </td>
                            </tr>
                            <tr class="vps-pricing-row">
                                <td data-value="Available"><?php echo $domain ? $domain : 'xovenhost'; ?><span class="color-primary">.online</span></td>
                                <td data-value="Price">
                                    <p><span class="rate">$29.95<span>/month</span></span><span class="pricing-onsale">On sale - <span
                                            class="badge color-3 color-3-bg">Save 10%</span></span></p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-sm">Add to Cart</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--domain search result section end-->

    <!--popular domain list section start-->
    <section class="feature-tab-section ptb-100 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 order-lg-last">
                    <div class="image-box fadein text-xl-right text-center">
                        <img src="assets/img/emotion-scientists.jpg" alt="wp-hosting"
                             class="img-fluid rounded"/>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 order-xl-first">
                    <h2>Advanced Search to Make your Life Fester and Easier</h2>
                    <p class="lead">Progressively matrix mission-critical core competencies without magnetic
                        paradigms.</p>
                    <div class="row pt-2">
                        <div class="col-12">
                            <h5>Multi-layered security</h5>
                            <p>Continually empower goal-oriented niche markets whereas interoperable outsourcing. Assertively incubate standardized methods of empowerment </p>
                        </div>
                        <div class="col-12">
                            <h5>Green-friendly hosting</h5>
                            <p>Monotonectally negotiate multifunctional applications whereas unique niche markets. Continually recaptiualize open-source catalysts for change whereas adaptive content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mt-5">
                <div class="col-xl-6 col-lg-6 col-12 order-lg-last">
                    <div class="image-box fadein text-xl-right text-center">
                        <img src="assets/img/HighSpeedLights.jpg" alt="wp-hosting" class="img-fluid rounded"/>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 order-xl-last">
                    <h2>Fast connectivity & low latency</h2>
                    <p class="lead">Efficiently reintermediate long-term high-impact channels without equity
                        invested technology.</p>
                    <div class="row pt-2">
                        <div class="col-12">
                            <h5>Exclusive Features</h5>
                            <p>Globally seize functional products rather than compelling supply chains capital before frictionless quality vectors. Holisticly envisioneer worldwide niche markets for efficient services.</p>
                        </div>
                        <div class="col-12">
                            <h5>Ultra-Fast Network</h5>
                            <p>Dramatically aggregate granular resources vis-a-vis process-centric process  deliver enterprise-wide scenarios improvements. Quickly target compelling e-services after cross functional schemas. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--popular domain list section end-->

    <!--domain name block start-->
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
    <!--domain name block end-->

    <!--faq new style start-->
    <section id="faq" class="ptb-100 ">
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">Is email included with WordPress Hosting?</button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">Professionally integrate optimal initiatives for progressive "outside the box" thinking. Intrinsicly drive real-time synergy with bleeding-edge growth strategies. Synergistically productize mission-critical portals vis-a-vis interactive customer service. Synergistically predominate B2B outsourcing for magnetic synergy. Energistically optimize synergistic expertise whereas premier results.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!--faq new style end-->

<?php
include_once('footer.php');
?>