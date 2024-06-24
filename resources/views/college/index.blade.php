<!DOCTYPE html>
<html>
<head>
    <title>My Laravel Webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <div class="card-header">
                    <h4>Import College to Database</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('college/import')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                            <input type="file" name="import_file" class="form-control" />
                            <button type="submit" class="btn btn-primary">Import</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
