<html>
<head>
<style >
  body{
      background:url('http://www.hd-freewallpapers.com/lamborghini-wallpaper/desktop-lamborghini-cars-images-free-download.jpg');
  }
</style>
</head>
<body>
<!-- Modal 
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
      
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal">
                <form action="#" method="post">
                    {{csrf_field()}}
            <fieldset>
            <!-- Sign In Form 
            <!-- Text input
            <div class="control-group">
              <label class="control-label" for="userid">Name:</label>
              <div class="controls">
                <input required="" id="userid" name="userid" type="text" class="form-control input-medium" placeholder="Enter your Name">
              </div>
            </div>

            <!-- Password input
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password:</label>
              <div class="controls">
                <input required="" id="passwordinput" name="passwordinput" class="form-control input-medium" type="password" placeholder="********">
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) 
            <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls">
                <label class="checkbox inline" for="rememberme-0">
                  <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                  Remember me
                </label>
              </div>
            </div>

            <!-- Button 
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-success">Sign In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input
            <div class="control-group">
              <label class="control-label" for="email">Email:</label>
              <div class="controls">
                <input id="email" name="email" class="form-control input-large" type="text" placeholder="Enter your Email" required>
              </div>
            </div>
            
            <!-- Text input
            <div class="control-group">
              <label class="control-label" for="userid">Name:</label>
              <div class="controls">
                <input id="name" name="name" class="form-control input-large" type="text" placeholder="Enter your Name" required="">
              </div>
            </div>
            
            <!-- Password input
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control input-large" type="password" placeholder="********" required="">
                <em>1-8 Characters</em>
              </div>
            </div>
            
            <!-- Text input
            <div class="control-group">
              <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
              <div class="controls">
                <input id="reenterpassword" class="form-control input-large" name="reenterpassword" type="password" placeholder="********" required="">
              </div>
            </div>
            
            <!-- Multiple Radios (inline) 
            <br>
             <div class="control-group">
              <label class="control-label" for="humancheck">Humanity Check:</label>
              <div class="controls">
                <label class="radio inline" for="humancheck-0">
                  <input type="radio" name="humancheck" id="humancheck-0" value="robot" checked="checked">I'm a Robot</label>
                <label class="radio inline" for="humancheck-1">
                  <input type="radio" name="humancheck" id="humancheck-1" value="human">I'm Human</label>
              </div>
            </div>
            
            <!-- Button 
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      
       <div class="modal-footer">
        <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
      
    </div>
  </div>
</div>
<!--signup-->
@extends('layouts.master')
 
@section('title', $title)
 
@section('sidebar')
    @parent
    //
   
@endsection
 
@section('content')
 
    <h1>{{ $title }}</h1>
 
    {!! Form::open([
        'route' => 'user.store'
    ]) !!}
 <fieldset>

  <div class="control-group">
              <label class="control-label" for="email">{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}</label>
               <label class="control-label" for="email">{!! Form::text('name', null, ['class' => 'form-control', 'size' => 40, ]) !!}</label>
              <div class="controls">
                <input id="email" name="email" class="form-control input-large" type="text" placeholder="Enter your Email" required>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label" for="userid">{!! Form::label('email', 'Email', ['class' => 'control-label']) !!}</label>
              <label class="control-label" for="userid">{!! Form::email('email', null, ['class' => 'form-control', 'size' => 40, ]) !!}</label>
              <div class="controls">
                <input id="name" name="name" class="form-control input-large" type="text" placeholder="Enter your Name" required="">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="userid">{!! Form::label('password', 'Password', ['class' => 'control-label']) !!}</label>
              <label class="control-label" for="userid">{!! Form::password('password', null, ['class' => 'form-control', 'size' => 64, ]) !!}</label>
              <div class="controls">
                <input id="name" name="name" class="form-control input-large" type="text" placeholder="Enter your Name" required="">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="userid">{!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label']) !!}</label>
              <label class="control-label" for="userid">{!! Form::password('password_confirmation', null, ['class' => 'form-control', 'size' => 64, ]) !!}</label>
              <div class="controls">
                <input id="name" name="name" class="form-control input-large" type="text" placeholder="Enter your Name" required="">
              </div>
            </div>
              <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-success">{!! Form::submit('Submit', ['class' => 'btn btn-submit']) !!}</button>
              </div>
            </div>
        </fieldset>
    <!--<table>
        <tr>
            <td>{!! Form::label('name', 'Name', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::text('name', null, ['class' => 'form-control', 'size' => 40, ]) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('email', 'Email', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::email('email', null, ['class' => 'form-control', 'size' => 40, ]) !!}</td>
        </tr>
        <tr>
            <td>{!! Form::label('password', 'Password', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::password('password', null, ['class' => 'form-control', 'size' => 64, ]) !!}</td>
        </tr>        
        <tr>
            <td>{!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'control-label']) !!}</td>
            <td>{!! Form::password('password_confirmation', null, ['class' => 'form-control', 'size' => 64, ]) !!}</td>
        </tr>        
        <tr>
            <td></td>
            <td>{!! Form::submit('Submit', ['class' => 'btn btn-submit']) !!}</td>
        </tr>
    </table>    -->    
    
    {!! Form::close() !!}
 
@endsection
</body>
</html>
