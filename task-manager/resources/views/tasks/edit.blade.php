<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Edit Task</h2>
    
    @if($error->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    


    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Title</label>
            <input type="text"
                   name="title"
                   value="{{ $task->title }}"
                   class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description"
                      class="form-control"
                      required>{{ $task->description }}</textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="pending"
                    {{ $task->status == 'pending' ? 'selected' : '' }}>
                    Pending
                </option>
                <option value="completed"
                    {{ $task->status == 'completed' ? 'selected' : '' }}>
                    Completed
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Update Task
        </button>

        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
            Cancel
        </a>

    </form>
</div>

</body>
</html>
