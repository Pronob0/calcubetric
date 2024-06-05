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

            var side1Odds = parseFloat($('#side1').val());
            var side2Odds = parseFloat($('#side2').val());
            var bet_type = $("#hbet_type").val();
            if(bet_type == 1){

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

        }
        else if(bet_type == 2){
            // decimal odds condition  
            if ((side1Odds > 1  && side1Odds < 100) ||  (side2Odds > 1 && side2Odds < 100)) {
                $("#halert").removeClass('d-none');
                return;
            }
            else{
                $("#halert").addClass('d-none');
            }

        //    calculate hold for decimal odds

            var totalRisk = 200;  // Assuming $100 on each side
            var returnSide1 = side1Odds + 1;
            var returnSide2 = side2Odds + 1;
        }
        

            var averageTotalReturn = (returnSide1 + returnSide2) / 2;
            var holdPercentage = ((totalRisk / averageTotalReturn) - 1) * 100;
            $("#hhold").text(holdPercentage.toFixed(2) + "%");


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