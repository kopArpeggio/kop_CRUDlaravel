<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <title>edit Student</title>

</head>

<body>
    <div class="container ">

        <div class="row ">
            <div class="col-2"></div>
            <div class="col-8   justify-content-center  align-items-center">
                <div class="card mx-auto">
                    <div class="card-header d-flex justify-content-center test">Student Description</div>
                    <div class="card-body">
                        <form action="{{ url('manage/update/'.$user->id )}}" method="post">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Firstname : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}"> 
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">lastname : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Email : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Update" class="btn btn-primary">
                                <label><a href="{{url('/manage')}}" class="btn btn-danger">Back</a></label>

                            </div>
                           

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>