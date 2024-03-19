<!doctype html>
<html lang="it" data-bs-theme="auto">
  <head>
    <script src="assets/bootstrap/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Saci Group </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">-->

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/jquery-ui/jquery-ui.css">
    <link href="assets/style.css" rel="stylesheet">
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <?php include("../portale/header.php"); ?>

<div class="container-fluid">
  <div class="row">
    <?php include("../portale/menu.php"); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Inserimento</h1>
        
      </div>
      <h2>Segnalazione illeciti (Whistleblowing)</h2>
      <form>
        <div class="mb-3">
          <label for="motivazione" class="form-label">Motivazione</label>
          <input type="motivazione" class="form-control" id="motivazione">
        </div>
        <div class="mb-3">
          <label for="nominativo" class="form-label">Nome e Cognome della persona segnalata</label>
          <input type="nominativo" class="form-control" id="nominativo" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Descrizione Illecito</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-sm btn-outline-secondary">Invia Segnalazione</button>
      </form>
    </main>
  </div>
</div>
<!-- jQuery library -->
<script src="assets/jquery/jquery-3.7.1.min.js"></script>
<script src="assets/jquery-ui/jquery-ui.js"></script>
<script src="assets/jquery-ui/datepicker-it.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/fontawesome/js/all.min.js"></script>
<script src="assets/service.js"></script>
<script>
  $(document).ready(function () {
    $("#inputnascita").datepicker($.datepicker.regional['it']);
    $("#inputeng").datepicker($.datepicker.regional['it']);
});
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
