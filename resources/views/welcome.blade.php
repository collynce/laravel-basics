<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{asset('js/app.js')}}" defer></script>

        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>

        <div class="container">
            {!! Form::open(['method' => 'POST', 'route' => ['todos.store']]) !!}
            <div class="content">
                {!! Form::label('todo', 'Todo Name', ['class' => 'control-label']) !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Todo Name', 'required' => '']) !!}
                <p class="help-block"></p>
                <button class="btn btn-primary">jjjjjj</button>
            </div>
            {!! Form::close() !!}
            <div class="tables">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First</th>
                            <th scope="col">First</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($todos as $todo)
                    <tr>
                        <td scope="row">{{$todo->name}}</td>
                        <td scope="row">{{$todo->status}}</td>
                        <td scope="row">
{{--                            <a href="{{ route('todos.update',[$todo->id]) }}" class="btn btn-xs btn-primary">Complete</a>--}}
                            {!! Form::open(
                                array(
                                'style' => 'display: inline-block;',
                                'method' => 'PUT',
                                'onsubmit' => "return confirm('".trans("You are about to update! Proceed?")."');",
                                'route' => ['todos.update', $todo->id])) !!}
                            {!! Form::submit(trans('Completed'), array('class' => 'btn btn-xs btn-success')) !!}
                            {!! Form::close() !!}
                            {!! Form::open(array(
                                'style' => 'display: inline-block;',
                                'method' => 'DELETE',
                                $value = 'true',
                                'onsubmit' => "return confirm('".trans("You are about to delete! Proceed?")."');",
                                'route' => ['todos.destroy', $todo->id])) !!}
                            {!! Form::submit(trans('Delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                            {!! Form::close() !!}
                        </td>

                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </body>
</html>
