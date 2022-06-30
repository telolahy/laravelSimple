@extends('layout')
@section('contenu')
<div class="new_arrivals">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h2>NOUVEAUTES <a class="btn btn-primary btn-sm" href="{{route('article.create')}}" >AJOUTER ARTICLE</a></h2>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col text-center">
				<div class="new_arrivals_sorting">
					<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">TOUT</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">FEMMES</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">ACCESSOIRES</li>
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">HOMMES</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
					
					<!-- Product 1 -->
					@foreach ($articlesHomme as $article)
						<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="{{Storage::url($article->image)}}" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">{{$article->name}} {{$article->description}} </a></h6>
									<div class="product_price">{{$article->prix}} fmg<span>$590.00</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="{{route('article.show',['article'=>$article->id])}}">Voir l'article</a></div>
						</div>
					@endforeach
									

					<!-- Product 2 -->
					@foreach ($articlesFemme as $article)
					<div class="product-item women">
						<div class="product product_filter">
							<div class="product_image">
								<img src="{{Storage::url($article->image)}}" alt="">
							</div>
							<div class="favorite"></div>
							<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
							<div class="product_info">
								<h6 class="product_name"><a href="single.html">{{$article->name}} {{$article->description}}</a></h6>
								<div class="product_price">{{$article->prix}} fmg</div>
							</div>
						</div>
						<div class="red_button add_to_cart_button"><a href="{{route('article.show',['article'=>$article->id])}}">Voir l'article</a></div>
					</div>
					@endforeach
					

					
					<!-- Product 4 -->
					@foreach ($articlesAccess as $article)
					<div class="product-item accessories">
						<div class="product product_filter">
							<div class="product_image">
								<img src="{{Storage::url($article->image)}}" alt="">
							</div>
							<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
							<div class="favorite favorite_left"></div>
							<div class="product_info">
								<h6 class="product_name"><a href="single.html">{{$article->name}} {{$article->description}}</a></h6>
								<div class="product_price">{{$article->prix}} fmg</div>
							</div>
						</div>
						<div class="red_button add_to_cart_button"><a href="{{route('article.show',['article'=>$article->id])}}">Voir l'article</a></div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection