<div class="d-flex row">
    <div class="form-group col-md-6">
        <label for="stake">Bet Amount</label>
        <div>
            <input type="text" class="" id="stake">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label class="sel-label" for="stake">Bet Type</label>
        <div>
            <select name="bet_type" id="bet_type" class="">
                <option value="1">SINGLE BET</option>
                <option value="2">PARLAY</option>
            </select>
        </div>
    </div>
</div>
<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="stake">American Odds</label>
        <div>
            <input type="text" class="" id="stake">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="stake">Decimal Odds</label>
        <div>
            <input type="text" class="" id="stake">
        </div>
    </div>
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="stake">Fractional Odds</label>
        <div>
            <input type="text" class="" id="stake">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="stake">Implied Odds</label>
        <div>
            <input type="text" class="" id="stake">
        </div>
    </div>
</div>

<div class="mt-4 row">
    <div class="final-result col-md-12">
        <div class="final-result__to-win">
            <div>To Win</div>
            <div class="final-result__amount">$ -</div>
        </div>
        <div class="final-result__payout">
            <div>Payout</div>
            <div class="final-result__amount">$ -</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {{-- reset button here --}}
        <button class="reset">RESET</button>
    </div>
</div>
