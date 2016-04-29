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
                    <li class="active"><a href="{{ route('article.create') }}">Create Article</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>