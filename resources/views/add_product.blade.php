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
    
    <h1>add product</h1>

    <form action="  " method="post">
    	<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">product name</label>
		  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="product name" name="product_name">
		</div>
    	<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">price</label>
		  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="product price" name="price">
		</div>
    	<div class="mb-3">
		  <select name="shop_id">
		  	<option value="null">select a shop</option>
		  	@foreach($shops as $shop)
			  <option value="{{$shop->id}}">{{$shop->shop_name}}</option>
			@endforeach
			</select>
		</div>
		<input type="submit" value="submit">
    </form>

    
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>