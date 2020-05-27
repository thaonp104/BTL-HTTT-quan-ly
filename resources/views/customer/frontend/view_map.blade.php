@extends('customer.layouts.main')
@section('title')
    Map
@endsection
@section('content')
    <script>
        document.getElementById("item_menu1").classList.remove('current');
        document.getElementById("item_menu5").classList.add('current');
    </script>
<div class="row justify-content-center" style="width: 1170px; margin: 40px auto">
  <div class="col-md-10">
    <div><h4>BẢN ĐỒ</h4></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.7975363563414!2d105.77254361409594!3d21.04078558599186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b5534fb3bf%3A0x70d71b071349fa94!2sDevPro+Vi%E1%BB%87t+Nam!5e0!3m2!1svi!2s!4v1530736641331" style="width:800px; height:480px; margin:0 auto; position:relative; background-color:rgb(29,227,223);overflow:hidden;" frameborder="0"  allowfullscreen></iframe>
  </div>
</div>
@endsection
