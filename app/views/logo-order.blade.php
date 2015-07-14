@extends('layouts.master')
@section('title')Logo Order
@stop
@section('order')
<div class ="container">
	<h2>Logo Order Form</h2>
	<p>
		<strong>Let's get started on creating your custom logo order by providing some details</strong>
	</p>
</div>
<div class ="container">
	{{ Form::open(array('' => '')) }}

	                    <fieldset>
	                        <div class="col-md-8">
	                        <h3>Project Specific</h3>
	                        <label> Choose your preferred package:</label><br>
	                        	<select class="col-md-4">
	                        		<option value="Choose your package">Select...</option>
	                        		<option value= "Standard"...>Economy</option>
	                        		<option value= "Google search"...>Standard</option>
	                        		<option value= "Premium"...>Premium</option>
		                        </select>
	                        </div>
	                        	<div class="col-md-8">
	                        		<p></p>
	                        	</div>
	                        <div class="form-group">
		                        <div class="col-md-8">
			                        <label>Text/Name to be used in logo?</label>
			                        <div class="form-group">
			                            <div class="col-md-8">
			                                {{ Form::text('email', Input::old('email'),array('placeholder'=>'', 'class'=>'form-control')) }}
			                            </div>
			                        </div>
		                        </div>
	                        </div>
	                        <div class="col-md-8">
	                        		<p></p>
	                        </div>
	                         <div class="form-group">
		                        <div class="col-md-8">
			                        <label>Logo treatment(Text,Icon,Graphical,Illustrative).</label>
			                        <div class="form-group">
			                            <select class="col-md-4">
		                        		<option value= "Select here"...>Choose one...</option>
		                        		<option value= "Google search"...>Text</option>
		                        		<option value= "Facebook"...>Icon</option>
		                        		<option value= "Craiglist"...>Graphical</option>
		                        		<option value= "Other"...>Illustrative</option>
		                        	</select>
			                        </div>
		                        </div>
	                        </div>	
	                        <div class="col-md-8">
	                        		<p></p>
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
	                        <div class="col-md-8">
	                        		<p></p>
	                        	</div>
	                          <div class="form-group">
		                        <div class="col-md-8">
			                        <label>What are some existing company logos that appeal you?</label>
			                        <div class="form-group">
			                            <div class="col-md-8">
			                                {{ Form::text('email', Input::old('email'),array('placeholder'=>'', 'class'=>'form-control')) }}
			                            </div>
			                        </div>
		                        </div>
	                        </div>
	                        <div class="col-md-8">
	                        		<p></p>
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