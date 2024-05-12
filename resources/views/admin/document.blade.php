@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">

      <div class="col-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Documents</h6>
            <button class="btn btn-primary" data-toggle="modal" data-target="#documentForm" id="BtnCreate"
              data-service="create">Add Document</button>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            @if ($documents)
              <div class="list-group">
                @foreach ($documents as $document)
                  <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">{{ $document->title }}</h5>
                      <div class="d-flex">
                        @if ($document->image)
                          <a href="{{ $document->image }}" class="btn btn-primary mr-3" target="_blank">View Image</a>
                        @endif
                        @if ($document->file)
                          <a href="{{ $document->file }}" class="btn btn-primary mr-3" target="_blank">Download
                            Document</a>
                        @endif
                        <button class="btn btn-primary button-edit mr-3" data-id="{{ $document->id }}" data-service="edit"
                          data-toggle="modal" data-target="#documentForm">Edit</button>
                        <button class="btn-delete btn btn-danger" data-id="{{ $document->id }}">Delete</button>
                      </div>
                    </div>
                    <p class="mb-1">{{ $document->description }}</p>
                  </div>
                @endforeach
              </div>
            @endif
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="modal" tabindex="-1" role="dialog" id="documentForm" data-form="#formData">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Document</h5>
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
                      value="" required>
                  </div>
                  <div class="form-group">
                    <label for="description">Description : </label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="input Description ..."
                      required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="image_path">Image : </label>
                    <input type="file" name="image_path" id="image_path" class="form-control-file" accept="image/*"
                      required>
                  </div>
                  <div class="form-group">
                    <label for="file_path">File : </label>
                    <input type="file" name="file_path" id="file_path" class="form-control-file" required>
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
    const documentData = JSON.parse('{{ $documents->toJson() }}'.replace(/&quot;/g, '"'));

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $("#documentForm").on("show.bs.modal", function(e) {
      var caller = $(e.relatedTarget);
      var form = $($(this).data("form"));
      form.attr("data-service", caller.data("service"));
      if (caller.data("service") == "edit")
        form.attr("data-id", caller.data("id"));
    });

    $("#BtnCreate").click(function(e) {
      e.preventDefault();
      ['title', 'description', 'file_path', 'image_path'].forEach(function(name) {
        $("#formData input[name='" + name + "']").val('');
        $("#formData textarea[name='" + name + "']").val('');
      });
    });

    $(".button-edit").click(function(e) {
      e.preventDefault();
      for (i = 0; i < documentData.length; i++) {
        if (documentData[i]['id'] == $(this).data('id')) {
          ['title', 'description', 'file_path', 'image_path'].forEach(function(name) {
            $("#formData input[name='" + name + "']").val(documentData[i][name]);
            $("#formData textarea[name='" + name + "']").val(documentData[i][name]);
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
        url = "{{ route('admin.document.store') }}";
      } else {
        url = "{{ route('admin.document.update', '') }}" + "/" + form.data("id");
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
        url: "{{ route('admin.document.destroy', '') }}" + '/' + $(this).data("id"),
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
