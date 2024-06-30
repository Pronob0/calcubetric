<div class="d-flex row">
    <div class="form-group col-md-6 ">
        <label for="pbet_amount">Bet Amount</label>
        <div>
            <input type="text" class="" id="pbet_amount">
        </div>
    </div>
    <div class="form-group col-md-6 ">
        <label class="sel-label" for="pbet_type">Bet Type</label>
        <div>
            <select name="pbet_type" id="pbet_type" class="">
                <option value="1">SINGLE BET</option>
                <option value="2">PARLAY</option>
            </select>
        </div>
    </div>
</div>
<div class="d-flex mt-4 row">
    <div class="form-group col-md-6 ">
        <label for="bet1">Bet 1</label>
        <div>
            <input type="text" class="bet" id="bet1">
        </div>
    </div>
    <div class="form-group">
        
    </div>
</div>

<div class="d-flex mt-4">
    <div class="form-group">
        <label for="bet2">Bet 2</label>
        <div>
            <input type="text" class="bet" id="bet2">
        </div>
    </div>
    <div class="form-group">
        
    </div>
</div>

<div class="dve" id="div">

</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6 ">
        <label for="bet3">Bet 3</label>
        <div>
            <input type="text" class="" id="bet3">
        </div>
    </div>
    <div class="form-group col-md-6 ">
        {{-- add icon  --}}
        <div class="d-flex">
            <div class="add-btn text-center">
                <h6 class="par-add">Add Bet</h6>
            </div>
        </div>
    </div>
</div>


<div class="mt-4 row">
    <div class="final-result col-md-12">
        <div class="final-result__to-win ptowin">
            <div>Parlay Odds</div>
            <div class="final-result__amount" id="poddresult">+ 100</div>
        </div>
        <div class="final-result__payout ppayout">
            <div>To Win</div>
            <div class="final-result__amount" id="winresult">$ 0.00</div>
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
        function calculateParlay() {
            let betAmount = parseFloat($('#pbet_amount').val());
            let odds = [];
            $('.bet').each(function() {
                let betVal = parseFloat($(this).val());
                if (!isNaN(betVal)) {
                    odds.push(betVal);
                }
            });
            if (odds.length === 0 || isNaN(betAmount)) {
                $('#poddresult').text('+ 100');
                $('#winresult').text('$ 0.00');
                return;
            }
            let parlayOdds = odds.reduce((acc, odd) => acc * (odd > 0 ? (odd / 100 + 1) : (100 / Math.abs(odd) + 1)), 1) - 1;
            parlayOdds = Math.round(parlayOdds * 100);
            let toWin = betAmount * (parlayOdds / 100);
            $('#poddresult').text(parlayOdds > 0 ? `+ ${parlayOdds}` : parlayOdds);
            $('#winresult').text(`$ ${toWin.toFixed(2)}`);
        }

        $('.bet, #pbet_amount').on('keyup', calculateParlay);

        $('.reset').on('click', function() {
            $('#pbet_amount').val('');
            $('.bet').val('');
            $('#poddresult').text('+ 100');
            $('#winresult').text('$ 0.00');
        });

        $('.add-btn').on('click', function() {
            let newBet = `<div class="d-flex mt-4">
                            <div class="form-group col-md-6">
                                <label for="bet${$('.bet').length + 1}">Bet ${$('.bet').length + 1}</label>
                                <div>
                                    <input type="text" class="form-control bet" id="bet${$('.bet').length + 1}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <!-- Empty div for layout purposes -->
                            </div>
                          </div>`;
            $('#div').append(newBet);
        });
    });
</script>


    
@endpush
