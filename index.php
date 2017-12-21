<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="skin/favicon.ico">

    <title>Alshaya</title>

    <!-- Bootstrap core CSS -->
    <link href="skin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="skin/css/album.css" rel="stylesheet">
</head>

<body>
<header>
    <div class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand">Alshaya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">
    <div class="container">
        <section class="jumbotron">
            <form name="inv-parser" id="inv-parser" action="process.php" method="post">
                <div class="form-group">
                    <label for="parser_field">Enter String/Text</label>
                    <textarea class="form-control" name="parser_field" id="parser_field" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="output_type">Select Output Type</label>
                    <select class="form-control" id="output_type" name="output_type">
                        <option value="JSON">JSON</option>
                        <option value="Array">Array</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </div>
            </form>
        </section>
    </div>

</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
    </div>
</footer>
</body>
</html>