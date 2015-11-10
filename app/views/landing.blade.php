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
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
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
        <div class="container-fluid">
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
                <div class="navbar-left navbar-form">
                    <div class="form-group">
                        <h4><span class="hidden-md hidden-sm">First Timer? Get a FREE G</span> <SMALL class="call-us">Call Us: <span>(219) 867-5309</span></SMALL></h4>
                    </div>
                </div>
                <ul class="navbar-right navbar-nav nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Add Product</a></li>
                            <li><a href="#">Membership</a></li>
                            <li><a href="#">Edit Information</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
                {{--<form class="navbar-form navbar-right" role="form">--}}
                    {{--<div class="form-group">--}}
                        {{--<h4>Get deals delivered: </h4>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<input type="text" placeholder="Email" class="form-control">--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-primary">Join</button>--}}
                {{--</form>--}}
            </div><!--/.navbar-collapse -->
        </div>
        <div class="greenHRow"></div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">

            <div class="row">
                <div class="col-md-7">
                    <h1><% info.name %></h1>
                    <p class="lead">
                        We are a delivery service able to offer high quality cannabis medication and products right to your door.
                        We serve the Sacramento area offering everything you need from a diverse Flower selection and
                        high quality extracts to topicals. Come see for yourself why we are one of the top services in the area.</p>

                        <button id="cartBtn" type="button" class="button btn-primary">See our Menu</button>
                        <button type="button" class="button btn-default">Join our Community</button>


                </div>
                {{--<div class="col-md-5">--}}
                    {{--<img src="img/horizontal_nug1.png" alt="nug of green" />--}}
                {{--</div>--}}
            </div>

        </div>
    </div>
    <div class="container-fluid quote-holder">
        <div class="row">
            <div class="col-sm-7 col-md-7 col-xs-10 col-xs-offset-1 col-sm-offset-0">
                <div class="quote-box">
                    <p class="quote-text visible-md visible-lg hidden-xs hidden-sm">
                        Tried a couple different delivery services but these guys are who you want to use. Local organically grown product to your door step. What else can you ask for. Don't waste your time with sketchy people. These guys are clean cut and not someone who you would be ashamed of to come in your house or apt building.
                        Check out their refer a patient program.
                    </p>
                    <p class="quote-text visible-xs visible-sm hidden-md hidden-lg">
                        They are essentially a dispensary that's confidentially brought to you! Great selection and prices. Definitely try the Grape Ape from Hail Mary Productions. It's some fire
                    </p>
                    <p class="quote-author visible-md visible-lg hidden-xs hidden-sm">
                        AllinALLday23 <small>on</small> <a href="https://weedmaps.com/deliveries/sierra-patient-network#/reviews" class="weedmaps-icon quote-source">Weedmaps</a>
                    </p>
                    <p class="quote-author visible-xs visible-sm hidden-md hidden-lg">
                        trufflez <small>on</small> <a href="https://weedmaps.com/deliveries/sierra-patient-network#/reviews" class="weedmaps-icon quote-source">Weedmaps</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-5 col-xs-12">
                <div class="sign-up well">
                    <h3 class="text-uppercase">Delivery? No It's Sierra.</h3>
                    <p class="lead">Join others in getting consistent, reliable, quality medication delivered right to your door. Sign up and get all the perques of the network.</p>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Your Name</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button class="btn btn-success" role="button">Join the Network</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
                <div class="col-xs-4 info-holder">

                    <div class="points-info">
                        <h3>Quality Plants</h3>
                        <div class="points-img">
                            <img src="/img/master_kush.jpg" alt="master kush" />
                        </div>
                        <p class="visible-lg">With over 25 years experience cultivating cannabis,
                            our master grower and his cultivation team have dialed in their techniques
                            to achieve a high-quality, 100% organically grown plant.
                            {{--for every stage of the plant’s life cycle. --}}
                            {{--By using a feeding regimen consisting of 100% organic actively-aerated compost tea with EM-1, --}}
                            {{--along with 100% organic soil amendments, we are able to ensure that our patients have access to the safest, --}}
                            {{--highest quality medicine available. --}}
                        </p>
                    </div>
                </div>
                <div class="col-xs-4 info-holder">

                    <div class="points-info">
                        <h3>Diverse Products</h3>
                        <div class="points-img">
                            <img src="/img/mango_shatter.jpg" alt="master kush" />
                        </div>
                        <p class="visible-lg">
                            {{--In the constantly evolving cannabis industry, i--}}
                            {{--t is essential to be ‘in the know’ regarding new innovative technologies and new forms of --}}
                            {{--medicine being made available to our patients. --}}
                            {{--Keeping that in mind, --}}
                            We are always expanding our new product selection and source top industry professionals to process our organic
                            flower using state-of-the-art equipment and extracting methods.
                        </p>
                    </div>
                </div>
                <div class="col-xs-4 info-holder">

                    <div class="points-info">
                        <h3>Deep Involvement</h3>
                        <div class="points-img">
                            <img src="/img/cannabis-salve.jpg" alt="master kush" />
                        </div>
                        <p class="visible-lg">
                            From basic product education to workshops like 'cannabis history 101' and 'DIY growing techniques',
                            we offer a wide variety of service to help raise awareness about cannabis.
                            </p>
                        {{----}}
                            {{--We at the Sierra Patient Network strive to educate our clients on all dynamics from the cannabis plant; --}}
                            {{--From basic product education all of the way to workshops like ‘cannabis history 101’ and ‘DIY Growing--}}
                            {{--techniques’, we offer a wide variety of service to help raise awareness within the ever-changing cannabis industry</p>--}}
                    </div>
                </div>
        </div>
        <div class="row">
            <h3 class="text-center">Learn more about <a href="#">Our Story</a></h3>
        </div>
    </div>

    <hr>

    <div class="container-fluid">
        <h1 id="cartSection">Currently available - <p ng-model="qtySort"></p></h1>
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
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6 col-md-4 item-style item-animation" ng-repeat="tester in test | filter:query">
                <div class="item-box panel panel-default">
                    <img src="/img/blueberry-haze.jpg"/>
                    <div class="item-color-bar"></div>

                    <div class="item-price-box">
                        <div class="item-price-line" ng-repeat="(key,price) in tester.prices" ng-show="key === qtySort">
                            <p class="item-price-label"><%key%></p><p class="item-price-val"><%price%></p>
                        </div>
                    </div>
                    <div class="item-info">
                        <div class="info-left">
                            <h4><% tester.name | limitTo: 40 %><%tester.name.length > 30 ? '...' : '' %><small> <% tester.type %></small></h4>
                            <a data-toggle="tooltip" data-placement="bottom" title="<% tester.description | limitTo:200 %>" tooltip><%  tester.description | limitTo:50 %><%tester.description.length > 50 ? '...' : '' %></a>
                        </div>
                        <div class="info-right">
                            <button class="btn btn-primary btn-full">Get It</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <footer>
            <p>&copy; Company 2015</p>
        </footer>
    </div>
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js'); }}
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.js"><\/script>')</script>

    {{ HTML::script('//ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js'); }}
    {{ HTML::script('/js/vendor/bootstrap.min.js'); }}
    {{ HTML::script('/js/main.js'); }}

    {{ HTML::script('/js/controllers/productController.js'); }}

            <!--load scripts-->
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.1/angular-animate.min.js') }}
    {{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0-beta.1/angular-sanitize.min.js') }}
    {{ HTML::script('/js/services/refreshData.js') }}
    {{ HTML::script('') }}

</body>
</html>