@extends('...layouts.user_layout')
@section('title')
    <title>Book Bus Tickets For Your Next Trip</title>
@endsection
@section('content')

	@include('user.menu')

	<!-- START: MODIFY SEARCH -->
	<div class="row modify-search modify-car">
		<div class="container clear-padding">
			<form >
				<div class="col-md-3">
					<div class="form-gp">
						<label>Pick Up Location</label>
						<div class="input-group margin-bottom-sm">
							<input type="text" name="city" class="form-control" required placeholder="E.g. London">
							<span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="form-gp">
						<label>Pick Up Date</label>
						<div class="input-group margin-bottom-sm">
							<input type="text" id="check_in" name="check_in" class="form-control" placeholder="MM/DD/YYYY">
							<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">
					<div class="form-gp">
						<label>Return Date</label>
						<div class="input-group margin-bottom-sm">
							<input type="text" id="check_out" name="check_out" class="form-control" required placeholder="MM/DD/YYYY">
							<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
						</div>
					</div>
				</div>
				<div class="col-md-1 col-sm-6 col-xs-6">
					<div class="form-gp">
						<label>Type</label>
						<select class="selectpicker">
							<option>Sedan</option>
							<option>Limo</option>
							<option>Coupe</option>
							<option>Hatch</option>
						</select>
					</div>
				</div>
				<div class="col-md-1 col-sm-6 col-xs-6">
					<div class="form-gp">
						<label>Brand</label>
						<select class="selectpicker">
							<option>BMW</option>
							<option>AUDI</option>
							<option>MERCEDES</option>
							<option>HONDA</option>
						</select>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="form-gp">
						<button type="submit" class="modify-search-button btn transition-effect">MODIFY SEARCH</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- END: MODIFY SEARCH -->

