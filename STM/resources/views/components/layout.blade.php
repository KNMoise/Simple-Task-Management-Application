<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO-DO-LIST</title>
    <!-- Bootstrap CSS or any other CSS framework -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    @section('navigation')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    form {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container {
        margin-top: 8rem;
    }
    .alert {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
</style> 
@endsection
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Navbar content -->
    </nav>
    <!-- Main Content -->
    @section('navigation')
    <li><a href="about">About</a></li>
    <li><a href="policy">Policy</a></li>
    <li><a href="app">Mobile App</a></li>
    @endsection

    <!-- Bootstrap JS or any other JS libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Form to add items -->
    <form method="post" action="{{ route('saveItem') }}">
        {{ csrf_field() }}
        <div class="container mt-4">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="name" class="col-form-label">Add Item</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="name" id="name" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-secondary">Save item</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
