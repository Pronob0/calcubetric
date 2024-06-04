<div class="d-flex row">
    <div class="form-group col-md-6">
        <label for="betamount">Bet Amount</label>
        <div>
            <input type="text" class="" value="10" id="obetamount">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label class="sel-label" for="bet_type">Bet Type</label>
        <div>
            <select name="bet_type" id="obet_type" class="">
                <option value="1">SINGLE BET</option>
                <option value="2">PARLAY</option>
            </select>
        </div>
    </div>
</div>
<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="american_odds">American Odds</label>
        <div>
            <input type="text" class="" id="oamerican_odds">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="decimal_odds">Decimal Odds</label>
        <div>
            <input type="text" class="" id="odecimal_odds">
        </div>
    </div>
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="fractional_odds">Fractional Odds</label>
        <div>
            <input type="text" class="" id="ofractional_odds">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="implied_odds">Implied Odds</label>
        <div>
            <input type="text" class="" id="oimplied_odds">
        </div>
    </div>
</div>

<div class="mt-4 row">
    <div class="final-result col-md-12">
        <div class="final-result__to-win">
            <div>To Win</div>
            <div class="final-result__amount" id="owin">$ -</div>
        </div>
        <div class="final-result__payout">
            <div>Payout</div>
            <div class="final-result__amount" id="opayout">$ -</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {{-- reset button here --}}
        <button class="reset">RESET</button>
    </div>
</div>


@push('js')
<script>
    $(document).ready(function() {

        // convert and calculate win and payout amount
        $('#oamerican_odds').on('keyup', function() {
            var american_odds = ($(this).val());
            var betamount = $('#obetamount').val();
            var bet_type = $('#obet_type').val();
            var decimal_odds = $('#odecimal_odds').val();
            var fractional_odds = $('#ofractional_odds').val();
            var implied_odds = $('#oimplied_odds').val();
            var win = 0;
            var payout = 0;

            if (american_odds) {
                var decimal_odds = 0;
                var implied_odds = 0;
                var fractional_odds = 0;
                if (american_odds > 0) {
                    decimal_odds = (american_odds / 100) + 1;
                    implied_odds = 100 / (parseInt(american_odds) + 100);
                    fractional_odds = american_odds > 0 ? (american_odds / 100) + '/1' : '-';
                    win = betamount * (american_odds / 100);
                    payout = parseInt(win) + parseInt(betamount);


                } else {
                    american_odds = Math.abs(american_odds);
                    decimal_odds = (100 / american_odds) + 1;
                    implied_odds = american_odds / (american_odds + 100);
                    fractional_odds = '1/' + (american_odds / 100);
                    win = betamount * (100 / american_odds);
                    payout = parseInt(win) + parseInt(betamount);

                }

                implied = implied_odds * 100;

                $('#odecimal_odds').val(decimal_odds.toFixed(2));
                $('#oimplied_odds').val(implied.toFixed(2));
                $('#ofractional_odds').val(fractional_odds);
                $('.final-result__to-win .final-result__amount').text('$ ' + win.toFixed(2));
                $('.final-result__payout .final-result__amount').text('$ ' + payout.toFixed(2));

            }
        });

        $('#obetamount').on('keyup', function() {
            var american_odds = $('#oamerican_odds').val();
            var betamount = $(this).val();
            var win = 0;
            var payout = 0;
            if (american_odds) {
                if (american_odds > 0) {
                    win = betamount * (american_odds / 100);
                    payout = parseInt(win) + parseInt(betamount);
                } else {
                    american_odds = Math.abs(american_odds);
                    win = betamount * (100 / american_odds);
                    payout = parseInt(win) + parseInt(betamount);
                }
                $('.final-result__to-win .final-result__amount').text('$ ' + win.toFixed(2));
                $('.final-result__payout .final-result__amount').text('$ ' + payout.toFixed(2));
            }
        });


        // reset all fields
        $('.reset').on('click', function() {
            $('#obetamount').val(10);
            $('#oamerican_odds').val('');
            $('#odecimal_odds').val('');
            $('#ofractional_odds').val('');
            $('#oimplied_odds').val('');
            $('.final-result__to-win .final-result__amount').text('$ -');
            $('.final-result__payout .final-result__amount').text('$ -');
        });

    });

</script>



@endpush
