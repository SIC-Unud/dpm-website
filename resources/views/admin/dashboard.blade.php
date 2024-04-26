@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div style="text-align: end;">
      <form id="formData" action="{{ route('admin.sort') }}">
        <label for="order">Order by</label>
        <select name="order" id="order">
          <option value="" selected>--Select Option--</option>
          <option value="post_limit">Deadline</option>
        </select>
      </form>
    </div>
    <div id="notificationCardWrapper" class="row">

    </div>
  </div>
@endsection

@section('scripts')
  <script>
    let notifications;

    let cardDescs = $(".card-desc");

    cardDescs.each(function() {
      var text = $(this).text();

      var truncatedText = truncateText(text, 10);

      console.log(truncatedText);

      $(this).text(truncatedText);

      $(this).data('full-text', text);
    })

    // Function to truncate text to specified word limit
    function truncateText(text, limit) {
      var words = text.split(' '); // Split the text into an array of words
      if (words.length > limit) {
        return words.slice(0, limit).join(' ') + '...'; // Join the first 'limit' words and add ellipsis
      }
      return text; // Return the full text if it's within the limit
    }

    $(".show-more-btn").click(function() {
      if ($(this).data("is-expand") === false) {
        cardDesc = $(this).siblings(".card-desc");
        fullText = cardDesc.data("full-text");

        cardDesc.text(fullText);
        $(this).text("Show less");
        $(this).data("is-expand", true);
      } else {
        cardDesc = $(this).siblings(".card-desc");
        fullText = cardDesc.data("full-text");
        truncatedText = truncateText(fullText, 10);

        cardDesc.text(truncatedText);
        $(this).text("Show more");
        $(this).data("is-expand", false);
      }
    })

    $("#order").change(function(e) {
      e.preventDefault();

      var selectedOpt = $(this).val();
      var url = "{{ route('admin.sort') }}";
      url += "?order=" + selectedOpt;

      $.ajax({
        type: 'GET',
        url: url,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
          displayNotification(data.data);
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
    })

    const displayNotification = (notifications) => {
      var notifWrapper = $("#notificationCardWrapper");

      notifWrapper.empty();

      var element = "";

      notifications.map((notif) => {
        element += `
            <div class="w-100 h-100 p-1">
                <div class="card shadow py-2">
                    <div class="card-body">
                        <h3>${notif.title}</h3>
                        <p>${notif.description}</p>
            `;

        if (notif.file_name && notif.file_name.length > 0) {
          element +=
            `<a href="/storage/files/notifications/${notif.file_name}" class="btn btn-primary">Download Notification File</a>`;
        }

        element += "</div></div></div>";
      })

      notifWrapper.append(element);
    }
  </script>
@endsection
