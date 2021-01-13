
  $(document).ready(function(){
    var myPassWord = prompt('パスワードを入力してください');
    if ( myPassWord == "4D_Crystal" ){
      $('body').show();
    } else {
      window.location.href = "http://www.cara-elegante.com/";
    }
  });