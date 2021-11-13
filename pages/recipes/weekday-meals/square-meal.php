<!DOCTYPE html>
<html lang="en">

<head>
    <title>Square meal</title>
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
                <a class="nav-item nav-link" href="weekday-meals.php">Weekday meals</a>

            </div>
        </div>
    </nav>
    
    <div class="jumbotron text-center bg-light">
        <h1>Square meal</h1>
        <p>Mmmmm...</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid rounded" style="float:center" src="../../../images/square-meal.png"
                    alt="sample-text">
            </div>
            <div class="col-sm-6">
                <h3>Ingredients</h3>
                <ul>
                    <li>Meat portion of choice</li>
                    <li>300g greens (broccoli/sprouts/cabbage etc.)</li>
                    <li>160g rice (1 mug for 4 servings) or some couscous</li>
                    <li>Extra vegetable if desired (for more colour!)</li>
                </ul>
                <ol>
                <h3>Instructions</h3>
                    <li>Place meat portions in preheated oven and cook according to instructions.</li>
                    <li>Whilst meat portion is cooking, cook the veg.</li>
                    <li>To make the rice, measure 1 mug of rice and add to an empty pot.
                        Measure 2 mugs of water, and add along with some salt.
                        Bring to the boil, and allow to simmer.
                        When the water has all cooked off, it's done!
                    </li>
                    <li>Eat up.</li>   
                </ol>
                <p>
                    Serves 4.
                </p>
            </div>
        </div>
    </div>
</body>

<footer>
    <?php require "../../../includes/recipe-footer.php"; ?>
</footer>

</html>