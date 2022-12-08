<!DOCTYPE html>
<html lang="en">

<head>
    <link href="/css/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Student</title>
</head>

<body style="background-color: #8593ae">
    <div class="container" style="font-family: 'Open Sans', sans-serif;">
        <div class="row  " style="height: 100vh; ">
            <div class="col-8 my-auto">

                <div class="card  cardbg">
                    <div class="card-header  " style="color: palevioletred">
                        Service

                    </div>
                    <div class="card-body  ">

                        <div class="table-responsive">
                            <table class="table table-hover table-responsive ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">id</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">ServiceName</th>
                                        <th scope="col">CreatedAt</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($service as $row)
                                        <tr>
                                            @csrf
                                            <td>{{ $service->firstItem() + $loop->index }}</td>
                                            <td>{{ $row->id }}</td>
                                            <td>
                                                <img src="{{asset($row->service_image)}}" alt="" style="width: 30%; ">
                                            </td>
                                            <td>{{ $row->service_name }}</td>
                                            <td>{{ Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</td>
                                            <td><label><a class="btn btn-primary"
                                                        href="{{ url('/manage/service/edit/'. $row->id) }}">Edit</a></label>
                                            </td>
                                            <td><label><a class="btn btn-danger"
                                                        href="{{ url('/manage/del/' . $row->id) }}">Del.</a></label>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $service->links('pagination::bootstrap-4') }}
                    </div>
                </div>

            </div>
            <div class="col-4 my-auto ">
                <div class="card cardbg">
                    <div class="card-header" style="color: palevioletred">
                        Add
                    </div>
                    <div class="card-body   ">
                        <label class="d-flex justify-content-center"><a href="{{ url('/manage/service') }}"
                                class="btn btn-primary">Add Service</a></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
