<html>
<head>
    <title>{block name=title}Default Page Title{/block}</title>
    <link rel="stylesheet" type="text/css" href="../public/css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="/">
                iMath conference
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="/participants">Participants</a></li>
                <li><a href="/announcements">Announcements</a></li>
                <li><a href="/program" >Program</a></li>
                <li><a href="/contacts" >Contacts</a></li>
                <li><a href="/photos" >Photos</a></li>
                <li><a href="/registration" >Registration</a></li>
            </ul>

        </div>
    </div>
</nav>
<div class="container">
{block name=body}{/block}
</div>
</body>
</html>
