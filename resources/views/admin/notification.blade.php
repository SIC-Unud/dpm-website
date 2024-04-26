@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">

      <div class="col-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Notifications</h6>
            <button class="btn btn-primary" data-toggle="modal" data-target="#notificationForm" id="BtnCreate"
              data-service="create">Add Notification</button>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            @if ($notifications)
              <div class="list-group">
                @foreach ($notifications as $notification)
                  <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">{{ $notification->title }}</h5>
                      <div class="d-flex">
                        @if ($notification->file_name)
                          <a href="/storage/files/notifications/{{ $notification->file_name }}"
                            class="btn btn-primary mr-3" target="_blank">Download
                            Notification File</a>
                        @endif
                        <button class="btn btn-primary button-edit mr-3" data-id="{{ $notification->id }}"
                          data-service="edit" data-toggle="modal" data-target="#notificationForm">Edit</button>
                        <button class="btn-delete btn btn-danger" data-id="{{ $notification->id }}">Delete</button>
                      </div>
                    </div>
                    <p class="mb-1">{{ $notification->description }}</p>
                  </div>
                @endforeach
              </div>
            @endif
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="modal" tabindex="-1" role="dialog" id="notificationForm" data-form="#formData">
          <div class="modal-dialog" role="notification">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Notification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" id="formData">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="title">Title : </label>
                    <input type="text" name="title" id="titlte" class="form-control" placeholder="input Title ..."
                      value="">
                  </div>
                  <div class="form-group">
                    <label for="description">Description : </label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="input Description ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label for="post_limit">Post Limit : </label>
                    <input type="text" name="post_limit" id="post_limit" class="form-control date-picker"
                      placeholder="input Post Limit ...">
                  </div>
                  <div class="form-group">
                    <label for="file_name">File : </label>
                    <input type="file" name="file_name" id="file_name" class="form-control-file">
                  </div>
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
    $('.date-picker').datepicker({
      dateFormat: "yy-mm-dd",
      changeYear: true,
      changeMonth: true,
      yearRange: "-100:+0"
    });

    const notificationData = JSON.parse('{{ $notifications->toJson() }}'.replace(/&quot;/g, '"'));

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $("#notificationForm").on("show.bs.modal", function(e) {
      var caller = $(e.relatedTarget);
      var form = $($(this).data("form"));
      form.attr("data-service", caller.data("service"));
      if (caller.data("service") == "edit")
        form.attr("data-id", caller.data("id"));
    });

    $("#BtnCreate").click(function(e) {
      e.preventDefault();
      ['title', 'description', 'file_name', 'post_limit'].forEach(function(name) {
        $("#formData input[name='" + name + "']").val('');
        $("#formData textarea[name='" + name + "']").val('');
      });
    });

    $(".button-edit").click(function(e) {
      e.preventDefault();
      for (i = 0; i < notificationData.length; i++) {
        if (notificationData[i]['id'] == $(this).data('id')) {
          ['title', 'description', 'file_name', 'image_path', 'post_limit'].forEach(function(name) {
            $("#formData input[name='" + name + "']").val(notificationData[i][name]);
            $("#formData textarea[name='" + name + "']").val(notificationData[i][name]);
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
        url = "{{ route('admin.notification.store') }}";
      } else {
        url = "{{ route('admin.notification.update', '') }}" + "/" + form.data("id");
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
          $("#userForm").modal("hide");
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
          console.log(data);
          console.log(errors);
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
      $.ajax({
        type: 'DELETE',
        url: "{{ route('admin.notification.destroy', '') }}" + '/' + $(this).data("id"),
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
    });
  </script>
@endsection
