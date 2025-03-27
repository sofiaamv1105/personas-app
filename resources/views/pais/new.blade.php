<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Country</title>
  </head>
  <body>
    <div class="container">
      <h1>Add Country</h1>
      <form method="POST" action="{{ route('paises.store') }}">
        @csrf
        <div class="mb-3">
          <label for="pais_codi" class="form-label">Code</label>
          <input type="text" required class="form-control" id="pais_codi" name="pais_codi" placeholder="Enter country code (3 letters)">
        </div>
        <div class="mb-3">
          <label for="pais_nomb" class="form-label">Country Name</label>
          <input type="text" required class="form-control" id="pais_nomb" name="pais_nomb" placeholder="Enter country name">
        </div>
        <div class="mb-3">
          <label for="pais_capi" class="form-label">Capital Code</label>
          <input type="number" required class="form-control" id="pais_capi" name="pais_capi" placeholder="Enter capital city code">
        </div>
        <div class="mt-3">
          <button type="submit" class="btn btn-primary">Save</button>
          <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
