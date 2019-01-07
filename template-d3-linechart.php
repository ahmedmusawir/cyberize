<?php
/**
* The template for displaying all pages
* Template Name: D3 Chart
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package cyberize
*/

get_header();
?>

  <div id="primary" class="content-area wp-react-app">
    <main id="main" class="site-main">

      <section class="d3-linechart-main">
        <header>
          <div class="container">
            <h1 class="text-center">The Fitness Report</h1>
            <h4 class="text-center">Monthly Workout Tracker for Ninjas</h4>
            <h4 class="text-center">UNDER CONSTRUCTION</h4>
          </div>
        </header>

        <section class="main-content">
          <div class="container">
            <div class="row">
              <div class="col-left col-md-4 col-lg-4">
                <h5 class="text-center">Choose Excersize Type</h5>
                <div class="btn-holder text-center">
                  <button data-activity="cycling" class="btn btn-danger btn-block active">Cycling</button>
                </div>
                <div class="btn-holder text-center">
                  <button data-activity="running" class="btn btn-danger btn-block">Running</button>
                </div>
                <div class="btn-holder text-center">
                  <button data-activity="swimming" class="btn btn-danger btn-block">Swimming</button>
                </div>
                <div class="btn-holder text-center">
                  <button data-activity="walking" class="btn btn-danger btn-block">Walking</button>
                </div>

              </div>
              <div class="col-right col-md-8 col-lg-8">
                <!-- <h2>Right Col</h2> -->
                <div class="canvas">

                </div>
              </div>
            </div>
            <section class="row">
              <div class="col-md-12">
                <form>
                  <p class="text-warning text-center h4 mt-3">How much <span style="color: white">Cycling</span> have you done today?</p>
                  <input type="text" name="" id="cycling" class="form-control mb-3" value="" required="required" placeholder="Distance in Meters">
                  <div class="btn-holder text-center">
                    <button type="submit" class="btn btn-dark btn-block">ADD DISTANCE</button>
                  </div>
                  <p class="text-center text-danger error">error</p>
                </form>
              </div>
            </section>
          </div>
        </section>
      </section>

    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

  <?php
get_footer();