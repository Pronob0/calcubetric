
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

@push('js')

<script>
    $(document).ready(function() {
        $('#side1').on('input', function() {
            var side1 = $('#side1').val();
            var side2 = $('#side2').val();
            var hold = 0;
            if (side1 && side2) {
                hold = 100 / (1 / (1 / side1) + 1 / (1 / side2));
            }
            $('#hhold').text(hold.toFixed(2) + ' %');
        });

        $('#side2').on('input', function() {
            var side1 = $('#side1').val();
            var side2 = $('#side2').val();
            var hold = 0;
            if (side1 && side2) {
                hold = 100 / (1 / (1 / side1) + 1 / (1 / side2));
            }
            $('#hhold').text(hold.toFixed(2) + ' %');
        });

        $('#bet_type').on('change', function() {
            var bet_type = $('#bet_type').val();
            var hold = $('#hhold').text();
            if (bet_type == 1) {
                // convert to american odds 
                $('#hhold').text(hold + ' %');
                
            } else if (bet_type == 2) {
                $('#hhold').text(hold + ' %');
            } else if (bet_type == 3) {
                $('#hhold').text(hold + ' %');
            }
        });

        $('.reset').on('click', function() {
            $('#side1').val('');
            $('#side2').val('');
            $('#hhold').text('200.00 %');
        });
    });
    
@endpush
