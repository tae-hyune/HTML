<? include "common.php"?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>::CREHACKTIVE SIMPLE BOARD::</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <span data-feather="list"></span>&nbsp;&nbsp;
      <h5 class="my-0 mr-md-auto font-weight-normal">CREHACKTIVE SIMPLE BOARD</h5>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-5">CREHACKTIVE SIMPLE BOARD</h1>
      <p class="lead">SQL Injection 실습을 위한 DBMS별 게시판</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h5 class="my-0 font-weight-normal">MYSQL</h5>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-md btn-block btn-outline-info" onclick="window.open('mysql')">Access</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h5 class="my-0 font-weight-normal">MSSQL</h5>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-md btn-block btn-outline-primary" onclick="window.open('mssql')">Access</button>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h5 class="my-0 font-weight-normal">ORACLE</h5>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-md btn-block btn-outline-danger" onclick="window.open('oracle')">Access</button>
          </div>
        </div>
      </div>
    </div>
    <p class="text-center font-weight-light">Copyright ⓒ 2020 Crehacktive all rights reserved.</p>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="./js/jquery-slim.min.js"><\/script>')</script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
