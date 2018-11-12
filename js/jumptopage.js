jQuery(document).ready( function($){
  //.page_nav a.go_btn为确认按钮，点击执行
  $('.newslist_nav a.nl-go').on('click',function(event){
    event.preventDefault(); //取消默认动作
    page_input = $('#jump_to'); //获取输入框的值
    page_max = page_input.attr('max'); //获取输入框中的max属性的值，就是最大页码
    if(page_input.val()==''){
      alert('請輸入頁碼');
      return false;
    }
    if((parseInt(page_input.val())<1) || (parseInt(page_input.val())>page_max)){
      alert('請輸入1至' + page_max + '間的數字');
      return false;
    }
    page_links = $('.newslist_nav a').eq(1).attr('href'); //从页码列表中获取任意一个链接,此处获取第一个链接
    go_link = page_links.replace(/\/page\/([0-9]{1,})/g, '/page/'+page_input.val()); //将页码数字替换
    location.href = go_link; //跳转
  });
  $.fn.onlyNum = function onlyNum() {
     $(this).keypress(function (event) {
         var eventObj = event || e;
         var keyCode = eventObj.keyCode || eventObj.which;
         if ((keyCode >= 48 && keyCode <= 57))
           return true;
         else
             return false;
     }).focus(function () {
     //禁用输入法
         this.style.imeMode = 'disabled';
     }).bind("paste", function () {
     //获取剪切板的内容
         var clipboard = window.clipboardData.getData("Text");
         if (/^\d+$/.test(clipboard))
             return true;
         else
             return false;
     });
 };
 //#page_input为页码输入框
 $('#jump_to').onlyNum();
});
