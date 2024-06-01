<section class="photproductpart">
    <div class="container">
        <div class="row">
            <div class="col-md col-sm-12 col-12">
                <div class="product-image">
                    <img src="{{ $product->image }}" alt="image">
                </div>
            </div>
            <div class="col-md col-sm-12 col-12">
                <div class="product-details">
                    <h4>{{ $product->title }}<span><i class="fa-solid fa-arrow-up-from-bracket"></i></span></h4>
                    <div class="prdpricing">
                        <span>{{ $product->price }}$</span>
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="prdsize">
                        <h6>Paper Size</h6>
                        <div wire:loading.remove wire:target="selectSize">
                            <span class="{{ $selectedSize == 'A0'  ? 'active' : '' }}" wire:click="selectSize('A0')">A0</span>
                            <span class="{{ $selectedSize == 'A1'  ? 'active' : '' }}" wire:click="selectSize('A1')">A1</span>
                            <span class="{{ $selectedSize == 'A2'  ? 'active' : '' }}" wire:click="selectSize('A2')">A2</span>
                        </div>
                        <div wire:loading wire:target="selectSize">
                            Adjusting Size...
                        </div>
                    </div>
                    <div class="prdcount">
                        <h6>Quantity</h6>
                        <div wire:loading.remove wire:target="dec,inc">
                            <span wire:click="dec()">-</span>
                            <span>{{ $selectedQuantity  }}</span>
                            <span wire:click="inc()">+</span>
                        </div>
                        <span wire:loading wire:target="dec,inc">
                            Adjusting Quantity...
                        </span>
                    </div>


                    <div class="prdaddcard" wire:loading.remove wire:target="addToCart">
                        <button type="button" wire:click="addToCart">ADD TO CART</button>
                    </div>
                    <span wire:loading wire:target="addToCart">
                        Add Product To Cart...
                    </span>
                </div>
            </div>
        </div>
    </div>



</section>

@script
<script>
    $wire.on('productAddedToCart', (data) => {
        const product = data[0].product;
        const user = data[0].user_data;

        let cart = JSON.parse(localStorage.getItem('cart'))
        cart = {
            ...cart,
            [product.id]: product
        }

        
        localStorage.setItem('userData', JSON.stringify(user));
        localStorage.setItem('cart', JSON.stringify(cart));
        $.toast({
            text: "Your product has been added to the cart",
            bgColor : "#fff",
            textColor : "#000",
            loader: false
        })

    });



    $wire.on('NoAuthAlert', () => {
        $.toast({
            text: "You must login first to add to cart",
            bgColor : "#f00",
            textColor : "#fff",
            loader: false
        })

    });
</script>
@endscript