<div class="container mt-4">
    <h2 class="mb-4">Task Manager</h2>

    <form method="GET" action="{{ route('tasks.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text"
                   name="search"
                   class="form-control"
                   placeholder="Search by title or status"
                   value="{{ request('search') }}">
            
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    Search
                </button> 
            </div>
        </div>  
    </form>     
                    
    <a href="{{ route('tasks.create') }}" class="btn btn-success mb-3">
        Create Task
    </a>

    @foreach($tasks as $task)
    <div class="card mb-3">
        <div class="card-body">

            <h5>{{ $task->title }}</h5>
            <p>{{ $task->description }}</p>
            <small>Created: {{ $task->created_at->format('M d, Y') }}</small>

            <br><br>

            {{-- Status Badge --}}
            <span class="badge
                {{ $task->status == 'completed' ? 'badge-success' : 'badge-warning' }}">
                {{ ucfirst($task->status) }}
            </span>

            <br><br>

            {{-- Edit Button --}}
            <a href="{{ route('tasks.edit', $task->id) }}"
               class="btn btn-warning btn-sm">
               Edit
            </a>

            {{-- Delete Button --}}
            <form action="{{ route('tasks.destroy', $task->id) }}"
                  method="POST"
                  style="display:inline;">
                @csrf
                @method('DELETE')

                <button type="submit"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Are you sure you want to delete this task?')">
                    Delete
                </button>
            </form>

            {{-- Status Toggle Button --}}
            <form action="{{ route('tasks.update', $task->id) }}"
                  method="POST"
                  style="display:inline;">
                @csrf
                @method('PUT')

                <input type="hidden" name="title" value="{{ $task->title }}">
                <input type="hidden" name="description" value="{{ $task->description }}">
                <input type="hidden" name="status"
                    value="{{ $task->status == 'completed' ? 'pending' : 'completed' }}">

                <button type="submit" class="btn btn-secondary btn-sm">
                    Mark as
                    {{ $task->status == 'completed' ? 'Pending' : 'Completed' }}
                </button>
            </form>

        </div>
    </div>
    @endforeach

    <div class="mt-3">
        {{ $tasks->links() }}
    </div>    

</div>

