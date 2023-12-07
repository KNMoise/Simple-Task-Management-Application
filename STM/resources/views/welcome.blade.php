
<x-layout>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <div class="container">    
        <div class="navigation">
            @yield('nav')
        </div>
        <!-- Navigation or any other content -->
        
        @if(count($listItems ?? []) > 0)
            @foreach ($listItems as $listItem)
                <div class="alert alert-primary" role="alert">
                    <span>Item: {{ $listItem->name }}</span> 
                    <form method="post" action="{{ route('markAsComplete', $listItem->id) }}">
                        {{ csrf_field() }}
                        <button 
                            type="submit" 
                            class="btn {{ $listItem->is_complete ? 'btn-success' : 'btn-danger' }}"
                        >
                            {{ $listItem->is_complete ? 'Completed' : 'Mark as Complete' }}
                        </button>
                    </form>                    
                </div>
            @endforeach
        @else
            <div class="alert alert-danger" role="alert">
                No Items Saved Yet
            </div>
        @endif

        <!-- Form to add new item -->
        <form method="post" action="{{ route('saveItem') }}">
            {{ csrf_field() }}
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="name" class="col-form-label">Add New Item:</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="name" id="name" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-secondary">Save item</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
</x-layout>
