<!DOCTYPE html>
<html lang="en" data-ng-app="DavidSite">
    <head>
        <meta charset="utf-8" />
        <title>David Westerlund - Videogame Pianist & Producer</title>
        <meta name="keywords" content="<?php include("glkeywords.txt"); ?>" />
        <link rel="SHORTCUT ICON" href="Images/dwico.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <link type="text/css" rel="stylesheet" href="Style/site.css">
    </head>
    <body data-ng-controller="IndexController">

        <section class="container" data-ng-view>
        </section>

        <section class="container">
            <footer></footer>
        </section>



        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.2/angular.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular-route.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular-resource.min.js"></script>
        <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.10.0.js"></script>

        <script type="text/jscript" src="Scripts/DavidApp.js"></script>
        <script type="text/jscript" src="Scripts/Controllers/IndexController.js"></script>
        <script type="text/jscript" src="Scripts/Controllers/SendMailController.js"></script>


        <script type="text/javascript">

            
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-26354585-1']);
            _gaq.push(['_trackPageview']);
            
            (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>
