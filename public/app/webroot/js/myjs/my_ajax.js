//add expense ajax
;(function($){
  $('.add_expense_btn').on('click', function(){
    var $form = $('.add_expense_form');
    var url = $form.attr('action');
    var param = $form.serializeArray();
    console.log(param);
    $.ajax({
      url:url,
      type:'POST',
      data:param,
      success:function(){
        location.reload();
      },error:function(){

      }
    });
  });
})(jQuery);