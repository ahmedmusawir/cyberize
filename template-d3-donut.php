<?php
/**
* The template for displaying all pages
* Template Name: D3 Donut
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

      <section class="d3-donut-main">
        <header>
          <div class="container">
            <h1 class="text-center">The Expense Report</h1>
            <h4 class="text-center">Monthly Money Tracker for Ninjas</h4>
          </div>
        </header>

        <section class="main-content">
          <div class="container">
            <div class="row">
              <div class="col-left col-md-6 col-lg-6">
                <h2>Left Col</h2>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" aria-describedby="Expense Name" placeholder="Expense Name. Ex: Clothing..." required>

                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control" id="cost" placeholder="Amount Between 100 and 500" min="100" max="500" required>
                  </div>

                  <div class="btn-holder text-center">
                    <button type="submit" class="btn btn-danger btn-lg">Submit</button>
                    <p class="text-center text-warning" id="error"></p>
                  </div>
                </form>
              </div>
              <div class="col-right col-md-6 col-lg-6">
                <h2>Right Col</h2>
                <div class="canvas">
                  <svg width="450" height="450">
                    <g transform="translate(155, 155)">
                      <path d="M9.184850993605149e-15,-150A150,150,0,1,1,9.184850993605149e-15,150L4.592425496802574e-15,75A75,75,0,1,0,4.592425496802574e-15,-75Z"></path>
                    </g>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>

    </main>
    <!-- #main -->
  </div>
  <!-- #primary -->

  <?php
get_footer();