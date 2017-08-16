$("#contact_form").submit(function(e){
    e.preventDefault();
});
$("#contact_form").validate({
    submitHandler: function (form) {
        var form_btn = $(form).find('button[type="submit"]');
        var form_result_div = '#form-result';
        $(form_result_div).remove();
        
        var form_btn_old_msg = form_btn.html();
        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
        
        var done = function(data){ 
          console.log(data);
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
    }
});

