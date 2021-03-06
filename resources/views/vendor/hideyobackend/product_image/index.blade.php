@extends('hideyo_backend::_layouts.default')

@section('main')

<div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
        @include('hideyo_backend::_partials.product-tabs', array('productImage' => true))
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

		<ol class="breadcrumb">
            <li><a href="/"><i class="entypo-folder"></i>Dashboard</a></li>
            <li><a href="{!! URL::route('product.index') !!}">Product</a></li>
            <li><a href="{!! URL::route('product.edit', $product->id) !!}">edit</a></li>
            <li><a href="{!! URL::route('product.edit', $product->id) !!}">{!! $product->title !!}</a></li>
            <li class="active">images</li>
		</ol>

		<a href="{{ URL::route('product.{productId}.images.create', $product->id) }}" class="btn btn-green btn-success pull-right">upload images<i class="entypo-plus"></i></a>

		<h2>Product <small>images</small></h2>
        <hr/>
        {!! Notification::showAll() !!}
        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="col-md-1">{{{ trans('table.image') }}}</th>
                    <th class="col-md-8">{{{ trans('table.file') }}}</th>
                    <th class="col-md-8">{{{ trans('table.rank') }}}</th>
                    <th class="col-md-3">{{{ trans('table.actions') }}}</th>
                </tr>
            </thead>
        </table>

        <script type="text/javascript">
            $(document).ready(function() {

                oTable = $('#datatable').DataTable({
                    "processing": true,
                    "serverSide": true,
                   "ajax": "{{ URL::route('product.{productId}.images.index', $product->id) }}",

                 columns: [
                        {data: 'thumb', name: 'thumb', orderable: false, searchable: false},
                        {data: 'file', name: 'file'},
                        {data: 'rank', name: 'rank'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]

                });
            });
        </script>
	</div>
</div>
@stop