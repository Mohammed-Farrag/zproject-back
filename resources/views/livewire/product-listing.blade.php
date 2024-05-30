<div>
    <!-- Category List -->
    <ul class="itemsproducts">
        @foreach ($categories as $category)
        <li class="catitem {{ $activeCategory === $category->id ? 'itactive' : '' }}" wire:click="changeCategory({{ $category->id }})">
            {{ $category->title }}
        </li>
        @endforeach

    </ul>




    <!-- loading  -->

    <div wire:loading wire:target="changeCategory" style="width: 100%; margin: auto">
        <!-- This will be shown while the changeCategory method is running -->
        <div
        style="width: 30%; margin:auto"
        className=" flex items-center w-full justify-center min-h-max w-full"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          className="grow"
          viewBox="0 0 24 24"
          width={100}
          height={100}
        >
          <g>
            <circle
              cx="12"
              cy="2.5"
              r="1.5"
              fill="white"
              opacity=".14"
            ></circle>
            <circle
              cx="16.75"
              cy="3.77"
              r="1.5"
              fill="white"
              opacity=".29"
            ></circle>
            <circle
              cx="20.23"
              cy="7.25"
              r="1.5"
              fill="white"
              opacity=".43"
            ></circle>
            <circle
              cx="21.5"
              cy="12"
              r="1.5"
              fill="white"
              opacity=".57"
            ></circle>
            <circle
              cx="20.23"
              cy="16.75"
              r="1.5"
              fill="white"
              opacity=".71"
            ></circle>
            <circle
              cx="16.75"
              cy="20.23"
              r="1.5"
              fill="white"
              opacity=".86"
            ></circle>
            <circle cx="12" cy="21.5" r="1.5" fill="white"></circle>
            <animateTransform
              attributeName="transform"
              calcMode="discrete"
              dur="0.75s"
              repeatCount="indefinite"
              type="rotate"
              values="0 12 12;30 12 12;60 12 12;90 12 12;120 12 12;150 12 12;180 12 12;210 12 12;240 12 12;270 12 12;300 12 12;330 12 12;360 12 12"
            ></animateTransform>
          </g>
        </svg>
      </div>
    </div>


    <!-- Products List -->
    <div class="upmainproducts" wire:loading.remove wire:target="changeCategory">
        <div class="row">
            @foreach ($products as $product)
            <a href="{{ route('home.product', $product->id) }}" class="col-lg-4 col-md-4 col-sm-6 col-12" >
                <div class="mainproduct">
                    <div class="upimage">
                        <img src="{{ asset($product->image) }}" alt="image">
                        <span><i class="fa-regular fa-file-image"></i></span>
                    </div>
                    <div class="productdetails">
                        <h5>{{ $product->title }}</h5>
                        <span class="prodprice">{{ $product->price }}$</span>
                        <span class="carticon"><i class="fa-solid fa-cart-plus"></i></span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>