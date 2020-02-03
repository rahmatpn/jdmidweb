    @extends('layouts.auth')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="container">
            <form action="/job" enctype="multipart/form-data" method="post" data-toggle="validator" novalidate="true">
            <a href="/hotel/{{auth()->user()->id}}" class="btn btn-info" role="button"> Kembali</a>
            <br/>
            <br/>
                {{ csrf_field() }}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="area">Area:</label>
                                <input type="text"
                                       class="form-control"
                                       name="area"
                                       placeholder="Ex.Main Hall"
                                       data-error="Silahkan Masukkan Area Kerja."
                                       required/>
                                <div class="help-block with-errors"></div>
                            </div>
                            <label for="posisi">Posisi</label>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="posisi" name="posisi" data-error="Silahkan pilih Posisi Pekerjan" required>
                                    <option selected>Posisi</option>
                                    <option value="1">Laundry</option>
                                    <option value="2">Pool Maintenance</option>
                                    <option value="3">Equipment Maintenance</option>
                                    <option value="4">Receptionist</option>
                                    <option value="5">Porter</option>
                                    <option value="6">Security</option>
                                    <option value="7">Valet</option>
                                    <option value="8">Concierge</option>
                                    <option value="9">House Keeping</option>
                                    <option value="10">Room Service</option>
                                    <option value="11">Waiter/Waitress</option>
                                    <option value="12">Crew Restaurant</option>
                                    <option value="13">Barista</option>
                                    <option value="14">Photographer</option>
                                    <option value="15">Cleaning Service</option>
                                </select>
                            <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai:</label>
                    <input type="date"
                           class="form-control"
                           name="tanggal_mulai"
                           data-error="Silahkan masukkan tanggal mulai"
                           required="required">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="waktu_mulai">Waktu Mulai:</label>
                    <input type="time"
                           class="form-control"
                           data-error="Silahkan masukkan waktu mulai"
                           name="waktu_mulai"
                           required="required">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="waktu_selesai">Waktu Selesai:</label>
                    <input type="time"
                           class="form-control"
                           data-error="Silahkan masukkan waktu selesai"
                           name="waktu_selesai"
                           required="required">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="tinggi_minimal">Tinggi Minimal:</label>
                    <div class="input-group">
                        <input type="number"
                               class="form-control"
                               placeholder="100"
                               name="tinggi_minimal">
                        <div class="input-group-append">
                            <span class="input-group-text">Cm</span>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label for="tinggi_maksimal">Tinggi Maksimal:</label>
                    <div class="input-group">
                        <input type="number"
                               class="form-control"
                               placeholder="100"
                               name="tinggi_maksimal">
                        <div class="input-group-append">
                            <span class="input-group-text">Cm</span>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                <label for="berat_minimal">Berat Minimal:</label>
                <div class="input-group">

                    <input type="number"
                           class="form-control"
                           placeholder="40"
                           name="berat_minimal">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label for="berat_maksimal">Berat Maksimal:</label>
                <div class="input-group">

                    <input type="number"
                           class="form-control"
                           placeholder="100"
                           name="berat_maksimal">
                    <div class="input-group-append">
                        <span class="input-group-text">Kg</span>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="kuota">Kuota: </label>
                    <input type="number"
                           class="form-control"
                           name="kuota"
                           placeholder="0"
                           data-error="Silahkan masukkan kuota"
                           required="required">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                <label for="bayaran">Bayaran:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="text"
                           class="form-control"
                           name="bayaran"
{{--                           data-error="Silahkan masukkan Bayaran"--}}
                           value=""
                           data-type="currency"
                           placeholder="Ex 100000"
                           required="required"/>
                    <div class="help-block with-errors"></div>
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea id="my-summernote" name="deskripsi" type="text"></textarea>

                </div>
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </form>

        </div>
    </div>
</div>
<script >

    $("input[data-type='currency']").on({
        keyup: function() {
            formatCurrency($(this));
        },
        blur: function() {
            formatCurrency($(this), "blur");
        }
    });


    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".")
    }


    function formatCurrency(input, blur) {
        // appends $ to value, validates decimal side
        // and puts cursor back in right position.

        // get input value
        var input_val = input.val();

        // don't validate empty input
        if (input_val === "") { return; }

        // original length
        var original_len = input_val.length;

        // initial caret position
        var caret_pos = input.prop("selectionStart");

        // check for decimal
        if (input_val.indexOf(".") >= 0) {

            // get position of first decimal
            // this prevents multiple decimals from
            // being entered
            var decimal_pos = input_val.indexOf(".");

            // split number by decimal point
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);

            // add commas to left side of number
            left_side = formatNumber(left_side);

            // validate right side
            right_side = formatNumber(right_side);

            // On blur make sure 2 numbers after decimal
            if (blur === "blur") {
                right_side += "";
            }

            // Limit decimal to only 2 digits
            right_side = right_side.substring(0, 2);

            // join number by .
            input_val = left_side + "." + right_side;

        } else {
            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);

            // final formatting
            if (blur === "blur") {
                input_val += "";
            }
        }

        // send updated string to input
        input.val(input_val);

        // put caret back in the right position
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input[0].setSelectionRange(caret_pos, caret_pos);
    }



</script>
@endsection
