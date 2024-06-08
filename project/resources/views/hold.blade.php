<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="stake">Side 1 Odds</label>
        <div>
            <input type="text" class="input" id="side1">
        </div>
    </div>
    <div class="form-group col-md-6">
        <label for="side2">Side 2 Odds</label>
        <div>
            <input type="text" class="input" id="side2">
        </div>
    </div>
</div>

<div class="d-flex mt-4 row">
    <div class="form-group col-md-6">
        <label for="stake">Hold</label>
        <div class="mt-3 text-center">
            <label for="hold" id="hhold"></label>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label class="sel-label" for="stake">Bet Type</label>
        <div>
            <select name="bet_type" id="hbet_type" class="">
                <option value="1">AMERICAN</option>
                <option value="2">DECIMAL</option>
                <option value="3">FRACTIONAL</option>
            </select>
        </div>
    </div>
</div>

{{-- alert --}}
<div class="alert alert-danger d-none mt-3" id="halert">
    <strong>Provide Valid Odds</strong> <span id="hmsg"></span>
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
        
       

        $('#side2').on('keyup', function(){
            var bet_type = $("#hbet_type").val();
            if(bet_type == 1){
            var side1Odds = parseFloat($('#side1').val());
            var side2Odds = parseFloat($('#side2').val());
            
           
            

            if ((side1Odds > 0  && side1Odds < 99) ||  (side2Odds > 0 && side2Odds < 99)) {
                $("#halert").removeClass('d-none');
                return;
            }
            else{
                $("#halert").addClass('d-none');
            }

            var totalRisk = 200;  // Assuming $100 on each side
            var returnSide1 = (side1Odds / 100) * 100 + 100;
            var returnSide2 = (side2Odds / 100) * 100 + 100;

            var averageTotalReturn = (returnSide1 + returnSide2) / 2;
            var holdPercentage = ((totalRisk / averageTotalReturn) - 1) * 100;
            $("#hhold").text(holdPercentage.toFixed(2) + "%");

        }
        else if(bet_type == 2){
            var side1Odds = parseFloat($('#side1').val());
            var side2Odds = parseFloat($('#side2').val());
            var bet_type = $("#hbet_type").val();

            // decimal odds condition  
            if (!isNaN(side1Odds) && !isNaN(side2Odds)) {
                    var impliedProb1 = 1 / side1Odds;
                    var impliedProb2 = 1 / side2Odds;

                    var totalImpliedProbability = impliedProb1 + impliedProb2;
                    var holdPercentage = totalImpliedProbability - 1;
                    var holdPercentageInPercent = holdPercentage * 100;

                    $('#hhold').text(holdPercentageInPercent.toFixed(2) + '%');
                    $("#halert").addClass('d-none');
                } else {
                    $("#halert").removeClass('d-none');
                }
        }


        else if(bet_type == 3){
            // check input value is fraction or not then calculate the fraction odds 
            var side1Odds = $('#side1').val();
            var side2Odds = $('#side2').val();
            var bet_type = $("#hbet_type").val();

            
            if (side1Odds.includes('/') && side2Odds.includes('/')) {
                var side1OddsArray = side1Odds.split('/');
                var side2OddsArray = side2Odds.split('/');

                var numerator1 = parseFloat(side1OddsArray[0]);
                var denominator1 = parseFloat(side1OddsArray[1]);
                var numerator2 = parseFloat(side2OddsArray[0]);
                var denominator2 = parseFloat(side2OddsArray[1]);

                var decimalOdds1 = 1 + (numerator1 / denominator1);
                var decimalOdds2 = 1 + (numerator2 / denominator2);

                var impliedProb1 = 1 / decimalOdds1;
                var impliedProb2 = 1 / decimalOdds2;

                var totalImpliedProbability = impliedProb1 + impliedProb2;
                var holdPercentage =  totalImpliedProbability -1;
                var holdPercentageInPercent = holdPercentage * 100;

                $('#hhold').text(holdPercentageInPercent.toFixed(2) + '%');
                $("#halert").addClass('d-none');
            } else {
                $("#halert").removeClass('d-none');
            }



            
            
        }

        

            


        });



        $('#reset').click(function(){
            $('#side1').val('');
            $('#side2').val('');
            $('#hhold').text('');
            $('#halert').addClass('d-none');
        });
        $('#hbet_type').change(function(){
            $('#side1').val('');
            $('#side2').val('');
            $('#hhold').text('');
            $('#halert').addClass('d-none');
        });




        
    });

    




</script>


@endpush