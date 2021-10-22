<!DOCTYPE html>
<html lang="en">

<head>
    <title>Spaghetti carbonara</title>
    <?php require "../../../includes/recipe-header.php"; ?>
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
                <a class="nav-item nav-link" href="pasta.php">Pasta</a>

            </div>
        </div>
    </nav>

    <div class="jumbotron text-center bg-light">
        <h1>Spaghetti carbonara</h1>
        <p>Mmmmm creamy (but don't even <em>think</em> about adding cream).</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid rounded" style="float:center" src="../../../images/spaghetti-carbonara.png"
                    alt="spaghetti-carbonara">
            </div>
            <div class="col-sm-6">
                <h3>Ingredients</h3>
                <ul>
                    <li>200g spaghetti (and some of the pasta water)</li>
                    <li>2 eggs</li>
                    <li>40g parmigiano</li>
                    <li>75g pancetta</li>
                </ul>

                <h3>Instructions</h3>
                <ol>
                    <li>Boil the pasta water and get the spaghetti cooking (remember to add salt).</li>
                    <li>Whisk the eggs in a bowl with a fork, and add in the grated cheese and black pepper.</li>
                    <li>Fry up the pancetta in a pan large enough to hold the final dish. 
                        Add the spaghetti when it's ready and mix it together, adding a spoon or two of some of the pasta water.</li>
                    <li>Remove from the heat, and add the egg and cheese mixture, stirring and tossing it all together until it's glossy.</li>
                    <li>Serve with grated parmigiano and more black pepper.</li>
                </ol>
                <p>
                    Serves 2.
                </p>
            </div>
        </div>
    </div>
</body>

<footer>
    <?php require "../../../includes/recipe-footer.php"; ?>
</footer>

</html>