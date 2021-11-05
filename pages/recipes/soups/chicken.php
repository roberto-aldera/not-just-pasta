<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chicken soup</title>
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
                <a class="nav-item nav-link" href="soup.php">Soup</a>

            </div>
        </div>
    </nav>
    
    <div class="jumbotron text-center bg-light">
        <h1>Chicken soup</h1>
        <p>Good for when you're feeling ill, or just any other time really.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid rounded" style="float:center" src="../../../images/chicken-soup.png"
                    alt="chicken-soup">
            </div>
            <div class="col-sm-6">
                <h3>Ingredients</h3>
                <ul>
                    <li>1 large onion, chopped</li>
                    <li>2 large carrots, chopped</li>
                    <li>4 sticks of celery, chopped</li>
                    <li>1 large leek, halved lengthways and diced </li>
                    <li>4 chicken breasts, or pieces on the bone</li>
                    <li>2 chicken stock cubes</li>
                    <li>Black pepper to taste</li>
                    <li>Mixed herbs</li>
                </ul>
                <ol>
                    <li>Heat some olive oil in a large saucepan. 
                        Add all chopped veggies and allow to fry/steam covered for 5 minutes.
                    </li>    
                    <li>Add chicken breasts and fry uncovered for 5 minutes.</li>
                    <li>Add boiling water until ingredients in pot are covered, then add stock cubes, black pepper and mixed herbs to taste.
                        Simmer for 15-20 minutes.
                    </li>
                    <li>Remove chicken from saucepan, cut into bite-size pieces (debone) and toss back into saucepan to heat for a few minutes.
                        Serve with fresh bread.</li>
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