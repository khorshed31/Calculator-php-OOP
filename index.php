<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/all.css"/>
        <link rel="stylesheet" href="assets/css/style.css"/>
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a href="" class="navbar-brand">LOGO</a>
                <ul class="navbar-nav">
                    <li><a href="" class="nav-link">Calculator</a></li>
                    <li><a href="" class="nav-link">Service</a></li>
                </ul>
            </div>
        </nav>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                My Calculator
                            </div>
                            <div class="card-body">
                                <form action="action.php" method="POST">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">First Number</label>
                                        <div class="col-md-9">
                                            <input type="number" name="f_num" class="form-control" value="<?php echo isset($_POST['operator']) ? $_POST['f_num'] : '';?>" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Second Number</label>
                                        <div class="col-md-9">
                                            <input type="number" name="s_num" class="form-control" value="<?php echo isset($_POST['operator']) ? $_POST['s_num'] : '';?>" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Select Action</label>
                                        <div class="col-md-9">
                                            <label><input type="radio" name="operator" value="+" required/> Addition </label>
                                            <label><input type="radio" name="operator" value="-" required/> Subtraction </label>
                                            <label><input type="radio" name="operator" value="*" required/> Multiplication </label>
                                            <label><input type="radio" name="operator" value="/" required/> Division </label>
                                            <label><input type="radio" name="operator" value="%" required/> Remainder </label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3">Result</label>
                                        <div class="col-md-9">
                                            <input type="text" readonly name="" class="form-control" value="<?php echo isset($res) ? $res : '';?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3"></label>
                                        <div class="col-md-9">
                                            <input type="submit" name="btn" class="btn btn-outline-success" value="Calculate"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="assets/js/jquery-3.6.0.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>


