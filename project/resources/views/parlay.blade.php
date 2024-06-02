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
            <div class="final-result__amount">+ 100</div>
        </div>
        <div class="final-result__payout ppayout">
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

@push('js')




    
@endpush
