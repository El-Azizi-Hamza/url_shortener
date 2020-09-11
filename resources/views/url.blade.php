<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        
    <form action="{{ url ('/redirect') }}" method="post">
               @csrf
            <input type="hidden" id='id' name='id' value='<?php echo $id;?>'>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">skip ads</button>
        </form>
    </div>
</div>

<main role="main" class="container">
    <div class="jumbotron text-center">
        <h1>ad banners</h1>
        
        
    </div>
</main>