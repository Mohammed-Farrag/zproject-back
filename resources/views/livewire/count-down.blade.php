<div class="upimage">
    <img  src="{{ $image }}" id="countdown" alt="image">
    <div class="newstimer">
        <div class="row" >
            <div class="col">
                <span class="timer-count" id="days"></span>
                <span class="timer-text">DAYS</span>
            </div>
            <div class="col">
                <span class="timer-count" id="hours">04</span>
                <span class="timer-text">HOURS</span>
            </div>
            <div class="col">
                <span class="timer-count" id="minutes">02</span>
                <span class="timer-text">MINUTES</span>
            </div>
            <div class="col">
                <span class="timer-count" id="seconds">01</span>
                <span class="timer-text">SECONDS</span>
            </div>
        </div>
    </div>
</div>

@push('styles')

<style>
    .photnewsproducts .newsproduct .upimage img.show {
        filter: none;
    }
</style>
@endpush



@script
<script>
    $wire.on('date', (date) => {


        $(document).ready(function() {
            // Set the date we're counting down to
            var countDownDate = new Date(date[0].date).getTime();

            // Update the count down every 1 second
            var countdownfunction = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="countdown"
                $("#days").text(days);
                $("#hours").text(hours);
                $("#minutes").text(minutes);
                $("#seconds").text(seconds);

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(countdownfunction);
                    $("#countdown").addClass('show');
                    $('.newstimer').hide();
                }
            }, 1000);
        });

    })
</script>
@endscript