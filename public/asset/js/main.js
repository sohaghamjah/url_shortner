/***********************
 * Pre Defined
 */

$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

const CSRF_TOKEN = $("head meta[name=csrf-token]").attr("content");

/***********************
 * Alert Modal Show
 */
function alertModalShow(method,url,title,message,target = null){
    $('#alert-modal .top-title').text(title);

    let modal_body = `<form action="${url}" method="${method}">
                        <input type="hidden" name="_token" value="${CSRF_TOKEN}">
                        <p class="mb-0 alert-title">${message}</p>
                        <div class="alert-confirm-modal text-right mt-4">
                            <input type="hidden" name="target" value="${target}">
                            <button class="btn btn-warning shadow-none" data-dismiss="modal" type="button">Cancel</button>
                            <button id="confirm-btn" class="btn btn-danger shadow-none" type="submit">Yes! <i class="fa fa-spinner fa-pulse fa-fw btn-loading d-none"></i></button>
                        </div>
                    </form>`;

    $('#alert-modal .modal-body').html(modal_body);
    $('#alert-modal').modal('show');
}

/***********************
 * Global Search
 */

function globalSearch(text,route,table_class){
  $.ajax({
    url: route, // action route
    type: "POST", // type
    data: {text:text,_token: CSRF_TOKEN}, // request data
    dataType: 'JSON',
    cache: false,
    success: function(response){
       $('.'+table_class).html(response.data);
    },
    error: function(error){
      flashMessage('error', 'Something Went Wrong, Please Try Again!');
    }
  })
}


/***********************
 * Jquery Document Ready
 */

$(document).ready(function() {
  // Select 2
  $('.select2').select2();

  // Toggle Password
  $(document).on('click', '.toggle-password', function () {
    $(this).toggleClass('fa-eye fa-eye-slash');
    var input = $($(this).attr('toggle'));
    if(input.attr('type') == 'password')
    {
        input.attr('type', 'text');
    }else{
        input.attr('type', 'password');
    }
  });
});