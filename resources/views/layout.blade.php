HEADER
<div>
    <h3><a href="<?php echo url('/'); ?>">Homepage</a></h3>
    <div>
        <a href="<?php echo url()->route('tasks.create'); ?>">Create task</a>
    </div>
</div>
<hr>
@yield('content')
<hr>
FOOTER
