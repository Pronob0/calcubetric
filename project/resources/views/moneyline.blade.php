
<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="spread">Spread value</label>
        <div>
            <input type="text" class="" id="spreadOdds">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label class="sel-label" for="stake">League</label>
        <div>
            <select name="league_type" id="leagueType" class="">
                <option value="NFL">NFL</option>
                <option value="NCAAF">NCAAF</option>
                <option value="NBA">NBA</option>
            </select>
        </div>
    </div>
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="favourite_odds">Favorite Spread Odds</label>
        <div>
            <input type="text" class="" id="favoriteOdds" value="-110">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="undergo_odds">Underdog Spread Odds</label>
        <div>
            <input type="text" class="" id="underdogOdds" value="-110">
        </div>
    </div>
    
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="fvrt_moneyline">Estimated Favorite Moneyline</label>
        <div class="mt-3 text-center">
            <label id="favoriteMoneyline">-110</label>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="undergo_moneyline">Estimated Underdog Moneyline</label>
        <div class="mt-3 text-center text-light">
            <label id="underdogMoneyline">-110</label>
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
    $('#spreadOdds').on('keyup', function(){
        
        var spreadOdds = parseFloat($('#spreadOdds').val());
                var leagueType = $('#leagueType').val();
                var favoriteOdds = parseFloat($('#favoriteOdds').val());
                var underdogOdds = parseFloat($('#underdogOdds').val());

                var favoriteMoneyline, underdogMoneyline;

                // Calculate moneyline based on league type
                if (leagueType === 'NFL' || leagueType === 'NCAAF') {
                    // Example conversion for NFL/NCAAF
                    favoriteMoneyline = (favoriteOdds / spreadOdds) * 100;
                    underdogMoneyline = (underdogOdds / spreadOdds) * 100;
                } else if (leagueType === 'NBA') {
                    // Example conversion for NBA
                    favoriteMoneyline = (favoriteOdds / spreadOdds) * 110;
                    underdogMoneyline = (underdogOdds / spreadOdds) * 110;
                }

                // Update the results
                $('#favoriteMoneyline').text(favoriteMoneyline.toFixed(2));
                $('#underdogMoneyline').text(underdogMoneyline.toFixed(2));
            
        
    });

    $('#favoriteOdds').on('keyup', function(){
        var favoriteOdds = parseFloat($('#favoriteOdds').val());
        var spreadOdds = parseFloat($('#spreadOdds').val());
        var leagueType = $('#leagueType').val();
        var underdogOdds = parseFloat($('#underdogOdds').val());

        var favoriteMoneyline, underdogMoneyline;

        // Calculate moneyline based on league type
        if (leagueType === 'NFL' || leagueType === 'NCAAF') {
            // Example conversion for NFL/NCAAF
            favoriteMoneyline = (favoriteOdds / spreadOdds) * 100;
            underdogMoneyline = (underdogOdds / spreadOdds) * 100;
        } else if (leagueType === 'NBA') {
            // Example conversion for NBA
            favoriteMoneyline = (favoriteOdds / spreadOdds) * 110;
            underdogMoneyline = (underdogOdds / spreadOdds) * 110;
        }

        // Update the results
        $('#favoriteMoneyline').text(favoriteMoneyline.toFixed(2));
        $('#underdogMoneyline').text(underdogMoneyline.toFixed(2));
    });

    $('#underdogOdds').on('keyup', function(){
        var underdogOdds = parseFloat($('#underdogOdds').val());
        var spreadOdds = parseFloat($('#spreadOdds').val());
        var leagueType = $('#leagueType').val();
        var favoriteOdds = parseFloat($('#favoriteOdds').val());

        var favoriteMoneyline, underdogMoneyline;

        // Calculate moneyline based on league type
        if (leagueType === 'NFL' || leagueType === 'NCAAF') {
            // Example conversion for NFL/NCAAF
            favoriteMoneyline = (favoriteOdds / spreadOdds) * 100;
            underdogMoneyline = (underdogOdds / spreadOdds) * 100;
        } else if (leagueType === 'NBA') {
            // Example conversion for NBA
            favoriteMoneyline = (favoriteOdds / spreadOdds) * 110;
            underdogMoneyline = (underdogOdds / spreadOdds) * 110;
        }

        // Update the results
        $('#favoriteMoneyline').text(favoriteMoneyline.toFixed(2));
        $('#underdogMoneyline').text(underdogMoneyline.toFixed(2));
    });

   


    

    $('#leagueType').on('change', function(){
        $('#spreadOdds').val('');
        $('#favoriteOdds').val('');
        $('#underdogOdds').val('');
        $('#favoriteMoneyline').text('-110');
        $('#underdogMoneyline').text('-110');

    })

    $('.reset').on('click', function(){
        $('#spreadOdds').val('');
        $('#favoriteOdds').val('');
        $('#underdogOdds').val('');
        $('#favoriteMoneyline').text('-110');
        $('#underdogMoneyline').text('-110');
    });



</script>

@endpush
