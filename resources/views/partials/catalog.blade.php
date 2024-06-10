<!-- Container -->
<div class="row" id="movie-list" >
    @foreach($products as $product)
        <div class="col-md-3">
            <div class="card">
            <img src="{{$product->img_url}}" class="card-img-top img-fluid" alt="{{$product->name}}" style="height: 100%; width: 100%; object-fit: cover;">
                <!-- <img src="no_image.webp" class="card-img-top" alt="Title" style="max-height:360px; min-height:360px"> -->
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <!-- <h5 class="card-title">name</h5> -->
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$product->year}}</h6>
                    <!-- <h6 class="card-subtitle mb-2 text-body-secondary">year</h6> -->
                    <a href="/desc" class="card-link see-detail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="">See Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- End Container -->
