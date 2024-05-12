@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Program Kerja</h6>
            <button class="btn btn-primary" data-toggle="modal" data-target="#workForm" id="BtnCreate"
              data-service="create">Tambah Program Kerja</button>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Jenis/Divisi</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($works as $work)
                  <tr id="program-kerja-{{ $work->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $work->title }}</td>
                    <td>
                      <p class="d-inline-block text-truncate" style="max-width: 300px">{{ $work->description }}</p>
                    </td>
                    <td>{{ $work->type }}</td>
                    <td><a href="/storage/images/works/{{ $work->image_name }}">Lihat gambar</a></td>
                    <td>
                      <div class="d-flex justify-content-between">
                        <button class="btn btn-primary button-edit" data-id="{{ $work->id }}" data-service="edit"
                          data-toggle="modal" data-target="#workForm">Edit</button>
                        <button class="btn-delete btn btn-danger" data-id="{{ $work->id }}">Delete</button>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="modal" tabindex="-1" role="dialog" id="workForm" data-form="#formData">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Program Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" id="formData">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="title">Nama Program Kerja : </label>
                    <input type="text" name="title" id="title" class="form-control"
                      placeholder="Nama program kerja..." value="">
                  </div>
                  <div class="form-group">
                    <label for="description">Deskripsi: </label>
                    <textarea name="description" id="description" class="form-control" rows="5"
                      placeholder="Deskripsi program kerja..."></textarea>
                  </div>
                  <div class="form-group">
                    <label for="type">Jenis Program Kerja</label>
                    <select class="form-control" aria-label="Default select example" name="type" id="type">
                      <option selected></option>
                      @foreach ($roles as $role)
                        <option value="{{ $role }}">{{ $role }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" accept="image/*" class="form-control" name="image" id="image">
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
    const workData = JSON.parse('{{ $works->toJson() }}'.replace(/&quot;/g, '"'));
    let service;
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $("#BtnCreate").click(function(e) {
      service = "create";

      e.preventDefault();
      ['title', 'description', 'image'].forEach(function(name) {
        $("#formData input[name='" + name + "']").val('');
        $("#formData textarea[name='" + name + "']").val('');
      });
    });

    $(".button-edit").click(function(e) {
      e.preventDefault();
      for (i = 0; i < workData.length; i++) {
        if (workData[i]['id'] == $(this).data('id')) {
          service = "edit";
          ['title', 'description'].forEach(function(name) {
            $("#formData input[name='" + name + "']").val(workData[i][name]);
            $("#formData textarea[name='" + name + "']").val(workData[i][name]);
          });
          break;
        }
      }
    });

    $("#workForm").on("show.bs.modal", function(e) {
      var caller = $(e.relatedTarget);
      var form = $($(this).data("form"));
      form.attr("data-service", caller.data("service"));
      if (caller.data("service") == "edit") {
        form.attr("data-id", caller.data("id"));
      }
      console.log(service);
    });

    $("#BtnSubmit").click(function(e) {
      e.preventDefault();

      var form = $("#formData");
      var data = new FormData(form[0]);
      var url = "";
      console.log(form.data('service'));

      if (service == "create") {
        url = "{{ route('admin.work.store') }}";
      } else {
        url = "{{ route('admin.work.update', '') }}" + "/" + form.data("id");
        data.set('_method', 'PUT')
      }
      console.log(url);

      $.ajax({
        type: 'POST',
        url: url,
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#workForm").modal("hide");
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
          var errors = data;
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
      swal({
          title: "Anda yakin?",
          text: "Anda tidak akan dapat mengembalikan data ini!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              type: 'DELETE',
              url: "{{ route('admin.work.destroy', '') }}" + '/' + $(this).data("id"),
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
