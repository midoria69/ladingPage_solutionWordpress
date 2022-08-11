<!doctype html>
<!--
	Solution by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- awesone fonts css-->
    
    <?php wp_head ( ) ; ?>

    <title><?php bloginfo ( 'nom' ) ; ?></title>
    <style>

    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
    <div class="container"><a class="navbar-brand">Solution</a>
        <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"><span
                class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>
        <div id="my-nav" class="collapse navbar-collapse">

        <?php wp_nav_menu ( array ( 'menu_class' => 'navbar-nav mx-lg-auto' , 'container' => 'ul' , ) ) ; ?> 
        
            <form class="form-inline my-2 my-lg-0">
                <a href="#" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">login</a> <a href="#"
                                                                                                       class="btn btn-info my-2 my-sm-0 text-uppercase">sign
                up</a>
            </form>
        </div>
    </div>
</nav>
</html>