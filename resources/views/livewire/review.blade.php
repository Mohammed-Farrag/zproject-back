



<div class="col-md">

    <div wire:loading wire:target="save" style="color: #fff">
        Adding Review...
    </div>
    <form wire:submit="save" wire:loading.remove wire:target="save">
        @csrf
        <!-- <div>
            <input type="text" wire:model="name" placeholder="Your Name">
        </div>
        <div>
            <input type="email" wire:model="email" placeholder="Your Email">
        </div> -->
        <div>
            <textarea wire:model="comment" placeholder="Your Comment" rows="6"></textarea>
        </div>


        <div wire:loading wire:target="selectRate" style="color: #fff">
            Selecting Rate...
        </div>
        <div class="ratestars" wire:loading.remove wire:target="selectRate">
            <span>YOUR RATE:</span>
            <label for="rate1" wire:click="selectRate('1')">
                <i class="{{ $rate > 0 ? 'fa-solid'  : 'fa-regular' }} fa-star "></i>
                <input type="radio" class="d-none" name="rate" value="1" wire:model="rate" id="rate1">
            </label>

            <label for="rate2" wire:click="selectRate('2')">
                <i class="{{ $rate > 1 ? 'fa-solid'  : 'fa-regular' }} fa-star"></i>
                <input type="radio" class="d-none" name="rate" value="2" wire:model="rate" id="rate2">
            </label>

            <label for="rate3" wire:click="selectRate('3')">
                <i class="{{ $rate > 2 ? 'fa-solid'  : 'fa-regular' }} fa-star"></i>
                <input type="radio" class="d-none" name="rate" value="3" wire:model="rate" id="rate3">
            </label>

            <label for="rate4" wire:click="selectRate('4')">
                <i class="{{ $rate > 3 ? 'fa-solid'  : 'fa-regular' }} fa-star"></i>
                <input type="radio" class="d-none" name="rate" value="4" wire:model="rate" id="rate4">
            </label>

            <label for="rate5" wire:click="selectRate('5')">
                <i class="{{ $rate > 4 ? 'fa-solid'  : 'fa-regular' }} fa-star"></i>
                <input type="radio" class="d-none" name="rate" value="5" wire:model="rate" id="rate5">
            </label>


        </div>
        <div>
            <input type="submit" name="SEND" value="SEND">
        </div>
    </form>
</div>

@script
<script>
    $wire.on('ReviewAdded', () => {
        $.toast({
            text: "Your Review Added Successfully",
            loader: false
        })

    });
    $wire.on('NoAuthAlert', () => {
        $.toast({
            text: "You must login first to add review",
            bgColor: "#f00",
            textColor: "#fff",
            loader: false
        })

    });
</script>
@endscript