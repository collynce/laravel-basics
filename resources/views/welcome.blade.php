@extends('layouts.app')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Add Todo Task
                    </div>
                    <div class="card-body">
                        {!! Form::open(['method' => 'POST', 'route' => ['todos.store']]) !!}
                        <div class="content">
                            <div class="form-group">
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter task', 'required' => '']) !!}
                                <p class="help-block"></p>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <hr>
            <div class="mx-auto">
                <div class="card">
                    <div class="card-header">
                        Todo Tasks
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th>Created At</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($todos) > 0)
                                    @foreach ($todos as $todo)
                                        <tr>
                                            <td>{{$todo->id}}</td>
                                            <td>{{$todo->name}}</td>

                                            <td>
                                                @if($todo->status == false)
                                                    Incomplete
                                                @else
                                                    Completed
                                                @endif
                                            </td>
                                            <td>{{


                                                $todo->created_at

                                                }}</td>

                                            <td>
                                                {!! Form::open(
                                                    array(
                                                    'style' => 'display: inline-block;',
                                                    'method' => 'PUT',

                                                    'onsubmit' => "return confirm('".trans("You are about to update! Proceed?")."');",
                                                    'route' => ['todos.update', $todo->id])) !!}
                                                @if($todo->status == false)
                                                    {!! Form::submit(trans('Mark Complete'), array('class' => 'btn btn-xs btn-warning')) !!}
                                                @else
                                                    <p class="alert alert-success" role="alert">Completed</p>
                                                @endif

                                                {!! Form::close() !!}
                                            </td>
                                            <td> {!! Form::open(array(
                                    'style' => 'display: inline-block;',
                                    'method' => 'DELETE',
                                    $value = 'true',
                                    'onsubmit' => "return confirm('".trans("You are about to delete! Proceed?")."');",
                                    'route' => ['todos.destroy', $todo->id])) !!}
                                                {!! Form::submit(trans('Delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                                {!! Form::close() !!}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10">No entries available</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
