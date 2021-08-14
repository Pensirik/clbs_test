<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ Session::token() }}"> 
    <title>CLBS TEST</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inter:400,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>


<div class="container">
  <nav id="navbar">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">news</a></li>
            <li><a href="#ex1" rel="modal:open">Imprint</a></li>
        </ul>
  </nav>
  <header>  
      <img src="/images/birds.jpg"></img>
  </header>
    <div id="content1" class="content">
      <p>Aenean lacinia bibendum nulla sed consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper.</p>

      <p>Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper. Donec sed odio dui.</p>

      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Donec ullamcorper nulla non metus auctor fringilla.</p>

      <p>Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis.</p>
    </div>
    <div id="content2" class="content">
        <img src="/images/flowers.jpg"></img>
    </div>
</div>

<!-- Modal content -->
<div id="modalDialog" class="modalDialog">
  <div class="row">
    <div class="col-50">
          <h1>Welcome</h1>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Curabitur blandit tempus porttitor.
          </p>
           <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus..</p>
    </div>
    <div class="col-50 contact_form">
        <div class="contact_title">Contact Form</div>
        <form class="contact-form row"  id="contactForm" >
        {{csrf_field()}}
          <div class="fieldform">
                <!-- add field -->
          </div> 
          <div class="row">
            <input type="submit" value="Submit" id="submit">
          </div>
          </form>
    </div>
  </div>
</div>
<!-- End Modal content -->
</body>
</html>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> -->
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<script>
  $(window).scroll(function(){
        if($(this).scrollTop()){
            $('#navbar').addClass('sticky')
        } else{
                $('#navbar').removeClass('sticky')
        }
    });
$(document).ready(function () {        
  $("#modalDialog").modal({
    // fadeDuration: 500,
    fadeDelay: 0.20
  });
});
</script>


<script type="text/javascript">
  $.get( "formField", function( data ) {
    console.log(data);
   var  arr = jQuery.map( data, function( value, index ) {
       console.log(value['label']);
       var form = "<div class ='row'><div class ='form-group'><div class ='col-25'><label for ='"+value['name']+"'>"+ value['label'] +"</label></div><div class ='col-75'><input type='text' id='"+value['name']+"' name='"+value['name']+"'></div></div></div>";
        return form

    });
     $( ".fieldform" ).html(arr);

  }, "json" );
  

 $('#contactForm').on('submit',function(e){
     e.preventDefault();
        let name = $('#name').val();
        let email = $('#email').val();
        let surname = $('#surname').val();
        let telephone = $('#telephone').val();

     $.ajax({
          url: "/formSubmit",
          type:"post",
          data:{
            "_token": "{{ csrf_token() }}",
            name:name,
            surname:surname,
            email:email,
            telephone:telephone,
       },
       success:function(response){
         console.log(response);
         if(response.success==true){
      
          $('#modalDialog').delay(0.2).fadeOut('slow');
          $('.jquery-modal').hide();
       
         }
       },
      });
     });
   </script>