
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

{{-- alert  --}}
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

            var side1 = parseFloat($("#side1").val());
                var side2 = parseFloat($("#side2").val());
                var bet_type = $("#hbet_type").val();
                if(bet_type == 1){

                    // condition for american odds 
                    if ((side1 > 0  && side1 < 99) ||  (side2 > 0 && side2 < 99)) {
                        $("#halert").removeClass('d-none');
                        return;
                    }
                    else{
                        $("#halert").addClass('d-none');
                    }

                var decimal1 = (side1 > 0) ? (side1 / 100) + 1 : (100 / Math.abs(side1)) + 1;
                var decimal2 = (side2 > 0) ? (side2 / 100) + 1 : (100 / Math.abs(side2)) + 1;
                var hold =  ((1 / decimal1) + (1 / decimal2)) -1;
                console.log(hold);
                var hold = hold * 100;
                hold = hold.toFixed(2);
                $("#hhold").text(hold + "%");

                }
       
            
            

           
        });

        
    });

    




</script>
    
    
@endpush
