@extends('layouts.auth')

@section('content')
{{--    <head>--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    </head>--}}
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="container">
                <form action="/job/{{$pekerjaan->url_slug}}/todolist" enctype="multipart/form-data"  data-toggle="validator" method="post">
                    <a href="{{url('/hotel/'.auth()->user()->profile->url_slug)}}" class="btn btn-info" role="button"> Kembali</a>
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
                                                <div class="card-header">
                                                    Todo List
                                                    <a href="#" class="fa-pull-right" id="addNew" data-toggle="modal" data-target="#basicExampleModal">
                                                    <i class="fa fa-plus" aria-hidden="true"></i></a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    @foreach($pekerjaan->todolist as $todolist)
                                                    <li class="list-group-item ourItem" data-toggle="modal" data-target="#editModal">{{$todolist->nama_pekerjaan}}</li>
                                                    @endforeach
                                                </ul>


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
                                    <div class="modal-body">
                                        <p><input type="text" class="form-control" name="nama_pekerjaan" placeholder="Write Item Here" id="addItem"></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal" style="display: none">Delete</button>
                                        <button type="button" class="btn btn-primary" id="saveChanges" style="display: none">Save changes</button>
                                        <input type="submit" class="btn btn-info" value="Submit"/>

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
                                        <h5 class="modal-title" id="title">Edit Item</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @foreach($pekerjaan->todolist as $todolist)
                                            <input type="text" name="id" value="{{ $todolist->id}}">
                                        <p><input type="text" class="form-control" name="nama_pekerjaan" value="{{$todolist->nama_pekerjaan}}"></p>
                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal" style="display: none">Delete</button>
                                        <button type="button" class="btn btn-primary" id="saveChanges" style="display: none">Save changes</button>
                                        <input type="submit" class="btn btn-info" value="Submit"/>

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

            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.ourItem').each(function(){
                $(this).click(function(event) {
                    var text = $(this).text();
                    $('#title').text('Edit Item');
                    $('#addItem').val(text);
                    $('#delete').show('400');
                    $('#saveChanges').show('400');
                    $('#addButton').hide('400');
                    console.log('text');

                });

            });
            $('#addNew').click(function(event) {
                    $('#title').text('Add New Item');
                    $('#addItem').val("");
                    $('#delete').hide('400');
                    $('#saveChanges').hide('400');
                    $('#addButton').show('400');
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
