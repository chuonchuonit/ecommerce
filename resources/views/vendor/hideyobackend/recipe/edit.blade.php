@extends('hideyo_backend::_layouts.default')

@section('main')

<div class="row">
	<div class="col-sm-3 col-md-2 sidebar">
		@include('hideyo_backend::_partials.recipe-tabs', array('recipeEdit' => true))
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

		<ol class="breadcrumb">
			<li><a href="/"><i class="entypo-folder"></i>Dashboard</a></li>
			<li><a href="{!! URL::route('recipe.index') !!}">Recipe</a></li>
			<li><a href="{!! URL::route('recipe.edit', $recipe->id) !!}">edit</a></li>
			<li><a href="{!! URL::route('recipe.edit', $recipe->id) !!}">{!! $recipe->title !!}</a></li>
			<li class="active">general</li>
		</ol>

		<h2>Recipe <small>edit</small></h2>
		<hr/>
		{!! Notification::showAll() !!}


		{!! Form::model($recipe, array('method' => 'put', 'route' => array('hideyo.recipe.update', $recipe->id), 'files' => true, 'class' => 'form-horizontal form-groups-bordered validate')) !!}
		<input type="hidden" name="_token" value="{!! Session::getToken() !!}">



		<div class="form-group">
			{!! Form::label('title', 'Title', array('class' => 'col-sm-3 control-label')) !!}
			<div class="col-sm-5">
				{!! Form::text('title', null, array('class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('number_of_persons', 'Number of persons', array('class' => 'col-sm-3 control-label')) !!}
			<div class="col-sm-5">
				{!! Form::text('number_of_persons', null, array('class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('preparation_time', 'Preparation time', array('class' => 'col-sm-3 control-label')) !!}
			<div class="col-sm-5">
				{!! Form::text('preparation_time', null, array('class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('recipe_course_menu_id', 'Course menu', array('class' => 'col-sm-3 control-label')) !!}
			<div class="col-sm-5">
				{!! Form::select('recipe_course_menu_id', $courseMenus, null, array('class' => 'form-control')) !!}
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('recipe_type_of_dish_id', 'Type of dish', array('class' => 'col-sm-3 control-label')) !!}
			<div class="col-sm-5">
				{!! Form::select('recipe_type_of_dish_id', $typeOfDishes, null, array('class' => 'form-control')) !!}
			</div>
		</div>



		<div class="form-group">
			{!! Form::label('short_description', 'Short description', array('class' => 'col-sm-3 control-label')) !!}
			<div class="col-sm-5">
				{!! Form::text('short_description', null, array('class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
			</div>
		</div>



		<div class="form-group">
			{!! Form::label('description', 'Description', array('class' => 'col-sm-3 control-label')) !!}
			<div class="col-sm-9">
				{!! Form::textarea('description', null, array('class' => 'form-control ckeditor', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
			</div>
		</div>


		<div class="form-group">
			{!! Form::label('preparation', 'Preparation', array('class' => 'col-sm-3 control-label')) !!}
			<div class="col-sm-9">
				{!! Form::textarea('preparation', null, array('class' => 'form-control ckeditor', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('ingredients', 'Ingredients', array('class' => 'col-sm-3 control-label')) !!}
			<div class="col-sm-9">
				{!! Form::textarea('ingredients', null, array('class' => 'form-control ckeditor', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('accessoires', 'Accessoires', array('class' => 'col-sm-3 control-label')) !!}
			<div class="col-sm-9">
				{!! Form::textarea('accessoires', null, array('class' => 'form-control ckeditor', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
			</div>
		</div>

        <div class="form-group">
            {!! Form::label('products', 'Products', array('class' => 'col-sm-3 control-label')) !!}
            <div class="col-sm-5">
                {!! Form::multiselect2('products[]', $products->toArray(), $recipe->products()->lists('product_id')->toArray()) !!}
            </div>
        </div>


		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-5">
				{!! Form::submit('Save', array('class' => 'btn btn-default')) !!}
				<a href="{!! URL::route('recipe.index') !!}" class="btn btn-large">Cancel</a>
			</div>
		</div>            
	</div>
</div>
@stop
