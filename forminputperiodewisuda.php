<!DOCTYPE html>
<html lang="en">
<head>
  <title>Input Periode Wisuda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Input Periode Wisuda</h2>
  <form method="post" action="inputperiodewisuda.php">
    <div class="form-group row">
    <label for="IdPeriodeWisuda" class="col-4 col-form-label">Id Periode Wisuda</label> 
    <div class="col-8">
      <input id="IdPeriodeWisuda" name="IdPeriodeWisuda" placeholder="Contoh : 20241 untuk semester ganjil, 20242 untuk semester genap." type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="KuotaWisuda" class="col-4 col-form-label">Kuota Wisuda</label> 
    <div class="col-8">
      <input id="KuotaWisuda" name="KuotaWisuda" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="WaktuWisuda" class="col-4 col-form-label">Waktu Wisuda</label> 
    <div class="col-8">
      <input id="WaktuWisuda" name="WaktuWisuda" type="date" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </form>
</div>

</body>
</html>