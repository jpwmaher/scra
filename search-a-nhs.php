<?php include("include-search-a-head.php"); ?>

<style>
    /* Webkit browsers like Safari and Chrome */

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    #tab-1 {
        background: #005EB8;
        color: white;
        border: 2px solid #005EB8;
    }

</style>

<body>

    <!-- Masthead -->
    <?php include("include-search-a-masthead.php"); ?>

    <!-- Privacy alert -->
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
    </div>

    <!-- H1 -->
    <?php include("include-search-a-h1.php"); ?>

    <!-- Tabs -->
    <?php include("include-search-a-tabs.php"); ?>

    <!-- Main content -->
    <div id="content-wrapper" class="grid-container">
        <br/>
        <div class="grid-x grid-padding-x">

            <div class="large-6 medium-8 cell">
                <form data-abide novalidate action="https://scra-prototypes.herokuapp.com/403-prototype-a-spinny.html" method="get">
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> There are some errors in your form.</p>
                    </div>

                    <div class="grid-x grid-padding-x">
                        <div class="cell form-bg">
                            <div class="cell form-wrap">
                                <label class="main-label">NHS Number<br/>
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
        </div>
    </div>


    <?php include("include-search-a-foot.php"); ?>
