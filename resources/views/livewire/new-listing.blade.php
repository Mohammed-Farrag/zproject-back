<div class="container">
    <ul class="itemsproducts">
        @foreach ($categories as $category)
        <li class="catitem {{ $activeCategory === $category->id ? 'itactive' : '' }}" wire:click="changeCategory({{ $category->id }})">
            {{ $category->title }}
        </li>
        @endforeach
    </ul>

    <!-- loading  -->
    <div wire:loading wire:target="changeCategory" style="width: 100%; margin: auto">
        <div style="width: 30%; margin:auto" className=" flex items-center w-full justify-center min-h-max w-full">
            <svg xmlns="http://www.w3.org/2000/svg" className="grow" viewBox="0 0 24 24" width={100} height={100}>
                <g>
                    <circle cx="12" cy="2.5" r="1.5" fill="white" opacity=".14"></circle>
                    <circle cx="16.75" cy="3.77" r="1.5" fill="white" opacity=".29"></circle>
                    <circle cx="20.23" cy="7.25" r="1.5" fill="white" opacity=".43"></circle>
                    <circle cx="21.5" cy="12" r="1.5" fill="white" opacity=".57"></circle>
                    <circle cx="20.23" cy="16.75" r="1.5" fill="white" opacity=".71"></circle>
                    <circle cx="16.75" cy="20.23" r="1.5" fill="white" opacity=".86"></circle>
                    <circle cx="12" cy="21.5" r="1.5" fill="white"></circle>
                    <animateTransform attributeName="transform" calcMode="discrete" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;30 12 12;60 12 12;90 12 12;120 12 12;150 12 12;180 12 12;210 12 12;240 12 12;270 12 12;300 12 12;330 12 12;360 12 12"></animateTransform>
                </g>
            </svg>
        </div>

    </div>


    <div class="upnewsproducts">
        <div class="row">
            <!-- start product -->
            @foreach ($news as $new)
            <div class="col-lg-4 col-md-4 col-sm-6 col-12" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="200">
                <div class="newsproduct">
                    @livewire('count-down', ['date' => $new->soon, 'image' => $new->image])
                    <div class="productdetails">
                        <h5>{{ $new->slug }}</h5>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>