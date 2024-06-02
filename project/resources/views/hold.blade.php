
<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="stake">Side 1 Odds</label>
        <div>
            <input type="text" class="" id="side1">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="side2">Side 2 Odds</label>
        <div>
            <input type="text" class="" id="side2">
        </div>
    </div>
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="stake">Hold</label>
        <div class="mt-3 text-center">
            <label for="hold" id="hhold">200.00 %</label>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label class="sel-label" for="stake">Bet Type</label>
        <div>
            <select name="bet_type" id="bet_type" class="">
                <option value="1">AMERICAN</option>
                <option value="2">DECIMAL</option>
                <option value="3">FRACTIONAL</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {{-- reset button here --}}
        <button class="reset">RESET</button>
    </div>
</div>
