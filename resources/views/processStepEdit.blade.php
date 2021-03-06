@extends('Layouts.app')
@section('content')
<a href="{{ route('process.show', array('id' => $processStep->process_id)) }}">
    <span class="glyphicon glyphicon-circle-arrow-left"></span>
    Back to process details
</a>
<div class="row">
    <div class="col-xs-12">
        <h1 class="page-header">{{$processName}} : Step {{$processStep->step}}</h1>
        <div class="col-xs-12 col-sm-8">

                    {{ Form::model($processStep, array('method' => 'PUT', 'route' => ['processStep.update', $processStep->id])) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Name:')}}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    
                    <div class="form-group">
                        {{ Form::label('description', 'Description:')}}
                        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                    </div>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'description' );
                    </script>

                    {{ Form::text('id', null, ['class' => 'form-control hidden']) }}
                    {{ Form::text('process_id', null, ['class' => 'form-control hidden']) }}

                    <div class="form-group">
                        {{ Form::submit('Update Process Step', ['class' => 'btn btn-default form-control']) }}
                    </div>

                    {{ Form::close() }}
                    {{ Form::label('addFile', 'Upload Files (6mb Limit):')}}
                    <form action="{{ url('processStep/edit/upload') }}"class="dropzone" id="addFile">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $processStep->id }}">
                    </form> 
                    <br>
        </div>
    </div>
    
</div>
@stop