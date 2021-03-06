@extends('Layouts.app')
@section('content')
<a href="{{ route('concept.show', array('id' => $concept->id)) }}">
    <span class="glyphicon glyphicon-circle-arrow-left"></span>
    Back to concept details
</a>
<div class="row">
    <div class="col-xs-12">
        <h1 class="page-header">Edit Concept</h1>
        <div class="col-xs-12 col-sm-8">

                    {{ Form::model($concept, array('method' => 'PUT', 'route' => array('concept.update', $concept->id))) }}

                    <div class="form-group">
                        {{ Form::label('name', 'Name:')}}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    
                    <div class="form-group">
                        {{ Form::label('description', 'Description:')}}
                        {{ Form::text('description', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('body', 'Body:')}}
                        {{ Form::textarea('body', null, ['class' => 'form-control']) }}
                    </div>
                    <script type="text/javascript">
                        CKEDITOR.replace( 'body' );
                    </script>

                    <div class="form-group">
                        {{ Form::label('stem', 'STEM Field:')}}
                        {{ Form::select('stem',
                            ['none' => 'None',
                            'science' => 'Science',
                            'technology' => 'Technology',
                            'engineering' => 'Engineering',
                            'mathematics' => 'Mathematics',
                            'primary' => 'Primary'], null,
                        ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('youtube', 'Youtube Link:')}}
                        {{ Form::text('youtube', null, ['class' => 'form-control']) }}
                    </div>

                    {{ Form::text('id', null, ['class' => 'form-control hidden']) }}

                    <div class="form-group">
                        {{ Form::submit('Update Concept', ['class' => 'btn btn-default form-control']) }}
                    </div>

                    {{ Form::close() }}
        </div>
    </div>
</div>
@stop