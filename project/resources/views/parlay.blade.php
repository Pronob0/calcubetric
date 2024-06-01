<div class="d-flex row">
    <div class="form-group col-md-6 ">
        <label for="stake">Bet Amount</label>
        <div>
            <input type="text" class="" id="stake">
        </div>
    </div>
    <div class="form-group col-md-6 ">
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
    <div class="form-group col-md-6 ">
        <label for="stake">Bet 1</label>
        <div>
            <input type="text" class="" id="stake">
        </div>
    </div>
    <div class="form-group">
        
    </div>
</div>

<div class="d-flex mt-4">
    <div class="form-group">
        <label for="stake">Bet 2</label>
        <div>
            <input type="text" class="" id="stake">
        </div>
    </div>
    <div class="form-group">
        
    </div>
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6 ">
        <label for="stake">Bet 3</label>
        <div>
            <input type="text" class="" id="stake">
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
        <div class="final-result__to-win">
            <div>Parlay Odds</div>
            <div class="final-result__amount">+ 100</div>
        </div>
        <div class="final-result__payout">
            <div>To Win</div>
            <div class="final-result__amount">$ 0.00</div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {{-- reset button here --}}
        <button class="reset">RESET</button>
    </div>
</div>
