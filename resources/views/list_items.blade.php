@extends('layout')
@section('content')
    <div>
        <?php
        use App\Task;
        use Illuminate\Database\Eloquent\Collection;
        /** @var Collection|array $tasksItems */
        //TasksItems is special Object, We can foreach it as array
        /** @var Task $taskItem */
        foreach ($tasksItems as $taskItem) {
            echo "<div>$taskItem</div>";
        }
        ?>
    </div>
@endsection
