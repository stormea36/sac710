<!doctype html>
<html land="en" ng-app="productApp">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SAC 710</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">

    {{ HTML::script('/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'); }}

            <!--load stylesheets-->
    {{ HTML::style('//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css'); }}
    <!--
    {{ HTML::style('/css/bootstrap-theme.min.css'); }}
    -->
    {{ HTML::style('/css/bootstrap.min.css'); }}
    {{ HTML::style('/css/main.css'); }}
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 20px;
        }
    </style>

</head>
<body ng-controller="ProductController">
    <nav class="navbar nav-sierra navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="/img/sierraPN.png" alt="Sierra Patient Network Logo" /></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <form class="navbar-form navbar-right" role="form">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div><!--/.navbar-collapse -->
        </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">

            <div class="row">
                <div class="col-md-7">
                    <h1><% info.name %></h1>
                    <p class="lead">This is a testament to my personal efforts to build a great site for these guys. Let's get it on it.</p>
                    <p class="col-md-offset-1">Top of the line quality medication</p>
                    <p class="col-md-offset-2">Delivered right to your door</p>
                    <p class="col-md-offset-3">See why we are the best in the area</p>

                </div>
                <div class="col-md-5">
                    <img src="img/horizontal_nug1.png" alt="nug of green" />
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

        <div class="container">
            <h1>Currently available - <p ng-model="qtySort"></p></h1>
            <div class="row">

                <select ng-model="query.type" class="typeSelect">
                    <option selected value="">All</option>
                    <option value="Indica">Indica</option>
                    <option value="Sativa">Sativa</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Edible">Edible</option>
                    <option value="Concentrate">Concentrate</option>
                    <option value="Equipment">Equipment</option>
                </select>
                <select ng-model="qtySort" class="qtySelect">
                    <option selected value="">All</option>
                    <option value="gram">gram</option>
                    <option value="eighth">eighth</option>
                    <option value="quarter">quarter</option>
                    <option value="half">half</option>
                    <option value="ounce">ounce</option>
                </select>



            </div>

            <div class="row product-viewer">
                <div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 col-md-4 item-style" ng-repeat="tester in test | filter:query">
                    <div class="item-box">
                        <img src="/img/product/blueberry-haze.jpg"/>
                        <div class="item-color-bar"></div>

                        <div class="item-price-box">
                            <div class="item-price-line" ng-repeat="(key,price) in tester.prices" ng-show="key === qtySort">
                                <p class="item-price-label"><%key%></p><p class="item-price-val"><%price%></p>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-left">
                                <h4><% tester.name | limitTo: 40 %><%tester.name.length > 30 ? '...' : '' %><small> <% tester.type %></small></h4>
                                <p><%  tester.description | limitTo: 80 %><%tester.description.length > 20 ? '...' : '' %></p>
                            </div>
                            <div class="info-right">
                                <button class="btn btn-primary btn-full">Get It</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>&copy; Company 2015</p>
        </footer>
    </div> <!-- /container -->

    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js'); }}
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.js"><\/script>')</script>

    {{ HTML::script('//ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js'); }}

    {{ HTML::script('/js/main.js'); }}

    {{ HTML::script('/js/controllers/productController.js'); }}

            <!--load scripts-->
    {{ HTML::script('/js/vendor/bootstrap.min.js'); }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.1/angular-animate.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.1/angular-sanitize.min.js') }}
    {{ HTML::script('/js/services/refreshData.js') }}
    {{ HTML::script('') }}

</body>
</html>