<!-- START: LISTING AREA-->
<div class="row" style="background-color: white;">
	<div class="container">
		<!-- START: FILTER AREA -->
		<div class="col-md-3 clear-padding">
			<div class="filter-head text-center">
				<h4>25 Result Found Matching Your Search.</h4>
			</div>
			<div class="filter-area">
				<div class="price-filter filter">
					<h5><i class="fa fa-usd"></i> Price</h5>
					<p>
						<label></label>
						<input type="text" id="amount" readonly>
					</p> 
					<div id="price-range"></div>
				</div>
				<div class="star-filter filter">
					<h5><i class="fa fa-dashboard"></i> Transmission</h5>
					<ul>
						<li><input type="checkbox"> Automatic</li>
						<li><input type="checkbox"> Mannual</li>
						<li><input type="checkbox"> Any</li>
					</ul>
				</div>
				<div class="location-filter filter">
					<h5><i class="fa fa-certificate"></i> Car Brand</h5>
					<ul>
						<li><input type="checkbox"> AUDI</li>
						<li><input type="checkbox"> BMW</li>
						<li><input type="checkbox"> HONDA</li>
						<li><input type="checkbox"> SUZUKI</li>
						<li><input type="checkbox"> MERCEDES</li>
						<li><input type="checkbox"> All</li>
					</ul>
				</div>
				<div class="filter">
					<h5><i class="fa fa-dashboard"></i> Engine</h5>
					<ul>
						<li><input type="checkbox"> Gas</li>
						<li><input type="checkbox"> Diesel</li>
						<li><input type="checkbox"> Electric</li>
						<li><input type="checkbox"> Patrol</li>
						<li><input type="checkbox"> Hybrid</li>
						<li><input type="checkbox"> All</li>
					</ul>
				</div>
				<div class="facilities-filter filter">
					<h5><i class="fa fa-cog"></i> Equipments</h5>
					<ul>
						<li><input type="checkbox"> Car AC</li>
						<li><input type="checkbox"> Music System</li>
						<li><input type="checkbox"> FM Radio</li>
						<li><input type="checkbox"> Satelite Navigation</li>
						<li><input type="checkbox"> Power Lock</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END: FILTER AREA -->
		
		<!-- START: INDIVIDUAL LISTING AREA -->
		<!-- START: INDIVIDUAL LISTING AREA -->
		<div class="col-md-9 hotel-listing">
			
			<!-- START: SORT AREA -->
			<div class="sort-area col-sm-10">
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Price</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Star Rating</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>User Rating</option>
						<option> Low to High</option>
						<option> High to Low</option>
					</select>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">
					<select class="selectpicker">
						<option>Name</option>
						<option> Ascending</option>
						<option> Descending</option>
					</select>
				</div>
			</div>
			<!-- END: SORT AREA -->
			<div class="clearfix visible-xs-block"></div>
			<div class="col-sm-2 view-switcher">
				<div class="pull-right">
					<a class="switchgrid" title="Grid View">
						<i class="fa fa-th-large"></i>
					</a>
					<a class="switchlist active" title="List View">
						<i class="fa fa-list"></i>
					</a>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- START: HOTEL LIST VIEW -->
			<div class="switchable col-md-12 clear-padding">
				<div  class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="/client_inc/assets/images/car10.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>BMW Sedan <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p>BMW</p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been.</p>
								</div>
								<div class="car-detail">
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-calendar"></i>2 Year</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-road"></i>2100 KM</p>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-tint"></i>Patrol</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-users"></i>5 Person</p>
									</div>
									<div class="clearfix"></div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-dashboard"></i>220 KMPH</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-cog"></i>12 MPL</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding car-item">
							<div class="rating-box">
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50/Person</h5>
								</div>
								<div class="book">
									<a href="{{route('bus.booking')}}">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div  class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="/client_inc/assets/images/car11.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>BMW Sedan <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p>BMW</p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been.</p>
								</div>
								<div class="car-detail">
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-calendar"></i>2 Year</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-road"></i>2100 KM</p>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-tint"></i>Patrol</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-users"></i>5 Person</p>
									</div>
									<div class="clearfix"></div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-dashboard"></i>220 KMPH</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-cog"></i>12 MPL</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding car-item">
							<div class="rating-box">
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50/Person</h5>
								</div>
								<div class="book">
									<a href="{{route('bus.booking')}}">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>		
				<div class="clearfix visible-sm-block"></div>
				<div  class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="/client_inc/assets/images/car12.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>BMW Sedan <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p>BMW</p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been.</p>
								</div>
								<div class="car-detail">
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-calendar"></i>2 Year</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-road"></i>2100 KM</p>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-tint"></i>Patrol</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-users"></i>5 Person</p>
									</div>
									<div class="clearfix"></div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-dashboard"></i>220 KMPH</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-cog"></i>12 MPL</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding car-item">
							<div class="rating-box">
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50/Person</h5>
								</div>
								<div class="book">
									<a href="{{route('bus.booking')}}">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix visible-md-block"></div>
				<div  class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="/client_inc/assets/images/car13.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>BMW Sedan <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p>BMW</p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been.</p>
								</div>
								<div class="car-detail">
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-calendar"></i>2 Year</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-road"></i>2100 KM</p>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-tint"></i>Patrol</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-users"></i>5 Person</p>
									</div>
									<div class="clearfix"></div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-dashboard"></i>220 KMPH</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-cog"></i>12 MPL</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding car-item">
							<div class="rating-box">
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50/Person</h5>
								</div>
								<div class="book">
									<a href="{{route('bus.booking')}}">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix visible-sm-block"></div>
				<div  class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="/client_inc/assets/images/car10.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>BMW Sedan <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p>BMW</p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been.</p>
								</div>
								<div class="car-detail">
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-calendar"></i>2 Year</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-road"></i>2100 KM</p>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-tint"></i>Patrol</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-users"></i>5 Person</p>
									</div>
									<div class="clearfix"></div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-dashboard"></i>220 KMPH</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-cog"></i>12 MPL</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding car-item">
							<div class="rating-box">
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50/Person</h5>
								</div>
								<div class="book">
									<a href="{{route('bus.booking')}}">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div  class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
							<img src="/client_inc/assets/images/car11.jpg" alt="cruise">
						</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5>BMW Sedan <span><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star-o colored"></i></span></h5>
									<p>BMW</p>
								</div>
								<div class="hotel-desc">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been.</p>
								</div>
								<div class="car-detail">
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-calendar"></i>2 Year</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-road"></i>2100 KM</p>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-tint"></i>Patrol</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-users"></i>5 Person</p>
									</div>
									<div class="clearfix"></div>
									<div class="clearfix"></div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-dashboard"></i>220 KMPH</p>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
										<p><i class="fa fa-cog"></i>12 MPL</p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding car-item">
							<div class="rating-box">
								<div class="user-rating">
									<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
									<span>128 Guest Reviews.</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
									<h5>$50/Person</h5>
								</div>
								<div class="book">
									<a href="{{route('bus.booking')}}">BOOK</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END: HOTEL LIST VIEW -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<!-- START: PAGINATION -->
			<div class="bottom-pagination">
				<nav class="pull-right">
					<ul class="pagination pagination-lg">
						<li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
						<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">2 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">3 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">4 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">5 <span class="sr-only">(current)</span></a></li>
						<li><a href="#">6 <span class="sr-only">(current)</span></a></li>
						<li><a href="#" aria-label="Previous"><span aria-hidden="true">&#187;</span></a></li>
					</ul>
				</nav>
			</div>
			<!-- END: PAGINATION -->
		</div>
		<!-- END: INDIVIDUAL LISTING AREA -->
	</div>
</div>
<!-- END: LISTING AREA -->

@endsection