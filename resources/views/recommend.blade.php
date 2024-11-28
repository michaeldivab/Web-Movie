<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Recommendations for User {{ $userId }}</h1>
    <p>Here are some items you might like:</p>

    @if ($items->isEmpty())
    <div class="alert alert-info">No recommendations available at the moment.</div>
    @else
    <div class="row">
        @foreach ($items as $item)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <img src="{{ $item->poster }}" alt="Sample Image" style="width: 200px; height: 200px; object-fit: cover;">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">Item ID: {{ $item->id }}</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
