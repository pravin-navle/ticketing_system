
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up | Neat ~ Support Ticket System</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/neat.min.css">

    <style>
        html {
            zoom:0.9;
        }
    </style>
  </head>
  <body>

    <div class="o-page o-page--center">
      <div class="o-page__card">
        <div class="c-card c-card--center">
          <span class="c-icon c-icon--large u-mb-small">
            <img src="<?php echo base_url(); ?>img/logo-small.svg" alt="Neat">
          </span>

          <?php echo validation_errors(); ?>

          <h4 class="u-mb-medium">Sign Up to Get Started</h4>
          <?php echo form_open('auth/register'); ?>
            <div class="c-field">
              <label class="c-field__label">First Name</label>
              <input class="c-input u-mb-small" type="text" name="firstname" id="firstname" placeholder="e.g. Adam" required>
            </div>

            <div class="c-field">
              <label class="c-field__label">Last Name</label>
              <input class="c-input u-mb-small" type="text" name="lastname" id="lastname" placeholder="e.g. Nsereko" required>
            </div>

            <div class="c-field">
              <label class="c-field__label">Username</label>
              <input class="c-input u-mb-small" type="text" name="username" id="username" placeholder="e.g. adamnsereko" required>
            </div>
            
            <div class="c-field u-mb-small">
              <label class="c-field__label">Password</label>
              <input class="c-input" type="password" name="password" id="password" placeholder="Numbers, Pharagraphs Only" required autocomplete="off">
            </div>

            <div class="c-field u-mb-small">
              <label class="c-field__label">Confirm Password</label>
              <input class="c-input" type="password" name="password2" id="password2" placeholder="Rewrite your password" required>
            </div>

            <button class="c-btn c-btn--fullwidth c-btn--info">Create Account</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Main JavaScript -->
    <script src="<?php echo base_url(); ?>js/neat.min.js?v=1.0"></script>
  </body>
</html>