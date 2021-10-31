<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soup</title>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="180x180" href="../../../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../../../favicon_io/site.webmanifest">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../main.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../../../index.html">
            <img src="../../../favicon_io/android-chrome-512x512.png" width="30" height="30"
                class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="../../../index.html">Home <span
                        class="sr-only">(current)</span></a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../pastas/pasta.php">Pasta</a>
                        <a class="dropdown-item" href="../rice/rice.php">Rice + barley</a>
                        <a class="dropdown-item" href="soup.php">Soup</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Other</a>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center bg-light">
        <h1>Soups</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <figure class="photo">
                    <img src="../../../images/bean-soup.png" alt="sample image" />
                    <figcaption>
                        <h2>Beans</h2>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-sm">
                <figure class="photo">
                    <img src="../../../images/tomato-and-barley-soup.png" alt="sample image" />
                    <figcaption>
                        <h2>Tomato and barley</h2>
                    </figcaption>
                    <a href="tomato-barley.php"></a>
                </figure>
            </div>
            <div class="col-sm">
                <figure class="photo">
                    <img src="../../../images/pea-and-ham-soup.png" alt="sample image" />
                    <figcaption>
                        <h2>Pea and ham</h2>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
        </div>
    </div>
</body>

</html>