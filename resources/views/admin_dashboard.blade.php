<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-evenly">
                <div class="card text-bg-primary mx-auto">
                    <div class="card-header">{{ $made }}</div>
                    <h5>Orders Made</h5>
                </div>
            </div>
            <div class="col d-flex justify-content-evenly">
                <div class="card text-bg-primary mx-auto">
                    <div class="card-header">{{$ongoing}}</div>
                    <h5>Ongoing Orders</h5>
                </div>
            </div>
            <div class="col d-flex justify-content-evenly">
                <div class="card text-bg-primary mx-auto">
                    <div class="card-header">{{$sale}}</div>
                    <h5>Products for Sale</h5>
                </div>
            </div>
            <div class="col d-flex justify-content-evenly">
                <div class="card text-bg-primary mx-auto">
                    <div class="card-header">{{$users}}</div>
                    <h5>Total Users</h5>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Order #</th>
      <th scope="col">Name</th>
      <th scope="col">Order placed</th>
      <th scope="col">Order status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        @foreach ($recents as $recent)
      <th scope="row">{{ $recent->order_id }}</th>
      <td>{{ $recent->first_name}} {{$recent->last_name }}</td>
      <td>{{ $recent->time_placed }}</td>
      <td>{{ ucfirst($recent->status) }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
