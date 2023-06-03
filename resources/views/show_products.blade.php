<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">product name</th>
          <th scope="col">price</th>
          <th scope="col">image</th>
          <th scope="col">shop</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <th scope="row">{{$product->id}}</th>
          <td>{{$product->product_name}}</td>
          <td>{{$product->price}}</td>
          <td>image</td>
          <td>{{$product->shop_name}}</td>
          <td>
            <a href="/edit_product/{{$product->id}}" class="btn btn-sm btn-primary">edit</a>
            <a href="/delete_product/{{$product->id}}" class="btn btn-sm btn-primary">delete</a>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>

    
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>