@extends('layout')
@section('content')
    <form action="<?php echo route('tasks.store') ?>" method="post">
        <h4>Create task</h4>
        <?php echo csrf_field(); ?>
        <input type="text" name="task_title">
        <input type="submit" value="OK">
    </form>
@endsection
