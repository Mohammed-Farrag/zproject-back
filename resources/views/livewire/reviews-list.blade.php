<div style="background-color: #0d0d0d; overflow:hidden">


    @foreach ($reviews as $rev )
    <div class="container">

        <div x-data="{open:false}" style="margin-bottom: 20px" > 
            <div class="flex justify-between items-center bg-red-200 d-flex w-100 justify-content-between">
                <p class="text-white" style="margin-bottom: 10px;">{{   $rev->user->name }}  ({{ $rev->rating}}   <i class="fa-solid fa-star"></i> )</p>
                <button  @click="open=!open" x-html="open ? '-' :'+' "  
                style="background-color: transparent; color: #BDE5FA; border: 1px solid  #BDE5FA; border-radius:5px; height: 22px; display:flex; align-items: center" 
                class="btn  px-2 hover:text-gray-500 font-bold text-3xl "></button>
            </div>
            <div x-show="open" x-cloak class=" px-4 py-4  text-white  " style="border: 1px solid #343334 ;border-radius: 7px;"  x-transition>{{ $rev->comment }}</div>
        </div>
    </div>

    @endforeach
    
</div>


