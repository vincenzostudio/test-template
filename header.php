<?php
/* Header */
?>

    <!doctype html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:400,700" rel="stylesheet">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">

            <div class="container">
                <header id="masthead" class="site-header">

                    <div class="row">

                        <a class="skip-link screen-reader-text" href="#content">
                            <?php esc_html_e( 'Skip to content', 'squareupmedia' ); ?>
                        </a>

                        <!-- LEADERBOARD -->
                        <div class="col-lg-12 leaderboard">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/728x90-Leaderboard.png" class="img-responsive" alt="leaderboard">
                        </div>

                        <!-- LOGO -->
                        <div class="col-lg-12">
                            <p class="logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/squareupmedia_logo.png" class="website-logo" alt="<?php bloginfo( 'title' ) ?>">
                                </a>
                            </p>
                        </div>

                    </div>

                </header>
            </div>

        </div>
