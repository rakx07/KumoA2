<!DOCTYPE html>
<html>
<head>
    <title>College Import</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-5">

                @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card-header">
                    <h4>Import College to Database</h4>
                </div>
                <div class="card-body mt-2">
                    <form action="{{ url('college/import')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                            <input type="file" name="import_file" class="form-control" />
                            <button type="submit" class="btn btn-primary">Import</button>
                    </form>
                <!-- //Show Tables -->
                <hr>
                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                        <tbody>

                        @foreach ($college as $item )
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->code}}</td>
                                <td>{{$item->name}}</td>
                                <!-- <td>{{$item->is_active}}</td> -->
                                <td>
                                @if ($item->is_active == 1)
                                Active
                            @else
                                Inactive
                            @endif


                                </td>
                            </tr>
                            @endforeach
                        </tbody>


                </table>

                <!-- New -->
                 </div>
            </div>
        </div>
    </div>
</body>
</html>
