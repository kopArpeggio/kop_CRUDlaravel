<!DOCTYPE html>
<html lang="en">

<head>
    <link href="/css/main.css" rel="stylesheet">

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

<body style="background-color: #8593ae;">
    <div class="container ">

        <div class="row " style="height: 100vh">
            <div class="col-2"></div>
            <div class="col-8   justify-content-center  align-items-center my-auto">
                <div class="card cardbg2 shadow p-3 mb-5 bg-white  " style="border-radius: 5%">
                    <div class="card-header d-flex justify-content-center test">Student Description</div>
                    <div class="card-body">
                        <form action="{{ url('manage/update/' . $user->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Firstname : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="firstname"
                                        value="{{ $user->firstname }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">lastname : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lastname"
                                        value="{{ $user->lastname }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Email : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email"
                                        value="{{ $user->email }}">
                                </div>
                            </div>
                            <input type="hidden" name="old_image" value="{{$user->image}}">
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">ภาพเก่า : </label>
                                <div class="col-sm-10">
                                    <img src="{{ asset($user->image) }}"
                                        style="width:40%; border-style: solid; border-color: pink; border-radius: 12px; border-width: 4px">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">โปรดเลือกรูปใหม่ : </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" value="Update" class="btn btn-primary ">
                                <label><a href="{{ url('/manage') }}" class="btn btn-danger">Back</a></label>

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
