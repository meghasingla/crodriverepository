
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body  style="background: url('/images/g1.jpg');
    background-repeat: no-repeat;
    background-size: 1350px 660px;">
  <style >
    .form-container div, .form-container  span{
    font-family: Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif;
}

.form-container ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #999;
}

.form-container :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #999;
   opacity:  1;
}

.form-container ::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #999;
   opacity:  1;
}

.form-container :-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #999;
}

.form-container :placeholder-shown { /* Standard (https://drafts.csswg.org/selectors-4/#placeholder) */
  color:  #999;
}

.oauth-buttons {
    text-align:center;
}
.row {
  text-align:center;
}
#login-form{
 min-width:375px;   
}
.login-container{
  width:400px;
  height:330px;
  display:inline-block;
  margin-top: -165px;
    top: 50%;
    left: 50%;
    position: absolute;
    margin-left: -200px;
}
.form-container .create-account:hover{
  opacity:.7;
}
.form-container .create-account{
  color:inherit;
  margin-top: 15px;
    display: inline-block;
  cursor:pointer;
  text-decoration:none;
}

.oauth-buttons .fa{
  cursor:pointer;
  margin-top:10px;
  color:inherit;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  margin:5px;
  margin-top:15px;
}
.oauth-buttons .fa:hover{
  color:white;
}
.oauth-buttons .fa-google-plus:hover{
  background: #dd4b39;
}
 .oauth-buttons .fa-facebook:hover{
  background: #8b9dc3;
}

.oauth-buttons .fa-linkedin:hover{
  background: #0077b5;
}

.oauth-buttons .fa-twitter:hover{
  background: #55acee;
}

.form-container .req-input .input-status {
    display: inline-block;
    height: 40px;
    width: 40px;
    float: left;  
}
.form-container .input-status::before{
  content: " ";
  height:20px;
  width:20px;
  position:absolute;
  top:10px;
  left:10px;
  color:white;
  border-radius:50%;
  background:white;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
  
}

