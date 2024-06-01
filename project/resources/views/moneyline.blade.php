
<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="stake">Spread value</label>
        <div>
            <input type="text" class="" id="stake">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label class="sel-label" for="stake">League</label>
        <div>
            <select name="bet_type" id="bet_type" class="">
                <option value="1">NFL</option>
                <option value="2">NCAAF</option>
                <option value="3">NBA</option>
            </select>
        </div>
    </div>
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="stake">Favorite Spread Odds</label>
        <div>
            <input type="text" class="" id="stake" value="-110">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="stake">Underdog Spread Odds</label>
        <div>
            <input type="text" class="" id="stake" value="-110">
        </div>
    </div>
    
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="stake">Estimated Favorite Moneyline</label>
        <div class="mt-3 text-center">
            <label for="stake">-110</label>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="stake">Estimated Favorite Moneyline</label>
        <div class="mt-3 text-center text-light">
            <label for="stake">-110</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        {{-- reset button here --}}
        <button class="reset">RESET</button>
    </div>
</div>
