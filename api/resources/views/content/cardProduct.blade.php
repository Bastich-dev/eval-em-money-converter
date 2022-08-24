<div class="col-4">
    <a href='/products/{{ $product->slug }}' class="card scale-anim">
        <img src={{ $product->image_path }} height="300" alt="...">
        <div class="card-body">
            <h2 class="h5">{{ $product->name }}</h2>
            <p>{{ $product->description }} </p>
        </div>
    </a>
</div>
