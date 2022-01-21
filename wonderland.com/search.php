<!DOCTYPE html>
    <html lang="en"></html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Search form</title>
        <link rel="stylesheet" href="CSS/maicons.css">

        <link rel="stylesheet" href="CSS/bootstrap.css">

        <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.css">

        <link rel="stylesheet" href="vendor/animate/animate.css">

        <link rel="stylesheet" href="CSS/search.css">
    </head>
    <body id="searchBody">
        <?php include_once('./components/header.php') ?>
        
        <div class="page-section text-lg">
            <div class="container search-body">
                <div class="text-center wow fadeInUp">
                    <h1 id="search-title">Find What You Need</h1>
                    <div class="divider mx-auto"></div>
                 </div>

                <form class="search-form" action="index.php" method="POST">
                    <div class="row mt-5 ">
                        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                            <input id="serviceName" type="text" name="servicename" class="form-control" placeholder="Service Name">
                        </div>
                        <div class="col-12 col-sm-6 py-2 wow fadeInRight text-md" data-wow-delay="300ms">
                            <select name="category" id="price-range" class="custom-select">
                                <option value="range" selected disabled class="disable">Service Category</option>
                                <option value="salon">Salon</option>
                                <option value="training">Training</option>
                                <option value="medicare">Medicare</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="page" value="search_processing">
                    <button name="search-service" id="search-btn" type="submit" class="btn btn-primary wow zoomIn">Search</button>
                </form>
            </div>
        </div> <!-- .page-section -->

        <?php include_once('./components/footer.php') ?>
    </body>
</html>
