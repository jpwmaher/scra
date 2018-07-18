<?php ; ?>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>403 - SCRa - responsive prototype concepts</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/scra.css">
    <link rel="stylesheet" href="css/scra-396.css">
    <link rel="stylesheet" href="css/foundation-icons.css" />
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>

<body>

    <h1>
        <?php echo "Hello, world!"; ?>
    </h1>

    <a href="#" class="scrollToTop"><i class="fi-arrow-up"></i> Top</a><span class="patient-float">Mr. William Shakespeare | 17-Apr-1969</span>

    <div id="masthead-2" class="grid-container full">
        <div id="masthead-menu" class="grid-container">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="large">
                    <!-- <button class="menu-icon" type="button" data-toggle="responsive-menu"></button> -->
                    <div class="title-bar-title"><a href="index-403.html"><img src="/img/nhs-digital-logo-left.jpg" style="height: 20px;"> </a> &nbsp; Summary Care Record application</div>
                    <div class="auto cell"><button class="button hollow tiny" style="float: right; position: relative; right: 0px; margin-bottom: 0px;">Find patient</button>
                    </div>
                </div>

                <div class="top-bar" id="responsive-menu">
                    <div class="top-bar-left">
                        <ul class="dropdown menu show-for-large">
                            <li><a href="index-403.html" style="padding: 0px;"><img src="/img/nhs-digital-logo-left.jpg" style="height: 40px;"></a></li>
                            <li class="menu-text">Summary Care Record application</li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="dropdown menu" data-dropdown-menu>
                            <li><a href="403-prototype-a-fingerprint.html" style="padding: 0px;"><button class="button hollow show-for-medium" style="border-color: white;">Log out</button></a></li>
                            <li><a href="403-prototype-a-nhs.html" style="padding: 0px;"><button class="button hollow show-for-medium">Find patient</button></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container">
        <div id="patient-summary" class="grid-x grid-padding-x">
            <div id="summary-name" class="small-6 medium-shrink cell small-order-1 summary-panel">
                <span class="summary-label">Full name:</span><br/><span class="summary-info">William Shakespeare</span>
            </div>
            <div id="summary-gender" class="small-6 medium-shrink cell small-order-3 summary-panel">
                <span class="summary-label">Gender:</span><br/><span class="summary-info">Male</span>
            </div>
            <div id="summary-dob" class="small-6 medium-shrink cell small-order-4 summary-panel">
                <span class="summary-label">DOB:</span><br/><span class="summary-info">17-Apr-1969</span>
            </div>
            <div id="summary-nhs" class="small-6 medium-shrink cell small-order-5 summary-panel">
                <span class="summary-label">NHS No:</span><br/><span class="summary-info">123 456 7890</span>
            </div>
            <div id="summary-address" class="medium-auto small-12 cell small-order-6 medium-order-6 summary-panel">
                <span class="summary-label">Address:</span><br/><span class="summary-info">1 Henley Street, Stratford-upon-Avon, Warwickshire</span>
            </div>
        </div>
    </div>

    <div id="tab-wrapper" class="grid-container">
        <div id="tabbies" class="grid-x" data-equalizer>
            <div class="large-4 medium-4 small-6 cell">
                <a href="#first" class="button tabby tabby-active" data-equalizer-watch>Patient details</a>
            </div>
            <!--  <div class="large-2 medium-2 small-6 cell">
                <a href="#" class="button button tabby tabby-inactive" style="width: 100%;" data-equalizer-watch>Chargeable status</a>
            </div>
            <div class="large-2 medium-2 small-6 cell">
                <a href="#" class="button button tabby tabby-inactive" style="width: 100%;" data-equalizer-watch>Child care alert <span class="badge alert">&nbsp;</span></a>
            </div>
            <div class="large-2 medium-2 small-6 cell">
                <a href="#" class="button button tabby tabby-inactive" style="width: 100%;" data-equalizer-watch>FGM</a>
            </div>
            <div class="large-2 medium-2 small-6 cell">
                  <a href="#" class="button button tabby tabby-inactive" style="width: 100%;" data-equalizer-watch>RA <span class="badge secondary">&nbsp;</span></a>
            </div> -->
            <div class="large-4 medium-4 small-6 cell">
                <a data-open="exampleModal1" class="button button tabby tabby-inactive" style="width: 100%;" data-equalizer-watch>Summary Care Record<br><span class="summary-label">with Additional information</span> </a>
            </div>
            <div class="large-4 medium-4 small-6 cell">
                <a href="403-prototype-a-nrls.html" class="button button tabby tabby-inactive" style="width: 100%;" data-equalizer-watch>NRLS<br><span class="summary-label">2 records found</span> </a>
            </div>
        </div>
    </div>

    <div id="content-wrapper" class="grid-container show-for-medium">
        <div class="grid-x">
            <div id="in-page-nav" class="medium-3 large-3 cell" data-sticky-container>
                <div id="in-page-nav-inner" class="sticky" data-sticky data-top-anchor="in-page-content:top" data-btm-anchor="in-page-content:bottom">
                    <span class="panel-label">Menu:</span>
                    <ul class="vertical menu sticky" data-magellan>
                        <li><a href="#first">Key demographic</a></li>
                        <li><a href="#second">GP &amp; care providers</a></li>
                        <li><a href="#third">Contacts &amp; next of kin</a></li>
                    </ul>
                    <br/>
                </div>
            </div>

            <div id="in-page-content" class="large-auto medium-auto small-12 cell">

                <section id="first" class="info-section" data-magellan-target="first">

                    <h4>Key demographic</h4>

                    <div class="grid-x grid-margin-x">

                        <div class="large-12 medium-12 cell">

                            <fieldset class="fieldset">
                                <legend>Name</legend>
                                <div class="grid-x">
                                    <div class="medium-6 small-12 large-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Usual name:</span><br/><span class="panel-info">William Shakespeare</span><br/><span class="panel-info-note">Effective since: 17-Apr-1969</span>
                                        </div>
                                    </div>
                                    <div class="medium-6 small-12 large-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Preferred name:</span><br/><span class="panel-info-none">Not recorded</span>
                                        </div>
                                    </div>
                                    <div class="medium-6 small-12 large-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Other names:</span><br/><span class="panel-info-none">Not recorded</span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="large-12 medium-12 cell">

                            <fieldset class="fieldset">
                                <legend>Key details</legend>
                                <div id="panel-key" class="grid-x">
                                    <div class="medium-6 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Gender:</span><br/><span class="panel-info">Male</span>
                                        </div>
                                    </div>
                                    <div class="medium-6 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">NHS Number:</span><br/><span class="panel-info">123 454 545</span>
                                        </div>
                                    </div>
                                    <div class="medium-6 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Date of birth:</span><br/><span class="panel-info">17-Apr-1969</span>
                                        </div>
                                    </div>
                                    <div class="medium-6 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Place of birth:</span><br/><span class="panel-info">Stratford-Upon-Avon</span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>

                        <div class="large-12 medium-12 cell">

                            <fieldset class="fieldset">
                                <legend>Summary Care Record / Contact preference</legend>
                                <div id="panel-key" class="grid-x">
                                    <div class="cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">SCR Consent Preference :</span><br/><span class="panel-info">Permission to view required</span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>

                        <div class="large-12 medium-12 cell">

                            <fieldset class="fieldset">
                                <legend>Addresses</legend>
                                <div id="panel-address" class="grid-x">
                                    <div class="medium-6 small-12 large-4  cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Usual address:</span><br/><span class="panel-info">1 Henley Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span>
                                        </div>
                                    </div>
                                    <div class="medium-6 small-12 large-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Temporary address:</span><br/>
                                            <span class="panel-info"><span data-tooltip tabindex="1" title="This information may be incorrect"><i class="fi-alert" style="color: orange;"></i></span> 101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span><br/>
                                            <span class="panel-info-note">Effective: 01-Aug-2017 - 01-Sep-2017</span><br/>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <a class="button hollow" onclick="myFunction()" style="float: right;">View address history</a>
                                    </div>
                                    <div id="address-history" class="medium-6 small-12 large-4 cell" style="display: none;">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Previous  address:</span><br/>
                                            <span class="panel-info">101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span><br/>
                                            <span class="panel-info-note">Effective: 01-Aug-2017 - 01-Sep-2017</span><br/>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>

                    </div>

                </section>

                <section id="second" class="info-section" data-magellan-target="second">
                    <br/>
                    <h4>GP &amp; care providers</h4>

                    <div class="grid-x grid-margin-x">

                        <div class="large-12 medium-12 cell">

                            <fieldset class="fieldset">
                                <legend>General Practice</legend>
                                <div id="panel-gp" class="grid-x">
                                    <div class="medium-4 small-12 large-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Name:</span><br/><span class="panel-info">Dr. Doolittle</span><br/>
                                        </div>
                                    </div>

                                    <div class="medium-4 small-12 large-4  cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Address:</span><br/><span class="panel-info">1 The Surgery<br/>High Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 7DE</span>
                                        </div>
                                    </div>

                                    <div class="medium-4 small-12 large-4  cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Telephone:</span><br/><span class="panel-info">01234 567 890</span>
                                        </div>
                                    </div>

                                    <div class="medium-4 small-12 large-4  cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Commissioning orginisation:</span><br/><span class="panel-info">5AN                                                                                                         </span>
                                        </div>
                                    </div>

                                    <div class="medium-4 small-12  large-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">High-level health Geography:</span><br/><span class="panel-info">Q11                                                                                                           </span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>

                        <div class="large-12 medium-12 cell">

                            <fieldset class="fieldset">
                                <legend>GPs registered at this practice</legend>
                                <div id="panel-gpreg" class="grid-x">

                                    <div class="large-4 medium-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Name:</span><br/><span class="panel-info">Dr. Livingstone</span>
                                        </div>
                                    </div>

                                    <div class="large-4 medium-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">GP Code:</span><br/><span class="panel-info">G1979031</span>
                                        </div>
                                    </div>

                                    <div class="large-4 medium-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">GMC Code:</span><br/><span class="panel-info">1979031</span>
                                        </div>
                                    </div>

                                    <div class="cell">
                                        <hr>
                                    </div>

                                    <div class="large-4 medium-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Name:</span><br/><span class="panel-info">Dr. No</span>
                                        </div>
                                    </div>

                                    <div class="large-4 medium-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">GP Code:</span><br/><span class="panel-info">G1979032</span>
                                        </div>
                                    </div>

                                    <div class="large-4 medium-4 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">GMC Code:</span><br/><span class="panel-info">1979032</span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                        </div>

                        <div class="large-12 medium-12 cell">

                            <fieldset class="fieldset">
                                <legend>Nominated pharmacy</legend>
                                <div id="panel-key" class="cell">
                                    <div class="panel-info-group cell">
                                        <span class="panel-info">No nominated pharmacy</span>
                                    </div>
                                </div>
                            </fieldset>

                        </div>

                        <div class="large-12 medium-12 cell">

                            <fieldset class="fieldset">
                                <legend>Other Care Providers</legend>
                                <div id="panel-gp" class="grid-x">
                                    <div class="medium-6 small-12 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Name:</span><br/><span class="panel-info">Dr. Doolittle</span><br/>
                                        </div>
                                    </div>

                                    <div class="medium-6 small-12 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Organisation:</span><br/><span class="panel-info">Bolton Mental Health Trust</span>
                                        </div>
                                    </div>

                                    <div class="medium-6 small-12 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Address:</span><br/><span class="panel-info">101 Other Street<br/>Bolton<br/>Lancashire<br/>BL4 0JD</span>
                                        </div>
                                    </div>

                                    <div class="medium-6 small-12 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Telephone:</span><br/><span class="panel-info">01234 567 890</span>
                                        </div>
                                    </div>

                                    <div class="cell">
                                        <hr>
                                    </div>

                                    <div class="medium-6 small-12 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Name:</span><br/><span class="panel-info">Dr. Dre</span><br/>
                                        </div>
                                    </div>

                                    <div class="medium-6 small-12 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Organisation:</span><br/><span class="panel-info">Bolton Mental Health Trust</span>
                                        </div>
                                    </div>

                                    <div class="medium-6 small-12 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Address:</span><br/><span class="panel-info">101 Other Street<br/>Bolton<br/>Lancashire<br/>BL4 0JD</span>
                                        </div>
                                    </div>

                                    <div class="medium-6 small-12 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Telephone:</span><br/><span class="panel-info">01234 567 891</span>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>

                        </div>

                    </div>

                </section>

                <section id="third" class="info-section" data-magellan-target="third">
                    <br/>
                    <h4>Contacts &amp; next of kin</h4>

                    <div class="grid-x grid-margin-x">

                        <div class="large-12 medium-12 cell">

                            <fieldset class="fieldset">
                                <legend>1. Anne Hathaway</legend>
                                <div id="panel-kin" class="grid-x">

                                    <div class="small-12 medium-6 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Relationship:</span><br/><span class="panel-info">Spouse</span><br/>
                                        </div>
                                    </div>

                                    <div class="small-12 medium-6  large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Address:</span><br/><span class="panel-info">1 Henley Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span>
                                        </div>
                                    </div>

                                    <div class="small-12 medium-6 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Telephone:</span><br/><span class="panel-info">01234 567 888</span>
                                        </div>
                                    </div>

                                    <div class="small-12 medium-6 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Email:</span><br/><span class="panel-info-none">Not recorded                                                                                                           </span>
                                        </div>
                                    </div>


                                    <!-- <div class="small-12 medium-12 large-12 cell">

                                        <a class="button hollow primary small" style="margin-bottom: 0; float: right;">Remove</a>

                                    </div> -->
                                </div>
                            </fieldset>

                        </div>

                        <div class="large-12 medium-12 cell">

                            <fieldset class="fieldset">
                                <legend>2. Someone Else</legend>
                                <div id="panel-kin" class="grid-x">

                                    <div class="small-12 medium-6 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Relationship:</span><br/><span class="panel-info">Brother</span><br/>
                                        </div>
                                    </div>

                                    <div class="small-12 medium-6  large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Address:</span><br/><span class="panel-info">1 Henley Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span>
                                        </div>
                                    </div>

                                    <div class="small-12 medium-6 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Telephone:</span><br/><span class="panel-info">01234 567 888</span>
                                        </div>
                                    </div>

                                    <div class="small-12 medium-6 large-3 cell">
                                        <div class="panel-info-group cell">
                                            <span class="panel-label">Email:</span><br/><span class="panel-info-none">Not recorded                                                                                                           </span>
                                        </div>
                                    </div>


                                    <!-- <div class="small-12 medium-12 large-12 cell">

                                        <a class="button hollow primary small" style="margin-bottom: 0; float: right;">Remove</a>

                                    </div> -->
                                </div>
                            </fieldset>

                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>

    <div id="content-wrapper" class="grid-container hide-for-medium">
        <div class="grid-x">
            <div id="in-page-content" class="auto cell">

                <a class="button hollow small" onclick="closeAll()" style="float: right;"> Close All </a><br/><br/>

                <ul class="accordion accroot" data-accordion data-allow-all-closed="true" data-multi-expand="true">
                    <li class="accordion-item" data-accordion-item>
                        <!-- Accordion tab title -->
                        <a href="#" class="accordion-title">
                            <h5>Key demographic</h5>
                        </a>

                        <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                        <div class="accordion-content" data-tab-content>
                            <section id="first" class="info-section" data-magellan-target="first">

                                <div class="grid-x grid-margin-x">

                                    <div class="large-12 medium-12 cell">

                                        <fieldset class="fieldset">
                                            <legend>Name</legend>
                                            <div class="grid-x">
                                                <div class="medium-6 small-12 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Usual name:</span><br/><span class="panel-info">William Shakespeare</span><br/><span class="panel-info-note">Effective since: 17/03/1979</span>
                                                    </div>
                                                </div>
                                                <div class="medium-6 small-12 large-shrink  cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Preferred name:</span><br/><span class="panel-info-none">Not recorded</span>
                                                    </div>
                                                </div>
                                                <div class="medium-6 small-12 large-shrink  cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Alias:</span><br/><span class="panel-info-none">Not recorded</span>
                                                    </div>
                                                </div>
                                                <div class="medium-6 small-12 large-auto cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Other names:</span><br/><span class="panel-info-none">Not recorded</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>

                                    <div class="large-12 medium-12 cell">

                                        <fieldset class="fieldset">
                                            <legend>Key details</legend>
                                            <div id="panel-key" class="grid-x">
                                                <div class="medium-4 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Gender:</span><br/><span class="panel-info">Male</span>
                                                    </div>
                                                </div>
                                                <div class="medium-4 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">NHS Number:</span><br/><span class="panel-info">123 456 7890</span>
                                                    </div>
                                                </div>
                                                <div class="medium-4 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Date of birth:</span><br/><span class="panel-info">17/03/1979</span>
                                                    </div>
                                                </div>
                                                <div class="medium-4 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Place of birth:</span><br/><span class="panel-info-none">Not recorded</span>
                                                    </div>
                                                </div>
                                                <div class="medium-4 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Language:</span><br/><span class="panel-info-none">Not recorded</span>
                                                    </div>
                                                </div>
                                                <div class="medium-4 large-auto cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Other names:</span><br/><span class="panel-info-none">Not recorded</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>

                                    <div class="large-12 medium-12 cell">

                                        <fieldset class="fieldset">
                                            <legend>Summary Care Record / Contact preference</legend>
                                            <div id="panel-key" class="grid-x">
                                                <div class="medium-4 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">SCR Consent Preference :</span><br/><span class="panel-info">Permission to view required</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>

                                    <div class="large-12 medium-12 cell">

                                        <fieldset class="fieldset">
                                            <legend>Addresses</legend>
                                            <div id="panel-address" class="grid-x">
                                                <div class="medium-4 small-12 large-3  cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Usual address:</span><br/><span class="panel-info">1 Henley Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span>
                                                    </div>
                                                </div>
                                                <div class="medium-4 small-12 large-3  cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Correspondence address:</span><br/><span class="panel-info-none">Not recorded</span>
                                                    </div>
                                                </div>
                                                <div class="medium-4 small-12 large-3 cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Temporary address:</span><br/>
                                                        <span class="panel-info"> <span data-tooltip tabindex="1" title="This information may be incorrect"><i class="fi-alert" style="color: orange;"></i></span> 101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE
                                                        </span><br/>
                                                        <span class="panel-info-note">Effective: 01-Aug-2017 - 01-Sep-2017</span><br/>
                                                    </div>
                                                </div>
                                                <div class="medium-12 small-12 large-12 cell">

                                                    <a class="button hollow primary small" onclick="myFunction2()" style="margin-bottom: 0; float: right;">View address history</a>

                                                </div>
                                                <div id="address-history-2" class="medium-6 small-12 large-4 cell" style="display: none;">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Previous  address:</span><br/>
                                                        <span class="panel-info">101 Other Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span><br/>
                                                        <span class="panel-info-note">Effective: 01-Aug-2017 - 01-Sep-2017</span><br/>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>

                                </div>

                            </section>
                        </div>
                    </li>
                    <!-- ... -->
                    <li class="accordion-item" data-accordion-item>
                        <!-- Accordion tab title -->
                        <a href="#" class="accordion-title">
                            <h5>GP &amp; care providers</h5>
                        </a>

                        <div class="accordion-content" data-tab-content>


                            <section id="second" class="info-section" data-magellan-target="second">
                                <br/>

                                <div class="grid-x grid-margin-x">

                                    <div class="large-12 medium-12 cell">

                                        <fieldset class="fieldset">
                                            <legend>General Practice</legend>
                                            <div id="panel-gp" class="grid-x">
                                                <div class="medium-4 small-12 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Name:</span><br/><span class="panel-info">Dr. Doolittle</span><br/>
                                                    </div>
                                                </div>

                                                <div class="medium-4 small-12 large-shrink  cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Address:</span><br/><span class="panel-info">1 The Surgery<br/>High Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 7DE</span>
                                                    </div>
                                                </div>

                                                <div class="medium-4 small-12 large-shrink  cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Telephone:</span><br/><span class="panel-info">01234 567 890</span>
                                                    </div>
                                                </div>

                                                <div class="medium-4 small-12 large-shrink  cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Commissioning orginisation:</span><br/><span class="panel-info">5AN                                                                                     </span>
                                                    </div>
                                                </div>

                                                <div class="medium-4 small-12  large-auto cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">High-level health Geography:</span><br/><span class="panel-info">Q11                                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>

                                    <div class="large-12 medium-12 cell">

                                        <fieldset class="fieldset">
                                            <legend>GPs registered at this practice</legend>
                                            <div id="panel-gpreg" class="grid-x">

                                                <div class="large-4 cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Name:</span><br/><span class="panel-info">Dr. Livingstone</span>
                                                    </div>
                                                </div>

                                                <div class="large-4 cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">GP Code:</span><br/><span class="panel-info">G1979031</span>
                                                    </div>
                                                </div>

                                                <div class="large-4 cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">GMC Code:</span><br/><span class="panel-info">1979031</span>
                                                    </div>
                                                </div>

                                                <div class="cell">
                                                    <hr>
                                                </div>

                                                <div class="large-4 cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Name:</span><br/><span class="panel-info">Dr. No</span>
                                                    </div>
                                                </div>

                                                <div class="large-4 cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">GP Code:</span><br/><span class="panel-info">G1979032</span>
                                                    </div>
                                                </div>

                                                <div class="large-4 cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">GMC Code:</span><br/><span class="panel-info">1979032</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>

                                    <div class="large-4 medium-6 cell">

                                        <fieldset class="fieldset">
                                            <legend>Nominated pharmacy</legend>
                                            <div id="panel-key" class="cell">
                                                <div class="panel-info-group cell">
                                                    <span class="panel-info">No nominated pharmacy</span>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>

                                </div>

                            </section>
                        </div>
                    </li>

                    <li class="accordion-item" data-accordion-item>
                        <!-- Accordion tab title -->
                        <a href="#" class="accordion-title">
                            <h5>Contacts &amp; next of kin</h5>
                        </a>

                        <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                        <div class="accordion-content" data-tab-content>


                            <section id="third" class="info-section" data-magellan-target="third">

                                <div class="grid-x grid-margin-x">

                                    <div class="large-12 medium-12 cell">

                                        <fieldset class="fieldset">
                                            <legend>1. Anne Hathaway</legend>
                                            <div id="panel-kin" class="grid-x">

                                                <div class="small-12 medium-6 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Relationship:</span><br/><span class="panel-info">Mother</span><br/>
                                                    </div>
                                                </div>

                                                <div class="small-12 medium-6  large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Address:</span><br/><span class="panel-info">1 Henley Street<br/>Stratford-upon-Avon<br/>Warwickshire<br/>AB12 3DE</span>
                                                    </div>
                                                </div>

                                                <div class="small-12 medium-6 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Telephone:</span><br/><span class="panel-info">01234 567 888</span>
                                                    </div>
                                                </div>

                                                <div class="small-12 medium-6 large-shrink cell">
                                                    <div class="panel-info-group cell">
                                                        <span class="panel-label">Email:</span><br/><span class="panel-info-none">Not recorded                                                                                                           </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </fieldset>

                                    </div>

                                </div>

                            </section>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="sticky-footer-outer" class="grid-container full show-for-large" data-sticky-container>
        <div id="footer-inner" class="grid-x grid-padding-x grid-margin-x sticky" data-sticky data-stick-to="bottom">
            <div class="cell">
                <strong>CONFIDENTIAL:</strong> PERSONAL PATIENT DATA acccessed by Inspector Clouseau - KIRKBY MANOR NH (8A819)
            </div>
        </div>
    </div>

    <div class="reveal large" id="exampleModal1" data-reveal>
        <div class="grid-x grid-padding-x">
            <br/><br/>
            <h5>Has this patient given permission to view their Summary Care Record?<br/><br/><br/></h5><br/>
            <div class="large-4 medium-4 small-6 cell" style="margin-bottom: 60px;">
                <a href="403-prototype-a-scr.html" class="button large primary expanded">Yes</a> View record
            </div>
            <div class="large-4 medium-4 small-6 cell">
                <a href="403-prototype-a-patient-details.html" class="button large hollow expanded">No</a> Access refused
            </div>
            <div class="large-4 medium-4 small-12 cell">
                <a href="#" class="button large alert expanded" data-open="exampleModal2">Emergency access</a> The usual legal, ethical and professional obligations apply when accessing a patient's clinical record
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="cell" style="margin-bottom: 60px;">
                <hr>
                <a data-open="exampleModal3">I need to access the record for other reasons</a>
            </div>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="reveal large" id="exampleModal2" data-reveal>
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h5>Accessing in an emergency<br/></h5>
                <p>You may access the patient's record if they are not able to give permission. For example, they are unconscious, or unable to understand the question. <a href="#">Tell me more</a></p>
            </div>
            <div class="large-12 medium-12 cell">
                <form data-abide novalidate action="https://scra-prototypes.herokuapp.com/403-prototype-a-scr.html" method="get" autocomplete="off">
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> Please provide an explanation for accessing the patient's record</p>
                    </div>
                    <label>Please enter an explanation <span style="color: red;">* </span>
                    <input type="text" placeholder="" required style="max-width: 600px;" required>
                    </label>
            </div>
            <div class="cell">
                <fieldset class="large-6 columns">
                    <button class="button" type="submit" value="Submit">Continue</button>
                    <button class="button hollow" type="reset" value="Reset">Cancel</button>
                </fieldset>
                <!--        <a href="396-prototype-c-scr.html" class="button primary">Continue</a>&nbsp;
                <a href="396-prototype-c-patient-details.html" class="button hollow" style="border-color: transparent;">Cancel</a> -->
                </form>
            </div>
            <hr><br/><br/>
            <div class="cell" style="font-weight: bold;"><br/>
                <i class="fi-alert" style="color: red;"></i>&nbsp;Any inappropriate breach of patient confidentiality will be a matter for disciplinary and potentially legal and/or professional proceedings. If in doubt speak to your manager or privacy officer.
            </div>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <div class="reveal large" id="exampleModal3" data-reveal>
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h5>Other options for gaining access<br/></h5>
                <p>In exceptional circumstances you may be justified in accessing the patient's record without their permission. <a href="#">Tell me more</a></p>
            </div>
            <div class="cell">
                <form>
                    <div class=" cell"><br/>
                        <input type="radio" name="pokemon" value="Red" id="pokemonRed" required><label for="pokemonRed">Access made in the public interest</label><br/>
                        <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Access required by statute</label><br/>
                        <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Access required by Court Order</label><br/>
                    </div>
                    <div class="cell"><br/>
                        <label>Please enter an explanation
                    <input type="text" placeholder="" required style="min-width: 100%;  max-width: 600px;">
                    </label>
                    </div>
                </form>
            </div>
            <div class="cell">
                <a href="403-prototype-a-scr.html" class="button primary">Continue</a>&nbsp;
                <a href="403-prototype-a-patient-details.html" class="button hollow" style="border-color: transparent;">Cancel</a>
            </div>
            <hr><br/>
            <div class="cell" style="font-weight: bold;"><br/>
                <i class="fi-alert" style="color: red;"></i>&nbsp;Any inappropriate breach of patient confidentiality will be a matter for disciplinary and potentially legal and/or professional proceedings. If in doubt speak to your manager or privacy officer.
            </div>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/vendor/top.js"></script>
    <script src="js/vendor/patient-float.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById('address-history');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

    </script>
    <script>
        function myFunction2() {
            var x = document.getElementById('address-history-2');
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }

    </script>
    <script type="text/javascript">
        $(document).foundation();

        function closeAll() {
            $('.accroot').each(function() {
                var $acc = $(this);
                var $openSections = $acc.find('.accordion-item.is-active .accordion-content');
                $openSections.each(function(i, section) {
                    $acc.foundation('up', $(section));
                });
            });

        }

    </script>
</body>

</html>
