<!DOCTYPE html>
<html lang="en">

<head>
    <title>Risotto</title>
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
        <h1>Risotto</h1>
        <p>Winter staple.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid rounded" style="float:center" src="../../../images/risotto.png"
                    alt="risotto">
            </div>
            <div class="col-sm-6">
                <h3>Ingredients</h3>
                <ul>
                    <li>500g arborio rice</li>
                    <li>3 onions</li>
                    <li>3 garlic cloves</li>
                    <li>Handful of dried porcini</li>
                    <li>500g beef mince</li>
                    <li>Chicken stock (2 cubes, 1 litre)</li>
                    <li>1 glass red wine</li>
                    <li>Parmigiano</li>
                </ul>
                <ol>
                    <li>Dice the onion and crush the garlic before frying them in some olive oil.</li>    
                    <li>Add the mince and let it brown slightly.</li>
                    <li>Pour in the rice and let it "crack" for about 5 minutes, stiring to avoid it sticking too much to the bottom.</li>
                    <li>Slowly add the chicken stock and continue stirring.</li>
                    <li>Hydrate the dried mushrooms in a bowl of boiling water, then chop up with scissors before adding into the mix.
                        Add in the mushroom "tea" too, being careful to leave any silt behind.
                    </li>
                    <li>Throw in the red wine at this point, and cover the pot while it cooks for about 20 minutes.</li>
                    <li>Add in the parmigiano and black pepper before serving.</li>
                </ol>
                <p>
                    Serves 5.
                </p>
            </div>
        </div>
    </div>
</body>

<footer>
    <?php require "../../../includes/recipe-footer.php"; ?>
</footer>

</html>