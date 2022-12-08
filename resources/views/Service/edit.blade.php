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

        <div class="row " style="height: 100vh">
            <div class="col-2"></div>
            <div class="col-8   justify-content-center  align-items-center  my-auto">
                <div class="card ">
                    <div class="card-header d-flex justify-content-center test">Service Description</div>
                    <div class="card-body">
                        <form action="{{ url('/manage/service/update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">ชื่อบริการ : </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="service_name"
                                        value="{{ $service->service_name }}">
                                </div>
                            </div>
                            @error('service_name')
                                <div class="my-2">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">โปลดเลือกภาพใหม่ : </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="service_image">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">ภาพเก่า : </label>
                                <div class="col-sm-10">
                                    <img src="{{asset($service->service_image)}}" style="width:30%; border-style: solid; border-color: pink; border-radius: 12px; border-width: 4px">
                                </div>
                            </div>
                            @error('service_image')
                                <div class="my-2">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                    </div>


                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Update" class="btn btn-primary">
                        <label><a class="btn btn-danger" href="{{url('/manage/viewservice')}}">Back</a></label>

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
