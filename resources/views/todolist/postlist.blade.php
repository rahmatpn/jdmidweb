@extends('layouts.editbar')

@section('content')
    <style>
        body{
            /*background: linear-gradient(45deg, rgba(85, 131, 238, 0.6), rgba(65, 216, 221, 0.69) 100%);*/
            background: white;
        }
        .rgba-gradient {
            background: linear-gradient(45deg, rgba(213, 15, 61, 0.6), rgba(13, 17, 198, 0.69) 100%);
        }
    </style>
{{--    <head>--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    </head>--}}
                <form action="{{url('/job/'.$pekerjaan->url_slug.'/todolist')}}" enctype="multipart/form-data"  data-toggle="validator" method="post">
                    <a href="{{url('/hotel/'.auth()->user()->profile->url_slug)}}" style="display: none" class="btn btn-info" role="button"> Kembali</a>
                    <br/>
                    <br/>
                    {{ csrf_field() }}
                @csrf
{{--                    <div class="row">--}}
{{--                        <div class="col">--}}
{{--                            <div class="form-group">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="area">Nama Todo List</label>--}}
{{--                                    <input type="text"--}}
{{--                                           class="form-control"--}}
{{--                                           name="nama_pekerjaan"--}}
{{--                                           placeholder=""--}}
{{--                                           data-error="Silahkan Masukkan Daftar Kerja."--}}
{{--                                           required/>--}}
{{--                                    <div class="help-block with-errors"></div>--}}
{{--                                </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    </div>--}}
{{--                        <input type="submit" class="btn btn-info" value="Submit"/>--}}

                    <div class="container my-5">
                        <section>
                            <div class="jumbotron shadow-none">

                            <!-- Section heading -->
                            <h2 class="h1-responsive font-weight-bold text-center my-5">Post To-Do List</h2>
                            <!-- Section description -->
                            <p class="text-center w-responsive mx-auto mb-5">Masukkan list kerja yang akan dikerjakan oleh part-timer</p>

                            <div class="card bg-info mb-3 ">

                                <div class="card-header white-text text-center text-uppercase">
                                    Todo List {{$pekerjaan->getPosisi()}}
                                    <a href="#" class="fa-pull-right" id="addNew" data-toggle="modal" data-target="#basicExampleModal">
                                        <i class="fa fa-plus white-text" aria-hidden="true"></i></a>
                                </div>
                                <input class="form-control" id="listSearch" type="text" placeholder="Type something to search list items">
                                @foreach($pekerjaan->todolist as $todolist)
                                <ul class="list-group list-group-flush" id="myList">
                                        <li class="list-group-item" data-toggle="modal" data-target="#editModal">{{$todolist->nama_pekerjaan}}</li>
                                    <div style="border-bottom: 1px solid;"></div>
                                </ul>
                                @endforeach

                            </div>
                            </div>
                        </section>




                    </div>




                    <div class="card">
                        <!-- Modal -->
                        <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="title">Add New Item</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body md-form">
                                        <p><input type="text" class="form-control" name="nama_pekerjaan" placeholder="Write Item Here" id="input_text" maxlength="50"></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal" style="display: none">Delete</button>
                                        <button type="button" class="btn btn-primary" id="saveChanges" style="display: none">Save changes</button>
                                        <input type="submit" class="btn btn-info rounded-pill" value="Submit"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </form>

                <form action="/job/{{$pekerjaan->url_slug}}/updatelist" enctype="multipart/form-data"  data-toggle="validator" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="title">Edit List</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @foreach($pekerjaan->todolist as $todolist)
                                            <input type="hidden" name="id[]" value="{{ $todolist->id}}">
{{--                                        <div class="form-inline">--}}
{{--                                            <div class="form-group">--}}
{{--                                            <p><input type="text" class="form-control" name="nama_pekerjaan[]" value="{{$todolist->nama_pekerjaan}}"></p>--}}
{{--                                            <a href="{{url('/job/'.$pekerjaan->url_slug.'/delete/'.$todolist->id)}}" class="fa fa-times"></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                            <div class="md-form input-group mb-3">
                                                <input type="text" class="form-control" name="nama_pekerjaan[]" value="{{$todolist->nama_pekerjaan}}" aria-describedby="MaterialButton-addon2">
                                                <div class="input-group-append">
                                                    <a href="{{url('/job/'.$pekerjaan->url_slug.'/delete/'.$todolist->id)}}" class="btn btn-md rounded btn-secondary m-0 px-3" type="button" id="MaterialButton-addon2">X</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal" style="display: none">Delete</button>
                                        <button type="button" class="btn btn-primary" id="saveChanges" style="display: none">Save changes</button>
                                        <input type="submit" class="btn btn-info rounded-pill" value="Submit"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


{{--                        <div class="card-header">--}}
{{--                            Todo List--}}
{{--                            <a href="#" class="fa-pull-right" id="addNew" data-toggle="modal" data-target="#basicExampleModal">--}}
{{--                            <i class="fa fa-plus" aria-hidden="true"></i></a>--}}
{{--                        </div>--}}
{{--                        <ul class="list-group list-group-flush">--}}
{{--                            <li class="list-group-item ourItem" data-toggle="modal" data-target="#basicExampleModal">Cras justo odio</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                <div class="container">--}}
{{--                    <h2 align="center">Laravel - Dynamically Add or Remove input fields using JQuery</h2>--}}
{{--                    <div class="form-group">--}}
{{--                        <form name="add_name" id="add_name" action="/job/{{$pekerjaan->url_slug}}/todolist">--}}


{{--                            <div class="alert alert-danger print-error-msg" style="display:none">--}}
{{--                                <ul></ul>--}}
{{--                            </div>--}}


{{--                            <div class="alert alert-success print-success-msg" style="display:none">--}}
{{--                                <ul></ul>--}}
{{--                            </div>--}}


{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-bordered" id="dynamic_field">--}}
{{--                                    <tr>--}}
{{--                                        <td><input type="text" name="nama_pekerjaan[]" placeholder="Enter your Name" class="form-control name_list" /></td>--}}
{{--                                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                                <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />--}}
{{--                            </div>--}}


{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}


                </form>


    <script>
        $(document).ready(function () {
            $('.ourItem').each(function(){
                $(this).click(function(event) {
                    var text = $(this).text();
                    $('#title').text('Edit To-Do List');
                    $('#addItem').val(text);
                    $('#delete').show('400');
                    $('#saveChanges').show('400');
                    $('#addButton').hide('400');
                    console.log('text');

                });

            });
            $("#listSearch").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myList li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $('#addNew').click(function(event) {
                    $('#title').text('Tambah To-Do List');
                    $('#addItem').val("");
                    $('#delete').hide('400');
                    $('#saveChanges').hide('400');
                    $('#addButton').show('400');
            });
            $('input#input_text, textarea#textarea1').characterCounter();

            $('input[maxlength], textarea').maxlength({
                alwaysShow: true, //if true the threshold will be ignored and the remaining length indication will be always showing up while typing or on focus on the input. Default: false.
                // threshold: 10, //Ignored if alwaysShow is true. This is a number indicating how many chars are left to start displaying the indications. Default: 10
                warningClass: "form-text text-muted mt-1", //it's the class of the element with the indicator. By default is the bootstrap "badge badge-success" but can be changed to anything you'd like.
                limitReachedClass: "form-text text-muted mt-1", //it's the class the element gets when the limit is reached. Default is "badge badge-danger". Replace with text-danger if you want it to be red.
                //separator: ' of ', //represents the separator between the number of typed chars and total number of available chars. Default is "/".
                //preText: 'You have ', //is a string of text that can be outputted in front of the indicator. preText is empty by default.
                //postText: ' chars remaining.', //is a string outputted after the indicator. postText is empty by default.
                //showMaxLength: true, //showMaxLength: if false, will display just the number of typed characters, e.g. will not display the max length. Default: true.
                //showCharsTyped: true, //if false, will display just the remaining length, e.g. will display remaining lenght instead of number of typed characters. Default: true.
                placement: 'bottom-right-inside', //is a string, object, or function, to define where to output the counter. Possible string values are: bottom ( default option ), left, top, right, bottom-right, top-right, top-left, bottom-left and centered-right. Are also available : **bottom-right-inside** (like in Google's material design, **top-right-inside**, **top-left-inside** and **bottom-left-inside**. stom placements can be passed as an object, with keys top, right, bottom, left, and position. These are passed to $.fn.css. A custom function may also be passed. This method is invoked with the {$element} Current Input, the {$element} MaxLength Indicator, and the Current Input's Position {bottom height left right top width}.

                //appendToParent: true, // appends the maxlength indicator badge to the parent of the input rather than to the body.
                //message: an alternative way to provide the message text, i.e. 'You have typed %charsTyped% chars, %charsRemaining% of %charsTotal% remaining'. %charsTyped%, %charsRemaining% and %charsTotal% will be replaced by the actual values. This overrides the options separator, preText, postText and showMaxLength. Alternatively you may supply a function that the current text and max length and returns the string to be displayed. For example, function(currentText, maxLength) { return '' + Math.ceil(currentText.length / 160) + ' SMS Message(s)';}
                //utf8: if true the input will count using utf8 bytesize/encoding. For example: the '£' character is counted as two characters.
                //showOnReady: shows the badge as soon as it is added to the page, similar to alwaysShow
                //twoCharLinebreak: count linebreak as 2 characters to match IE/Chrome textarea validation
                //customMaxAttribute: String -- allows a custom attribute to display indicator without triggering native maxlength behaviour. Ignored if value greater than a native maxlength attribute. 'overmax' class gets added when exceeded to allow user to implement form validation.
                //allowOverMax: Will allow the input to be over the customMaxLength. Useful in soft max situations.
            });
            {{--$('#addButton').click(function (event) {--}}
            {{--    var text = $('#addItem').val();--}}
            {{--    $.post('/job/{{$pekerjaan->url_slug}}/todolist', {'text': text, '_token:':$('input[name=_token]')}, function(data){--}}
            {{--        console.log(data);--}}
            {{--    });--}}
            {{--});--}}


{{--            var postURL = '{{url('/job/'.$pekerjaan->url_slug.'/todolist')}}';--}}
{{--            var i=1;--}}


{{--            $('#add').click(function(){--}}
{{--                i++;--}}
{{--                $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="nama_pekerjaan[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');--}}
{{--            });--}}


{{--            $(document).on('click', '.btn_remove', function(){--}}
{{--                var button_id = $(this).attr("id");--}}
{{--                $('#row'+button_id+'').remove();--}}
{{--            });--}}


{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                }--}}
{{--            });--}}


{{--            $('#submit').click(function(){--}}
{{--                $.ajax({--}}
{{--                    url:postURL,--}}
{{--                    method:"POST",--}}
{{--                    data:$('#add_name').serialize(),--}}
{{--                    type:'json',--}}
{{--                    success:function(data)--}}
{{--                    {--}}
{{--                        if(data.error){--}}
{{--                            printErrorMsg(data.error);--}}
{{--                        }else{--}}
{{--                            i=1;--}}
{{--                            $('.dynamic-added').remove();--}}
{{--                            $('#add_name')[0].reset();--}}
{{--                            $(".print-success-msg").find("ul").html('');--}}
{{--                            $(".print-success-msg").css('display','block');--}}
{{--                            $(".print-error-msg").css('display','none');--}}
{{--                            $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}


{{--            function printErrorMsg (msg) {--}}
{{--                $(".print-error-msg").find("ul").html('');--}}
{{--                $(".print-error-msg").css('display','block');--}}
{{--                $(".print-success-msg").css('display','none');--}}
{{--                $.each( msg, function( key, value ) {--}}
{{--                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');--}}
{{--                });--}}
{{--            }--}}
        });


    </script>
@endsection