.form-container .input-status::after{
  content: " ";
  height:10px;
  width:10px;
  position:absolute;
  top:15px;
  left:15px;
  color:white;
  border-radius:50%;
  background:#BCBCBC;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}

.form-container .req-input{
  width:100%;
    float:left;
  position:relative;
  background:#969798;
  height:80px;
  display:inline-block;
  border-radius:0px;
  margin:5px 0px;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}

.form-container div .row .invalid:hover{
  background:#EF9A9A;
}

.form-container div .row .invalid{
  background:#E57373;
}

.form-container .invalid .input-status:before {
  width:20px;
  height:4px;
  top:19px;
  left:10px;
  background:white;/*#F44336;*/
  border-radius:0px;
   -ms-transform: rotate(45deg); /* IE 9 */
    -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
    transform: rotate(45deg);
}

.form-container .invalid .input-status:after {
  width:20px;
  height:4px;
  background:white;
  border-radius:0px;
  top:19px;
  left:10px;
   -ms-transform: rotate(-45deg); /* IE 9 */
    -webkit-transform: rotate(-45deg); /* Chrome, Safari, Opera */
    transform: rotate(-45deg);
}

.form-container div .row  .valid:hover{
  background:#A5D6A7;
}

.form-container div .row .valid {
  background:#81C784;
  
}

.form-container .valid .input-status:after {
  border-radius:0px;
    width: 17px;
    height: 4px;
    background: white;
    top: 16px;
    left: 15px;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

.form-container .valid .input-status:before {
  border-radius:0px;
    width: 11px;
    height: 4px;
  background:white;
    top: 19px;
    left: 10px;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

.form-container .input-container{
  padding:0px 20px;
}

 .form-container .row-input{
  padding:0px 5px;
}

.form-container .req-input.input-password{
  margin-bottom:0px;
}
.form-container .req-input.confirm-password{
  margin-top:0px;
}

.form-container {
  margin:20px;
  padding:20px;
  border-radius:0px;
  background:#fff;
  color:#333;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}

.form-container .form-title{
  font-size:20px;
  color:inherit;
  text-align:center;
  margin-bottom:10px;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}

.form-container .submit-row{
  padding:0px 0px;
}

.form-container .btn.submit-form{
  margin-top:15px;
  padding:12px;
  background:#fff;
  color:#333;
  border-radius:0px;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}

.form-container .btn.submit-form:focus{
  outline:0px;
  color:white;
}

.form-container .btn.submit-form:hover{
  background:#fff;
  color:white;
}

.form-container .tooltip.top .tooltip-arrow {
  border-top-color:#00BCD4 !important;
}

.form-container .tooltip.top.tooltip-invalid .tooltip-arrow {
  border-top-color:#E57373 !important;
}

.form-container .tooltip.top.tooltip-invalid .tooltip-inner::before{
  background:#E57373;
}
.form-container .tooltip.top.tooltip-invalid .tooltip-inner{
  background:#FFEBEE !important;
  color:#E57373;
}

.form-container .tooltip.top.tooltip-valid .tooltip-arrow {
  border-top-color:#81C784 !important;
}

.form-container .tooltip.top.tooltip-valid .tooltip-inner::before{
  background:#81C784;
}
.form-container .tooltip.top.tooltip-valid .tooltip-inner{
  background:#E8F5E9 !important;
  color:#81C784;
}

.form-container .tooltip.top .tooltip-inner::before{
  content:" ";
  width:100%;
  height:6px;
  background:#00BCD4;
  position:absolute;
  bottom:5px;
  right:0px;
}
.form-container .tooltip.top .tooltip-inner{
  border:0px solid #00BCD4;
  background:#E0F7FA !important;
  color:#00ACC1;
  font-weight:bold;
  font-size:20px;
  border-radius:0px;
  padding:10px 15px;
}
.form-container .tooltip {
  max-width:150px;
  opacity:1 !important;
}

.form-container .message-box{
  width:100%;
  height:auto;
}

.form-container textarea:focus,.form-container textarea:hover{
  background:#fff;
  outline:none;
  border:0px;
}

.form-container .req-input textarea {
  max-width:calc(100% - 50px);
    width: 100%;
    height: 80px;
    border: 0px;
    color: #777;
    padding: 10px 9px 0px 9px;
  float:left;
  
}
.form-container input[type=text]:focus, .form-container input[type=password]:focus, .form-container input[type=email]:focus, .form-container input[type=tel]:focus, .form-container select{
    background:#fff;
  color:#777;
  border-left:0px;
  outline:none;
}

.form-container input[type=text]:hover,.form-container input[type=password]:hover,.form-container input[type=email]:hover,.form-container input[type=tel]:hover, . form-container select{
  background:#fff;
}

.form-container input[type=text], .form-container input[type=password], .form-container input[type=email],input[type=tel], form-container select{
  width:calc(100% - 0px);
  float:left;
  border-radius:0px;
  border:0px solid #ddd;
  padding:14px 9px;
  height:40px;
  line-height:40px;
  color:#777;
  background:#fff;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
  </style>



@extends('layouts.master')
 
@section('sidebar')
    @parent
 
@endsection
 
@section('content')
 
    <h1></h1>
 
    {!! Form::open([
        'route' => 'user.store'
    ]) !!}
 <fieldset >




<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
    
      <div class="col-md-4">
         
      <form style="margin-top: 0px;padding-top: 10px;">
      <div id="contact-form" class="form-container" data-form-container>
      <div class="row">
        <div class="form-title">
          <span>Contact Us</span>
        </div>
      </div>
      <div class="input-container">
        <div class="row" style="margin: 0px;margin-bottom: -10px;margin-top: 5px;text-align: center;font-size: 20px;">
          <span class="req-input" >
              <label class="control-label" for="email" ">{!! Form::label('name', 'Name') !!}</label>
               <label class="control-label" for="email" ">{!! Form::text('name', null) !!}</label>
          </span>
        </div>

        <div class="row"  style="margin: 0px;margin-bottom: -10px;font-size: 20px;" >
          <span class="req-input" >
              <label class="control-label" for="userid">{!! Form::label('email', 'Email') !!}</label>
              <label class="control-label" for="userid">{!! Form::email('email', null) !!}</label>
          </span>
        </div>
        <div class="row" style="margin: 0px;margin-bottom: -10px;font-size: 20px;">
          <span class="req-input">
           <label class="control-label" for="userid">{!! Form::label('password', 'Password') !!}</label>
              <label class="control-label" for="userid">{!! Form::password('password', null) !!}</label>
          </span>
        </div>
        <div class="row" style="margin: 0px;font-size: 20px;">
          <span class="req-input message-box">
            <label class="control-label" for="userid">{!! Form::label('password_confirmation') !!}</label>
              <label class="control-label" for="userid">{!! Form::password('password_confirmation') !!}</label>
        </div>
        <div class="row submit-row" style="margin: 0px;font-size: 20px;color: #333;">
        <button id="confirmsignup" name="confirmsignup" class="btn btn-success" style="background-color: fff;color: #333;border-color: #fff;">{!! Form::submit('Submit') !!}</button>
        </div>
      </div>
      </div>
      </form>
    </div>
   
<div id="marquee">
<marquee scrollamount="30"><img src="../images/move.png" height="100" width="250"></marquee>

</div>
      </fieldset>
         {!! Form::close() !!}
 
@endsection
</body>
</html>
<script>
  $(function(){
  
    $('[data-toggle="tooltip"]').tooltip(); 
  
  $(".req-input input, .req-input textarea").on("click input", function(){
    validate($(this).closest("[data-form-container]"));
  });
    
  //This is for the on blur, if the form fields are all empty but the target was one of the fields do not reset to defaul state
  var currentlySelected;
  $(document).mousedown(function(e) {
        currentlySelected = $(e.target);
    });
  
  //Reset to form to the default state of the none of the fields were filled out
  $(".req-input input,  .req-input textarea").on("blur", function(e){
    var Parent = $(this).closest("[data-form-container]");
    //if the target that was clicked is inside this form then do nothing
    if(typeof currentlySelected != "undefined" && currentlySelected.parent().hasClass("req-input") && Parent.attr("id") == currentlySelected.closest(".form-container").attr("id"))
      return;
    
    var length = 0;
    Parent.find("input").each(function(){
      length += $(this).val().length;
    });
    Parent.find("textarea").each(function(){
      length += $(this).val().length;
    });
    if(length == 0){
      var container = $(this).closest(".form-container");
      resetForm(container);
    }
  });
  
  $(".create-account").on('click', function(){
    if($(".confirm-password").is(":visible")){
      $(this).text("Create an Account");
      $(this).closest("[data-form-container]").find(".submit-form").text("Login");
      $(".confirm-password").parent().slideUp(function(){
        validate($(this).closest("[data-form-container]"));
      });
    } else {
      $(this).closest("[data-form-container]").find(".submit-form").text("Create Account");
      $(this).text("Already Have an Account");
      $(".confirm-password").parent().slideDown(function(){
        validate($(this).closest("[data-form-container]"));
      });
    }
    
  });
  
  $("[data-toggle='tooltip']").on("mouseover", function(){
    console.log($(this).parent().attr("class"));
    if($(this).parent().hasClass("invalid")){
      $(".tooltip").addClass("tooltip-invalid").removeClass("tooltip-valid");
    } else if($(this).parent().hasClass("valid")){
      $(".tooltip").addClass("tooltip-valid").removeClass("tooltip-invalid");
    } else {
      $(".tooltip").removeClass("tooltip-invalid tooltip-valid");
    }
  });
  
})

function resetForm(target){
  var container = target;
  container.find(".valid, .invalid").removeClass("valid invalid")
  container.css("background", "");
  container.css("color", "");
}

function setRow(valid, Parent){
  var error = 0;
  if(valid){
    Parent.addClass("valid");
    Parent.removeClass("invalid");
  } else {
    error = 1;
    Parent.addClass("invalid");
    Parent.removeClass("valid");
  }
  return error;
}

function validate(target){
  var error = 0;
  target.find(".req-input input, .req-input textarea, .req-input select").each(function(){
    var type = $(this).attr("type");
    
    if($(this).parent().hasClass("confirm-password") && type == "password"){
      var type = "confirm-password"; 
    }
    
    var Parent = $(this).parent();
    var val = $(this).val();
    
    if($(this).is(":visible") == false)
      return true; //skip iteration
    
    switch(type) {
      case "confirm-password":
        var initialPassword = $(".input-password input").val();
        error += setRow(initialPassword  == val && initialPassword.length > 0, Parent);
        break;
      case "password":
      case "textarea":
      case "text":
        var minLength = $(this).data("min-length");
        if(typeof minLength == "undefined")
          minLength = 0;
        error += setRow(val.length >= minLength, Parent);
        break; 
      case "email":
        error += setRow(validateEmail(val), Parent);
        break;
      case "tel":
        error += setRow(phonenumber(val), Parent);
        break;      
    } 
  });
  
  var submitForm = target.find(".submit-form");
  var formContainer = target;
  var formTitle = target.find(".form-title");
  if(error == 0){
    formContainer.css("background", "#C8E6C9");
    formContainer.css("color", "#2E7D32");
    submitForm.addClass("valid");
    submitForm.removeClass("invalid");
        return true;
  } else {    
    formContainer.css("background", "#FFCDD2");
    formContainer.css("color", "#C62828");
    submitForm.addClass("invalid");
    submitForm.removeClass("valid");
        return false;
  }
}
function phonenumber(inputtxt) {  
  if(typeof inputtxt == "undefined")
    return;
  var phoneno = /^\d{10}$/;  
  if((inputtxt.match(phoneno))) {  
    return true;  
  }  
  else {  
    return false;  
  }  
}  

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
  </script>
 