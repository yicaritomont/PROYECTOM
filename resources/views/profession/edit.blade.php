@extends('layouts.app')

@section('title', trans('words.Edit').' '.trans_choice('words.Profession',1).' "'.$type->name.'", ')

@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-md-offset-3">
            <a href="{{ route('professions.index') }}" class="btn btn-default"> <i class="fa fa-arrow-left"></i> @lang('words.Back')</a>
            <div class="panel panel-default">
                <div class="panel-header-form">
                    <h3 class="panel-titles">@lang('words.Edit') {{ $type->name }}</h3>                    
                </div>
                <div class="panel-body black-letter">
                    {!! Form::model($type,['method' => 'PUT', 'route' => [ 'professions.update', $type->id]]) !!}
                        @include('profession._form')

                        {!! Form::submit(trans('words.SaveChanges'), ['class' => 'btn btn-primary'])!!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection