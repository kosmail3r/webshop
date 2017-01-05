@extends('index')
@section('content')
<div class="container">
	<div class="main-content">
		<div class="online-strip">
			<div class="col-md-4 follow-us">
				<h3>follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
			</div>
			<div class="col-md-4 shipping-grid">
				<div class="shipping">
					<img src="images/shipping.png" alt="" />
				</div>
				<div class="shipping-text">
					<h3>Free Shipping</h3>
					<p>on orders over $ 199</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 online-order">
				<p>Order online</p>
				<h3>Tel:999 4567 8902</h3>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="products-grid">
			<header>
				<h3 class="head text-center">Категории</h3>
			</header>
			@foreach ($categories as $category)
				<div class="col-md-4 product simpleCart_shelfItem text-center">
					<a href="single.html"><img src="{{ $category->cat_img }}" alt="" /></a>
					<div class="mask">
						<a href="category/{{ $category->id }}">Посмотреть товары</a>
					</div>
					<a class="product_name" href="category/{{ $category->id }}">{{ $category->name }}</a>
				</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>

</div>

@endsection