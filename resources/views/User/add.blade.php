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
    <title>Insert Student</title>

</head>

<body>
    <div class="container ">

        <div class="row ">
            <div class="col-2"></div>
            <div class="col-8   justify-content-center  align-items-center ">
                <div class="card mx-auto ">
                    <div class="card-header d-flex justify-content-center test">Student Description</div>
                    <div class="card-body">
                        <form action="{{ route('insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Firstname : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="firstname" required>
                                </div>
                                @error('firstname')
                                    <div class="my-2">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">lastname : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lastname" required>
                                </div>
                                @error('lastname')
                                    <div class="my-2">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Email : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" required>
                                </div>
                                @error('email')
                                <div class="my-2">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Choose Profile : </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                @error('image')
                                <div class="my-2">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Add" class="btn btn-primary">

                            </div>
                            @error('firstname')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>
