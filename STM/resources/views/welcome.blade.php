<x-layout>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>    
        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">            
    </head>
<body>
    <form method="post" action="">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Add New Item:</label>
            </div>
            <div class="col-auto">
                <input type="text" name="name" id="name" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-secondary">Save item</button>
            </div>
        </div>
    </form>
    
</body>
</html>
</x-layout>