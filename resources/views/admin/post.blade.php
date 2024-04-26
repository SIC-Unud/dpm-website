@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Post</h6>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#postForm" id="BtnCreate"
                            data-service="create">Add Post</button>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        @if ($posts)
                            <div class="list-group">
                                @foreach ($posts as $post)
                                    <div class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">{{ $post->title }}</h5>
                                            <a href="{{ $post->link }}">Go to link</a>
                                            <div class="d-flex">
                                                {{-- @if ($post->image)
                                                    <a href="{{ $post->image }}" class="btn btn-primary mr-3"
                                                        target="_blank">View Image</a>
                                                @endif --}}
                                                <button class="btn btn-primary button-edit mr-3"
                                                    data-id="{{ $post->id }}" data-service="edit" data-toggle="modal"
                                                    data-target="#postForm">Edit</button>
                                                <button class="btn-delete btn btn-danger"
                                                    data-id="{{ $post->id }}">Delete</button>
                                            </div>
                                        </div>
                                        <p class="mb-1">{{ $post->description }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="modal" tabindex="-1" role="dialog" id="postForm" data-form="#formData">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Post</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" id="formData">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title">Title : </label>
                                        <input type="text" name="title" id="titlte" class="form-control"
                                            placeholder="input Title ..." value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="link">Link : </label>
                                        <input type="text" name="link" id="link" class="form-control"
                                            placeholder="input Link ..." value="">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="image_path">Image : </label>
                                        <input type="file" name="image_path" id="image_path" class="form-control-file">
                                    </div> --}}
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" id="BtnSubmit">Save changes</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        const postData = JSON.parse('{{ $posts->toJson() }}'.replace(/&quot;/g, '"'));

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#postForm").on("show.bs.modal", function(e) {
            var caller = $(e.relatedTarget);
            var form = $($(this).data("form"));
            form.attr("data-service", caller.data("service"));
            if (caller.data("service") == "edit") {
                form.attr("data-id", caller.data("id"));
                console.log(caller.data("id"));
            }
        });

        $("#BtnCreate").click(function(e) {
            e.preventDefault();
            ['title', 'link', 'image_path'].forEach(function(name) {
                $("#formData input[name='" + name + "']").val('');
                $("#formData textarea[name='" + name + "']").val('');
            });
        });

        $(".button-edit").click(function(e) {
            e.preventDefault();
            for (i = 0; i < postData.length; i++) {
                if (postData[i]['id'] == $(this).data('id')) {
                    ['title', 'link'].forEach(function(name) {
                        $("#formData input[name='" + name + "']").val(postData[i][name]);
                        $("#formData textarea[name='" + name + "']").val(postData[i][name]);
                    });
                    break;
                }
            }
        });

        $("#BtnSubmit").click(function(e) {
            e.preventDefault();

            var form = $("#formData");
            var data = new FormData(form[0]);
            var url = "";

            if (form.data("service") == "create") {
                url = "{{ route('admin.post.store') }}";
            } else {
                url = "{{ route('admin.post.update', '') }}" + "/" + form.data("id");
                data.set('_method', 'PUT')
            }

            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#postForm").modal("hide");
                    swal({
                        title: "Success!",
                        text: data.message,
                        icon: "success",
                        value: true
                    }).then(function(confirmed) {
                        location.reload();
                    });
                },
                error: function(data) {
                    $(".error-message").remove();
                    var errors = data.responseJSON.errors;
                    var element = '<div class="error-message alert alert-danger m-2" role="alert">';
                    for (const error in errors) {
                        element += '<li>' + errors[error] + '</li>';
                    }
                    element += '</div>';
                    $("#formData").prepend(element);
                }
            });
        });

        $(".btn-delete").click(function(e) {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this post!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: 'DELETE',
                            url: "{{ route('admin.post.destroy', '') }}" + '/' + $(this).data("id"),
                            success: function(data) {
                                swal({
                                    title: "Success!",
                                    text: data.message,
                                    icon: "success",
                                    value: true
                                }).then(function(confirmed) {
                                    location.reload();
                                });
                            }
                        });
                    }
                });

        });
    </script>
@endsection
