<div class="upformcontact" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
   


    <div wire:loading wire:target="send" style="color: #fff">
        Sending Mail...
    </div>
    <form wire:submit="send" wire:loading.remove wire:target="send">
        @csrf

        <div class="row">
            <div class="col-sm col-12"><input type="text" name="" wire:model="name" placeholder="Your Name"></div>
        </div>
        <div class="row">
            <div class="col-12"><input type="email" name="email" wire:model="email" placeholder="Email Address"></div>
        </div>
        <div class="row">
            <div class="col-12"><input type="text" name="title" wire:model="title" placeholder="Subject"></div>
        </div>
        <div class="row">
            <div class="col-12"><textarea name="body" wire:model="body" placeholder="Message" rows="6"></textarea></div>
        </div>
        <div class="row">
            <div class="col-12"><input type="submit" name="SEND" value="SEND"></div>
        </div>
    </form>
</div>

@script
<script>
    $wire.on('MailSended', () => {
        $.toast({
            text: "Your Mail is sended Successfully",
            loader: false
        })

    });
    $wire.on('NoAuthAlert', () => {
        $.toast({
            text: "You must login first to contact",
            bgColor: "#f00",
            textColor: "#fff",
            loader: false
        })

    });
</script>
@endscript