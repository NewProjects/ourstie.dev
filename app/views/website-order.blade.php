@extends('layouts.master')
@section('title')Website Order
@stop
@section('order')
<div class ="container">
	<h2 class ="form-group">Website Order Form</h2>

	<p>
		<strong>Let's get started on creating your website order by providing some details</strong>
	</p>
</div>
<div class ="container">
	{{ Form::open(array('' => '')) }}

	                    <fieldset>
	                    	<h3 class="col-md-8">Personal Information</h3>
	                        <div class="form-group">
	                            <div class="col-md-8">
	                                {{ Form::text('first_name', Input::old('first'),array('placeholder'=>'First Name', 'class'=>'form-control')) }}
	                            </div>
	                        </div>

	                        <div class="form-group">
	                        	<div class="col-md-8">	
	                             	{{ Form::text('last_name', Input::old('last'),array('placeholder'=>'Last Name', 'class'=>'form-control')) }}
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-8">
	                                {{ Form::email('email', Input::old('email'),array('placeholder'=>'Email', 'class'=>'form-control')) }}
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="col-md-8">
	                                {{ Form::number('number', Input::old('phone'),array('placeholder'=>'Phone Number', 'class'=>'form-control')) }}
	                            </div>
	                        </div>
	                        <div class="col-md-8">
	                        		<p></p>
	                        	</div>
	                        <div class="form-group">
	                        	<div class="col-md-8">
		                        	<label> How did you hear our us?</label>
		                        	<div class="form-group">
			                        	<select class="col-md-4">
			                        		<option value= "Select here"...>Select here...</option>
			                        		<option value= "Google search"...>Google search</option>
			                        		<option value= "Facebook"...>Facebook</option>
			                        		<option value= "Craiglist"...>Craiglist</option>
			                        		<option value= "Other"...>Freind/Referral</option>
			                        	</select>
		                        	</div>
	                        	</div>
	                        </div>
	                        <div class="col-md-8">
	                        <h3>Project Specific</h3>
	                        <div class="col-md-8">
	                        		<p></p>
	                        	</div>
	                        <label> Choose your preferred package:</label>
	                        <div class="form-group">
	                        	<select class="col-md-4">
	                        		<option value="Choose your package">Select...</option>
	                        		<option value= "Standard"...>Standard</option>
	                        		<option value= "Google search"...>Google search</option>
	                        		<option value= "Premium"...>Premium</option>
		                        </select>
		                     </div>
	                        </div>
	                        <div class="col-md-8">
	                        		<p></p>
	                        	</div>
	                        <div class="form-group">
		                        <div class="col-md-8">
			                        <label>Who is your target audience?</label>
			                        <div class="form-group">
			                            <div class="col-md-8">
			                                {{ Form::text('email', Input::old('email'),array('placeholder'=>'', 'class'=>'form-control')) }}
			                            </div>
			                        </div>
		                        </div>
	                        </div>
	                         <div class="form-group">
		                        <div class="col-md-8">
			                        <label>Name a few competitors websites or other sites you like that are similar.</label>
			                        <div class="form-group">
			                            <div class="col-md-8">
			                                {{ Form::text('email', Input::old('email'),array('placeholder'=>'', 'class'=>'form-control')) }}
			                            </div>
			                        </div>
		                        </div>
	                        </div>	
	                        <div class="form-group">
		                        <div class="col-md-8">
			                        <label>Are there any specific COLORS you would like to have in your site?</label>
			                        <div class="form-group">
			                            <div class="col-md-8">
			                                {{ Form::text('email', Input::old('email'),array('placeholder'=>'', 'class'=>'form-control')) }}
			                            </div>
			                        </div>
		                        </div>
	                        </div>
	                          <div class="form-group">
		                        <div class="col-md-8">
			                        <label>What is your project deadline?</label>
			                        <div class="form-group">
			                            <div class="col-md-8">
			                                {{ Form::text('email', Input::old('email'),array('placeholder'=>'', 'class'=>'form-control')) }}
			                            </div>
			                        </div>
		                        </div>
	                        </div>
	                        <div class="form-group">
		                        <div class="col-md-8">
			                        <label>Comments about your project</label>
			                        <div class="form-group">
			                            <div class="col-md-8">
			                                {{ Form::textarea('email', Input::old('email'),array('placeholder'=>'', 'class'=>'form-control')) }}
			                            </div>
			                        </div>
		                        </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="col-md-10 text-left">
	                                <button type="submit" name="submit_signup"class="btn btn-primary btn-sm">Submit</button>
	                            </div>	
	                        </div>
	                    </fieldset>

	{{ Form::close() }} 
</div>
@stop