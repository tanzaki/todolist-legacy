@extends('layout')
@section('content')
    <div>
        <?php
        use Illuminate\Database\Eloquent\Collection;
        /** @var Collection|array $tasksItems */
        echo $tasksItems;
        ?>
    </div>
@endsection
