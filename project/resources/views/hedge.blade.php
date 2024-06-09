
<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="initialOdds">My Odds</label>
        <div>
            <input type="text" class="" id="initialOdds">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="initialBetAmount">Bet Amount</label>
        <div>
            <input type="text" class="" id="initialBetAmount">
        </div>
    </div>
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="hedgeOdds">Hedge Odds</label>
        <div>
            <input type="text" class="" id="hedgeOdds">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="hedgeBetAmount">Hedge Amount</label>
        <div>
            <input type="text" class="" id="hedgeBetAmount">
        </div>
    </div>
</div>

<div class="mt-4 row" style="margin-left:22%">
    <div class="form-group col-md-12 ">
        <label id="totalBetamount" for="">Total Bet Amount -</label>
    </div>
</div>

<div class="mt-4 row">
    <div class="final-result col-md-12">
        <div class="final-result__to-win">
            <div>Total Payout</div>
            <div id="Tpayout" class="final-result__amount">$ -</div>
        </div>
        <div class="final-result__payout">
            <div>Hedge Profit</div>
            <div id="hedgeprofit" class="final-result__amount">$ -</div>
        </div>
    </div>
</div>

<div class="alert alert-danger d-none mt-3" id="holdalert">
    <strong>Provide Valid Odds</strong> <span id="holdmsg"></span>
</div>

<div class="row">
    <div class="col-md-6">
        {{-- reset button here --}}
        <button class="reset">RESET</button>
    </div>
</div>

@push('js')
<script>

    function allVariables() {
        var initialOdds = parseFloat($('#initialOdds').val());
        var initialBetAmount = parseFloat($('#initialBetAmount').val());
        var hedgeOdds = parseFloat($('#hedgeOdds').val());
        var hedgeBetAmount = parseFloat($('#hedgeBetAmount').val());
    }

    $('#initialOdds').on('keyup', function(){
        
        allVariables();

        if(initialOdds < 100  && initialOdds > -100){
            $('#holdalert').removeClass('d-none');
            $('#holdmsg').html('Odds should be greater than 100 or less than -100');
            return;
        }
        else{
            $('#holdalert').addClass('d-none');
        }

        if(isNaN(initialBetAmount)){
            return;
        }


    });

    

$('#initialBetAmount').on('keyup', function(){
    allVariables();
    if( isNaN(initialOdds) || isNaN(initialBetAmount)){
        return;
    }
    if( isNaN(hedgeOdds) || isNaN(hedgeBetAmount)){
        hedgeOdds = 0;
        hedgeBetAmount = 0;
    }

    var totalHedgeAmount = initialBetAmount + hedgeBetAmount;
    $('#totalBetamount').html('Total Bet Amount  $' + totalHedgeAmount);

    var initialPayout = initialBetAmount * (initialOdds / 100) + initialBetAmount;
    var hedgePayout = hedgeBetAmount * (hedgeOdds / 100) + hedgeBetAmount;
    var totalPayout = initialPayout + hedgePayout;
    console.log(initialPayout, hedgePayout, totalPayout);

    $('#Tpayout').html('$' + totalPayout.toFixed(2));

    // hedge profit calculate 
    if(hedgeOdds > 0){
        var hedgeProfit = totalPayout - totalHedgeAmount;
    $('#hedgeprofit').html('$' + hedgeProfit.toFixed(2));
    }
    

  

});


$('#hedgeOdds').on('keyup', function(){
        allVariables();

        if( isNaN(initialOdds) || isNaN(initialBetAmount)){
            $('#holdalert').removeClass('d-none');
            $('#holdmsg').html('Please provide initial odds and bet amount');
            return;
        
        }

        if(hedgeOdds < 100  && hedgeOdds > -100){
            $('#holdalert').removeClass('d-none');
            $('#holdmsg').html('Odds should be greater than 100 or less than -100');
            return;
        }
        else{
            $('#holdalert').addClass('d-none');
        }

        var initialPayout = initialBetAmount * (initialOdds / 100) + initialBetAmount;
        var hedgeamount = initialPayout / ((hedgeOdds / 100)+1);
        $('#hedgeBetAmount').val(hedgeamount.toFixed(2));

        

        

        var totalHedgeAmount = initialBetAmount + hedgeBetAmount;
    $('#totalBetamount').html('Total Bet Amount  $' + totalHedgeAmount);

     






    
    });

</script>






@endpush