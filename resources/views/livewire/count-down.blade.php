<div>
    <div class="row">
        <div class="col">
            <span class="timer-count">{{ date("d", strtotime($date)) }}</span>
            <span class="timer-text">DAYS</span>
        </div>
        <div class="col">
            <span class="timer-count">04</span>
            <span class="timer-text">HOURS</span>
        </div>
        <div class="col">
            <span class="timer-count">02</span>
            <span class="timer-text">MINUTES</span>
        </div>
        <div class="col">
            <span class="timer-count">01</span>
            <span class="timer-text">SECONDS</span>
        </div>
    </div>
</div>



@script
<script>
    $(document).ready(function() {
        var targetDate = new Date();

        function updateCountdown() {
            var now = new Date();
            var distance = targetDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('countdown').innerHTML = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's ';

            if (distance < 0) {
                clearInterval(timer);
                document.getElementById('countdown').innerHTML = "EXPIRED";
            }
        }

        updateCountdown(); // Initial call to display countdown immediately

        var timer = setInterval(updateCountdown, 1000); // Update countdown every second
    });
</script>

@endscript