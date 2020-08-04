<div class="card m-3 animated bounceInLeft" style="width: 20rem;" id="{{ $task->id }}">
        <div class="card-header text-white bg-dark mb-3">
            <h5 class="card-title">{{ $task-> title}}
                <a style="float:right" title="Delete Task: {{ $task-> title}}" href="{{ route('task.delete', $task->id) }}"><i
                    style="padding-left:10px; font-size: 1.8em; color:white;" class="fas fa-trash-alt"></i></a>
                <a style="float:right" title="Edit Task: {{ $task-> title}}" href="{{ route('task.edit', $task->id) }}"><i
                        style="padding-left:10px; font-size: 1.8em; color:white;" class="far fa-edit"></i></a>
                <a style="float:right" title="Print Task: {{ $task-> title}}" href="{{ route('task.display', $task->id)}}"><i
                        style="padding-left:10px; font-size: 1.8em; color:white;" class="fas fa-print"></i></a>
            </h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Start Date: <span class="startDate">{{ $task->start_date}}</span></li>
            <li class="list-group-item">End Date: <span class="endDate">{{ $task->end_date}}</span></li>
            <li class="list-group-item">Created By: {{ $task->posted_by}}</li>

            <li class="status list-group-item {{ $task->status ? " text-success" : " text-danger" }}">Status: {{ $task->status ? " Completed" : " Started"}}
                @if($task->status == "0")
                    <a style="float:right" title="Mark {{ $task-> title}} as Complete Task" href="{{ route('task.complete', $task->id)}}"><i
                     style="padding-left:10px; font-size: 1.8em; color:black;" class="fas fa-lock-open"></i></a>
                 @else
                     <a style="float:right" title="Mark {{ $task-> title}} as Uncomplete Task" href="{{ route('task.notComplete', $task->id)}}"><i
                     style="padding-left:10px; font-size: 1.8em; color:black;" class="fas fa-lock"></i></a>
                 @endif
            </li>
            {{-- <li class="list-group-item">Category: {{ $task->category}}</li>
            <li class="list-group-item">Description: {{ $task->description}}</li> --}}
        </ul>
    </div>
