<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lasagne</title>
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
        <h1>Lasagne</h1>
        <p>A weekend treat.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid rounded" style="float:center" src="../../../images/lasagne.png"
                    alt="lasagne">
            </div>
            <div class="col-sm-6">
                <h3>Ingredients</h3>
                <h5>Ragù:</h5>
                <ul>
                    <li>500g mince</li>
                    <li>2 onions</li>
                    <li>3-5 carrots</li>
                    <li>3-5 stalks of celery</li>
                    <li>2x700ml passata</li>
                    <li>4 garlic cloves</li>
                    <li>2 sprigs of rosemary</li>
                    <li>2 bay leaves</li>
                    <li>Small bunch of sage</li>
                    <li>1 red chilli (or black pepper)</li>
                    <li>1 glass red wine</li>
                </ul>

                <h5>Béchamel sauce:</h5>
                <ul>
                    <li>70g butter</li>
                    <li>2-3 heaped tbsp flour</li>
                    <li>750ml milk (at room temperature if possible)</li>
                    <li>Grated nutmeg</li>
                    <li>Salt</li>
                </ul>

                <h5>Other:</h5>
                <ul>
                    <li>Lasagne sheets (quantity TBC)</li>
                    <li>Optional side salad things</li>
                </ul>

                <h3>Instructions</h3>
                <h5>Béchamel sauce:</h5>
                <ol>
                    <li>Melt the butter in a saucepan and stir in the flour.</li>
                    <li>Gradually add milk, stirring continuously.</li>
                    <li>Add nutmeg and salt as you bring it to the boil, stirring well as it begins to thicken.</li>
                </ol>

                <h5>Ragù:</h5>
                <ol>
                    <li>Dice onion, carrots, and celery before starting.</li>
                    <li>Fry onion in some olive oil with the crushed garlic.</li>
                    <li>Pierce the chilli and add to the frying mix along with the mince and fresh herbs.</li>
                    <li>After a few minutes, add in the carrots and celery and allow to soften.</li>
                    <li>Next, add in the passata and season to taste.</li>
                    <li>Add red wine and allow to simmer for 30min.</li>
                </ol>

                <h5>Lasagne:</h5>
                <ol>
                    <li>Layer pasta sheets, then ragù, then béchamel sauce, parmigiano and repeat until you run out.</li>
                    <li>Finish with a thin top layer of sauces and grated parmigiano.</li>
                </ol>
                <p>
                    Serves 8.
                </p>
            </div>
        </div>
    </div>
</body>

<footer>
    <?php require "../../../includes/recipe-footer.php"; ?>
</footer>

</html>