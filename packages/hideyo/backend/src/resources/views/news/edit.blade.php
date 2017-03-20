@extends('admin._layouts.default')

@section('main')

<div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
        @include('admin._partials.news-tabs', array('newsEdit' => true))
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <ol class="breadcrumb">
            <li><a href="/"><i class="entypo-folder"></i>Dashboard</a></li>
            <li><a href="{!! URL::route('admin.news.index') !!}">News</a></li>
            <li><a href="{!! URL::route('admin.news.edit', $news->id) !!}">edit</a></li>
            <li><a href="{!! URL::route('admin.news.edit', $news->id) !!}">{!! $news->title !!}</a></li>
        </ol>

        <h2>News <small>edit</small></h2>
        <hr/>
        {!! Notification::showAll() !!}


        {!! Form::model($news, array('method' => 'put', 'route' => array('admin.news.update', $news->id), 'files' => true, 'class' => 'form-horizontal form-groups-bordered validate')) !!}
            <input type="hidden" name="_token" value="{!! Session::getToken() !!}">

            <div class="form-group">
                {!! Form::label('news_group_id', 'Group', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-5">
                    {!! Form::select('news_group_id', [null => '--select--'] + $groups, null, array('class' => 'form-control')) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('title', 'Title', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-5">
                    {!! Form::text('title', null, array('class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('short_description', 'Short description', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-5">
                    {!! Form::text('short_description', null, array('class' => 'form-control', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
                </div>
            </div>





            <div class="form-group">
                {!! Form::label('news', 'Content', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-9">
                    {!! Form::textarea('content', null, array('class' => 'form-control ckeditor', 'data-validate' => 'required', 'data-message-required' => 'This is custom message for required field.')) !!}
                </div>
            </div>


            <div class="form-group">
                {!! Form::label('published_at', 'Published at', array('class' => 'col-sm-3 control-label')) !!}
                <div class="col-sm-5">
                    {!! Form::text('published_at', null, array('class' => 'datepicker form-control', 'data-sign' => '&euro;')) !!}
                </div>
            </div>



            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-5">
                    {!! Form::submit('Save', array('class' => 'btn btn-default')) !!}
                    <a href="{!! URL::route('admin.news.index') !!}" class="btn btn-large">Cancel</a>
                </div>
            </div>            
    </div>
</div>
@stop