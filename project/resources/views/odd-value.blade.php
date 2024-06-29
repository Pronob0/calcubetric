<div class="mt-4 row">
    <div class="form-group col-md-12">
        <label for="wager">Wager</label>
        <div>
            <input type="text" class="w-100" id="wager">
        </div>
    </div>
</div>

<div class="mt-4 row">
    <div class="form-group col-md-12">
        <label for="americanOdds">American Odds</label>
        <div>
            <input type="text" class="w-100" id="americanOdds">
        </div>
    </div>
</div>

<div class="mt-4 row">
    <div class="form-group col-md-12">
        <label for="winProbability">Win Probability</label>
        <div>
            <input type="text" class="w-100" id="winProbability">
        </div>
    </div>
</div>

<div class="mt-4 row">
    <div class="final-result col-md-12">
        <div class="final-result__to-win">
            <div>Expected Value</div>
            <div class="final-result__amount" id="expectedValue">$ -</div>
        </div>
        <div class="final-result__payout">
            <div>Payout</div>
            <div class="final-result__amount" id="payout">$ -</div>
        </div>
    </div>
</div>

<div class="alert alert-danger d-none mt-3" id="halert">
    <strong>Provide Valid Odds</strong> <span id="hmsg"></span>
</div>

<div class="row">
    <div class="col-md-6">
        <button class="reset">RESET</button>
    </div>
</div>

@push('js')
<script>
$(document).ready(function() {
    $('#winProbability').on('keyup', function() {
        // Get input values
        var wager = parseFloat($('#wager').val());
        var americanOdds = parseFloat($('#americanOdds').val());
        var winProbability = parseFloat($('#winProbability').val()) / 100;

        // Validate inputs
        if (isNaN(wager) || isNaN(americanOdds) || isNaN(winProbability) || winProbability < 0 || winProbability > 1) {
            $('#halert').removeClass('d-none');
            $('#hmsg').text("Please enter valid numbers for all fields.");
            return;
        } else {
            $('#halert').addClass('d-none');
        }

        // Calculate payout
        var payout = 0;
        if (americanOdds > 0) {
            payout = wager * (americanOdds / 100 + 1);
        } else {
            payout = wager * (100 / Math.abs(americanOdds) + 1);
        }

        // Calculate expected value
        var expectedValue = wager * (americanOdds / 100) * winProbability - wager * (1 - winProbability);

        // Update the results
        $('#expectedValue').text('$' + expectedValue.toFixed(2));
        $('#payout').text('$' + payout.toFixed(2));
    });

    $('.reset').click(function() {
        // Clear input fields and results
        $('#wager').val('');
        $('#americanOdds').val('');
        $('#winProbability').val('');
        $('#expectedValue').text('$ -');
        $('#payout').text('$ -');
        $('#halert').addClass('d-none');
    });
});
</script>
    
@endpush
