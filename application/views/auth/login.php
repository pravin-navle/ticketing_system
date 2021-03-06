
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign In | Neat</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/neat.min.css?v=1.0">
  </head>
  <body>

    <div class="o-page o-page--center">
      <div class="o-page__card">
        <div class="c-card c-card--center">
          <span class="c-icon c-icon--large u-mb-small">
            <img src="<?php echo base_url(); ?>img/logo-small.svg" alt="Neat">
          </span>

          <h4 class="u-mb-medium">Welcome Back :)</h4>
          <?php echo form_open('auth/login'); ?>
            <div class="c-field">
              <label class="c-field__label">Username</label>
              <input class="c-input u-mb-small" type="text" name="username" id="username" placeholder="e.g. adamnsereko" required>
            </div>
            
            <div class="c-field">
              <label class="c-field__label">Password</label>
              <input class="c-input u-mb-small" type="password" name="password" id="password" placeholder="Numbers, Pharagraphs Only" required>
            </div>

            <button class="c-btn c-btn--fullwidth c-btn--info">Login</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Main JavaScript -->
    <script src="<?php echo base_url(); ?>js/neat.min.js?v=1.0"></script>
  </body>
</html>