<?php include("include-search-a-head.php"); ?>

<style>
    /* Webkit browsers like Safari and Chrome */

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .primary-fade {
        background: rgba(206, 231, 255, 0.6);
    }

</style>

<body>

    <!-- Masthead -->
    <?php include("include-search-a-masthead.php"); ?>

    <!-- Privacy alert
    <div id="privacy" class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 medium-12 cell">
                <div class="callout alert" data-closable style="margin: 0;">
                    <h6>Use of the Summary Care Record is subject to confidentiality regulations. Some actions will raise a privacy alert.</h6>
                    <br/><a href="#">More about privacy alerts</a>
                    <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
                </div>
            </div>
        </div>
    </div> -->

    <!-- H1 -->
    <?php include("include-search-a-h1.php"); ?>

    <!-- Tabs -->
    <div id="tab-wrapper" class="grid-container">
        <div id="tabbies" class="grid-x" data-equalizer>
            <div class="large-4 medium-4 small-6 cell">
                <a id="tab-1" href="search-a-nhs.php" class="button tabby tabby-active" data-equalizer-watch>By NHS number</a>
            </div>
            <div class="large-4 medium-4 small-6 cell">
                <a id="tab-2" href="search-a-patient-details.php" class="button button tabby tabby-inactive" style="width: 100%;" data-equalizer-watch>By patient details</a>
            </div>
            <div class="large-4 medium-4 small-6 cell">
                <a href="#" class="button tabby tabby-no-tab show-for-medium" style="width: 100%;" data-equalizer-watch></a>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div id="content-wrapper" class="grid-container">
        <br/>
        <div class="grid-x grid-padding-x">

            <div id="main-form" class="large-6 medium-8 cell">
                <form data-abide novalidate action="403-prototype-a-spinny.html" method="get">
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                    </div>

                    <div class="grid-x grid-padding-x">
                        <div class="cell form-bg">
                            <div class="cell form-wrap callout  primary-fade">
                                <h4>NHS Number</h4>
                                <label class="main-label">
                                      <span class="form-hint">For example 943 476 5919</span>
                                      <input type="number" placeholder="NHS Number" pattern="[0-9]*" required autocomplete="off" t value=""  maxlength="10" minlength="10" pattern="[0-9]*">
                                    </label>
                            </div>
                            <div class="cell  form-wrap"><br/>
                                <fieldset class="large-6 columns">
                                    <button class="button" type="submit" value="Submit">Find patient</button>
                                    <button class="button hollow" type="reset" value="Reset">Clear</button>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- <div class="large-6 medium-4 cell" data-sticky-container>
                <div class="sticky" data-sticky data-top-anchor="main-form:top" data-btm-anchor="main-form:bottom">
                    <div class="success callout is-hidden" id="form-first-name" data-toggler="is-hidden">
                        <h6>NHS Number contextual help</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <ul class="contextual-help-list">
                            <li><a href="#">Who should have an NHS Number</a></li>
                            <li><a href="#">General search tips</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->

        </div>
    </div>

    <!-- Help -->
    <div id="help" class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="cell">
                <h6>Tips on finding a patient using an NHS Number</h6>
                <ul class="contextual-help-list">
                    <li><a href="#">Who should have an NHS Number</a></li>
                    <li><a href="#">A link</a></li>
                    <li><a href="#">Another link</a></li>
                    <li><a href="#">Another link</a></li>
                    <li><a href="#">General search tips</a></li>
                </ul>
            </div>
        </div>
    </div>


    <?php include("include-search-a-foot.php"); ?>
