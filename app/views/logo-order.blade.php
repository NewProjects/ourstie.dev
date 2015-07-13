@extends('layouts.master')
@section('title')Logo Order
@stop
@section('order')
<div>
	<h2>Logo Order Form</h2>
</div>
<div>
	<p>
		<strong>Let's get started on creating your custom logo order by providing some details</strong>
	</p>
</div>
<div>
	{{ Form::open(array('' => '')) }}

		<fieldset>
        	<h3>Personal Information</h3>
            <div class="form-group">
                <div class="col-md-8 text-center">
                    {{ Form::text('first_name', Input::old('first'),array('placeholder'=>'First Name', 'class'=>'form-control')) }}
                </div>
            </div>

            <div class="form-group">
            	<div class="col-md-8 text-center">	
                 	{{ Form::text('last_name', Input::old('last'),array('placeholder'=>'Last Name', 'class'=>'form-control')) }}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 text-center">
                    {{ Form::email('email', Input::old('email'),array('placeholder'=>'Email', 'class'=>'form-control')) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8 text-center">
                    {{ Form::number('number', Input::old('phone'),array('placeholder'=>'Phone Number', 'class'=>'form-control')) }}
                </div>
            </div>
            <div class="form-group">
            	<div class="col-md-8">
                	<label> How did you hear our us?</label>
                	<select>
                		<option value= "Select here"...>Select here...</option>
                		<option value= "Google search"...>Google search</option>
                		<option value= "Facebook"...>Facebook</option>
                		<option value= "Craiglist"...>Craiglist</option>
                		<option value= "Other"...>Freind/Referral</option>
                	</select>
            	</div>
            </div>
            <div class="col-md-8">
            <h3>Project Specific</h3>
            <div>
            <div class="form-group">
                <div class="col-md-10 text-left">
                    <button type="submit" name="submit_signup"class="btn btn-primary btn-sm">Submit</button>
                </div>	
            </div>
        </fieldset>

	{{ Form::close() }} 
</div>
@stop