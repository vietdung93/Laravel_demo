<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">Simple Blog</a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Create Article</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
    <div class="jumbotron">
        <div class="container">
            <h2><strong>Title Article one</strong></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio totam quam fugiat inventore velit qui, sunt ipsum minima voluptatibus aliquid.</p>
            <p>
                <a href="#" class="btn btn-primary btn-lg">Learn more</a>
            </p>
        </div>
    </div>


    <script src="/js/jquery-1.11.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>