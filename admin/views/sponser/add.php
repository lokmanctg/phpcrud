<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Add New</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../lib/css/style.css">


</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php">Company name</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <span data-feather="user"></span>
                            sponsers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Integrations
                        </a>
                    </li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Saved reports</span>
                    <a class="d-flex align-items-center text-muted" href="#">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Current month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Last quarter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Social engagement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            Year-end sale
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">



            <form id="sponsers-entry-form" method="post" action="store.php" role="form">

                <div class="messages"></div>
                <h1>ADD NEW</h1>
                <div class="controls">
                    <div class="row">
                        <div class="col-lg-6">
                            &nbsp;
                        </div>
                        <div class="col-lg-6">
                            <!--                            <div class="form-group">-->
                            <!--                                <label for="brand_id">brand_id</label>-->
                            <!--                                <input id="brand_id"  value="" type="text" name="brand_id" class="form-control">-->
                            <!--                                <div class="help-block with-errors"></div>-->
                            <!--                            </div>-->
                        </div>
                        <!--                        <div class="col-lg-6">-->
                        <!--                            <div class="form-group">-->
                        <!--                                <label for="label_id">label_id</label>-->
                        <!--                                <input id="label_id"  value="" type="text" name="label_id" class="form-control">-->
                        <!--                                <div class="help-block with-errors"></div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="title">Enter sponser name</label>
                                <input id="title"
                                       value=""
                                       type="text"
                                       name="title"
                                       placeholder="e.g.  "
                                       autofocus="autofocus"
                                       class="form-control">
                                <div class="help-block text-muted">Enter sponser name</div>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                                               <div class="form-group">
                                                        <label for="picture">picture</label>
                                                        <input id="picture"  value="" type="file" name="picture" class="form-control">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                               </div>
<!--                                                <div class="col-lg-6">-->
<!--                                                    <div class="form-group">-->
<!--                                                        <label for="name">name</label>-->
<!--                                                        <input id="name"  value="" type="text" name="name" class="form-control">-->
<!--                                                        <div class="help-block with-errors"></div>-->
<!--                                                    </div>-->
<!--                                                </div>-->


                        <!--                        <div class="col-lg-6">-->
                        <!--                            <div class="form-group">-->
                        <!--                                <label for="sponser_type">sponser_type</label>-->
                        <!--                                <input id="sponser_type"  value="" type="text" name="sponser_type" class="form-control">-->
                        <!--                                <div class="help-block with-errors"></div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-lg-6">-->
                        <!--                            <div class="form-group">-->
                        <!--                                <label for="is_new">is_new</label>-->
                        <!--                                <input id="is_new"  value="" type="text" name="is_new" class="form-control">-->
                        <!--                                <div class="help-block with-errors"></div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-lg-6">-->
                        <!--                            <div class="form-group">-->
                        <!--                                <label for="cost">cost</label>-->
                        <!--                                <input id="cost"  value="" type="text" name="cost" class="form-control">-->
                        <!--                                <div class="help-block with-errors"></div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-lg-6">-->
                        <!--                            <div class="form-group">-->
                        <!--                                <label for="mrp">mrp</label>-->
                        <!--                                <input id="mrp"  value="" type="text" name="mrp" class="form-control">-->
                        <!--                                <div class="help-block with-errors"></div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-lg-6">-->
                        <!--                            <div class="form-group">-->
                        <!--                                <label for="special_price">special_price</label>-->
                        <!--                                <input id="special_price"  value="" type="text" name="special_price" class="form-control">-->
                        <!--                                <div class="help-block with-errors"></div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                                            </div>

                        <button type="submit" class="btn btn-success">
                             Save
                        </button>


                    </div>

            </form>
        </main>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="../../lib/js/bootstrap.min.js"></script>
<script src="../../lib/js/dashboard.js"></script>
</body>
</html>