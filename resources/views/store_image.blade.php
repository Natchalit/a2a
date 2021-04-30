<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    {{--  <link href="{{ asset('assets/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <title>Store Image</title>
</head>

<body>
    <div class="container">
        <br>
        <h3>Insert Image</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-titel">Product Form</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <label for="" align="left" class="col-md-4">Enter name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="p_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="" align="left" class="col-md-4">Enter Code</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="p_code" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="" align="left" class="col-md-4">Enter value</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="value" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="" align="left" class="col-md-4">Enter type</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="type" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label for="" align="left" class="col-md-4">Select your image</label>
                        </div>
                        <div class="col-md-8">
                            <input type="file" name="p_image" class="form-control" onchange="previewFile(this)"
                                required>
                            <img id="previewImg" alt="profile Img" style="max-width:130px;margin-top:20px;">
                        </div>
                    </div>
                    <br>
                    <div class="form-group" align="center">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Product data</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table tabel-bordered">
                        <tr>
                            <th>P Code</th>
                            <th>P Name</th>
                            <th>Value</th>
                            <th>Type</th>
                            <th>Image</th>
                        </tr>
                        @foreach ($data as $row)
                        <tr>
                            <td>{{ $row->p_code }}</td>
                            <td>{{ $row->p_name }}</td>
                            <td>{{ $row->value }}</td>
                            <td>{{ $row->type }}</td>
                            <td>
                                <img src="{{ asset('images') }}/{{ $row->p_image }}" class="thumbnail" width="75" alt="">
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script>
        function previewFile(input){
            var file=$("input[type=file]").get(0).files[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result)
                }
                reader.readAsDataURL(file);
            }  

        }
    </script>
</body>

</html>