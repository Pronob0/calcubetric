
<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="spread">Spread value</label>
        <div>
            <input type="text" class="" id="spread">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label class="sel-label" for="stake">League</label>
        <div>
            <select name="league_type" id="league_type" class="">
                <option value="1">NFL</option>
                <option value="2">NCAAF</option>
                <option value="3">NBA</option>
            </select>
        </div>
    </div>
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="favourite_odds">Favorite Spread Odds</label>
        <div>
            <input type="text" class="" id="favourite_odds" value="-110">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="undergo_odds">Underdog Spread Odds</label>
        <div>
            <input type="text" class="" id="undergo_odds" value="-110">
        </div>
    </div>
    
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="fvrt_moneyline">Estimated Favorite Moneyline</label>
        <div class="mt-3 text-center">
            <label id="fvrt_moneyline">-110</label>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="undergo_moneyline">Estimated Underdog Moneyline</label>
        <div class="mt-3 text-center text-light">
            <label id="undergo_moneyline">-110</label>
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
    $(document).ready(function(){
        $('#favourite_odds').on('keyup', function(){
            var spread = parseFloat($('#spread').val());
            var favourite_odds = parseFloat($('#favourite_odds').val());
            var undergo_odds = parseFloat($('#undergo_odds').val());
            var league_type = $("#league_type").val();
            var fvrt_moneyline = 0;
            var undergo_moneyline = 0;
            if(league_type == 1){
                fvrt_moneyline = (spread / 100) + 1;
                undergo_moneyline = (100 / spread) + 1;
            }else if(league_type == 2){
                fvrt_moneyline = (spread / 100) + 1;
                undergo_moneyline = (100 / spread) + 1;
            }else if(league_type == 3){
                fvrt_moneyline = (spread / 100) + 1;
                undergo_moneyline = (100 / spread) + 1;
            }
            $('#fvrt_moneyline').text(fvrt_moneyline);
            $('#undergo_moneyline').text(undergo_moneyline);
        });

        $('#undergo_odds').on('keyup', function(){
            var spread = parseFloat($('#spread').val());
            var favourite_odds = parseFloat($('#favourite_odds').val());
            var undergo_odds = parseFloat($('#undergo_odds').val());
            var league_type = $("#league_type").val();
            var fvrt_moneyline = 0;
            var undergo_moneyline = 0;
            if(league_type == 1){
                fvrt_moneyline = (spread / 100) + 1;
                undergo_moneyline = (100 / spread) + 1;
            }else if(league_type == 2){
                fvrt_moneyline = (spread / 100) + 1;
                undergo_moneyline = (100 / spread) + 1;
            }else if(league_type == 3){
                fvrt_moneyline = (spread / 100) + 1;
                undergo_moneyline = (100 / spread) + 1;
            }
            $('#fvrt_moneyline').text(fvrt_moneyline);
            $('#undergo_moneyline').text(undergo_moneyline);
        });

        $('#spread').on('keyup', function(){
            var spread = parseFloat($('#spread').val());
            var favourite_odds = parseFloat($('#favourite_odds').val());
            var undergo_odds = parseFloat($('#undergo_odds').val());
            var league_type = $("#league_type").val();
            var fvrt_moneyline = 0;
            var undergo_moneyline = 0;

            if(league_type == 1){
                fvrt_moneyline = (spread / 100) + 1;
                undergo_moneyline = (100 / spread) + 1;
            }else if(league_type == 2){
                fvrt_moneyline = (spread / 100) + 1;
                undergo_moneyline = (100 / spread) + 1;
            }else if(league_type == 3){
                fvrt_moneyline = (spread / 100) + 1;
                undergo_moneyline = (100 / spread) + 1;
            }
            $('#fvrt_moneyline').text(fvrt_moneyline);
            $('#undergo_moneyline').text(undergo_moneyline);
        });


    });

    $('#league_type').on('change', function(){
        $('#spread').val('');
        $('#favourite_odds').val('');
        $('#undergo_odds').val('');
        $('#fvrt_moneyline').text('-110');
        $('#undergo_moneyline').text('-110');

    })

    $('.reset').on('click', function(){
        $('#spread').val('');
        $('#favourite_odds').val('');
        $('#undergo_odds').val('');
        $('#fvrt_moneyline').text('-110');
        $('#undergo_moneyline').text('-110');
    });



</script>

@endpush
