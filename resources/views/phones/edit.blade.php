<!DOCTYPE html>
<html lang="en">
    @section("header")
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>

    <div class="col-lg-4 col-md-4 col-sm-4 container justify-content-center mt-5">

        <h1 class="page-header mb-5 fw-bold text-white bg-warning">Update Mobile Phone</h1>
        <form action="{{route("phones.update",$phone->phone)}}" method="Post" autocomplete="off" >
            @method("PUT")
            @csrf
            <div class="form-group ">
              <label class="fw-bold">phone</label>
              <input type="text" class="form-control"  name="phone"  value="{{$phone->phone}}" required>

            </div>
            <button type="submit" class="btn btn-warning mt-4 w-25  ">Update</button>
          </form>
    </div>

</body>
</html>





