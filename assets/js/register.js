$("#contact_form").submit(function(e){
  e.preventDefault();
  var form_data = $('#contact_form').serializeArray();
  for (i = 0; i < 4; i++) { 
      localStorage.setItem(form_data[i].name, form_data[i].value);
  }
  $("#doneModal").modal();
});

$('#doneModal').on('hidden.bs.modal', function () {

  var form_btn = $("#contact_form").find('button[type="submit"]');
  var form_result_div = '#form-result';
  $(form_result_div).remove();
  
  var form_btn_old_msg = form_btn.html();
  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
  var done = function(data){ 
    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
    form_btn.prop('disabled', false).html(form_btn_old_msg);
    $(form_result_div).html('Đăng ký thành công. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất!').fadeIn('slow');
    setTimeout(function () {
        $(form_result_div).fadeOut('slow')
    }, 3000);
  }
  var error = function(error){
    form_btn.prop('disabled', false).html(form_btn_old_msg);
    form_btn.before('<div id="form-result" class="alert alert-warning" role="alert" style="display: none;"></div>');
    $(form_result_div).html('Thất bại').fadeIn('slow');
    setTimeout(function () {
        $(form_result_div).fadeOut('slow')
    }, 3000);
  };
  var option = {success:done,error:error};

  $('#contact_form').ajaxSubmit(option); 
  console.log('closed');
});

$("#test_page").click(function(){
  
  location.href='/kiem-tra';
});


// $("#contact_form").validate({
//     submitHandler: function (form) {
//         var form_btn = $(form).find('button[type="submit"]');
//         var form_result_div = '#form-result';
//         $(form_result_div).remove();
        
//         var form_btn_old_msg = form_btn.html();
//         form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
//         $("#doneModal").modal()

//         // localStorage.setItem("form_name", );

//         // var done = function(data){ 
//         //   console.log(data);
//         //   form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
//         //   form_btn.prop('disabled', false).html(form_btn_old_msg);
//         //   $(form_result_div).html('Đăng ký thành công. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất!').fadeIn('slow');
//         //   setTimeout(function () {
//         //       $(form_result_div).fadeOut('slow')
//         //   }, 3000);
//         // }
//         // var error = function(error){
//         //   form_btn.prop('disabled', false).html(form_btn_old_msg);
//         //   form_btn.before('<div id="form-result" class="alert alert-warning" role="alert" style="display: none;"></div>');
//         //   $(form_result_div).html('Thất bại').fadeIn('slow');
//         //   setTimeout(function () {
//         //       $(form_result_div).fadeOut('slow')
//         //   }, 3000);
//         // };
//         // var option = {success:done,error:error};

//         // $('#contact_form').ajaxSubmit(option); 
//     }
// });

