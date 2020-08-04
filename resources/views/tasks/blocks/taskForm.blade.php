    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="Title"
            placeholder="Enter Task Title"
            value = "{{ old('title') ?? ($task->title ?? '') }}"
            />
        @if ($errors->has('title'))
        <span class="text-danger">
            {{ $errors->first('title') }}
        </span>
        @endif
    </div>
    <div class="form-group">
        <label for="start_date">Start Date</label>
        <input type="date" class="form-control" id="start_date" name="start_date" aria-describedby="start_date"
        value = "{{ old('start_date') ?? ($task->start_date ?? '') }}"
        />
        @if ($errors->has('start_date'))
        <span class="text-danger">
            {{ $errors->first('start_date') }}
        </span>
        @endif
    </div>
    <div class="form-group">
        <label for="end_date">End Date</label>
        <input type="date" class="form-control" id="end_date" name="end_date" aria-describedby="end_date"
        value = "{{ old('end_date') ?? ($task->end_date ?? '') }}"
        />
        @if ($errors->has('end_date'))
        <span class="text-danger">
            {{ $errors->first('end_date') }}
        </span>
        @endif
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status" aria-describedby="status">
            <option value="">Please Select</option>
            <option name="Not-Achived" aria-describedby="Not-Achived" value="0" {{ isset($task->status) && !$task->status? 'selected' : '' }} >Not-Achived</option>
            <option name="Achived" aria-describedby="Achived" value="1" {{ isset($task->status) && $task->status? 'selected' : '' }}>Achived</option>
        </select>

        @if ($errors->has('status'))
        <span class="text-danger">
            {{ $errors->first('status') }}
        </span>
        @endif
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <textarea class="form-control" id="category" name="category" aria-describedby="category">{{ old('category') ?? ($task->category ?? '') }}</textarea>
        @if ($errors->has('category'))
        <span class="text-danger">
            {{ $errors->first('category') }}
        </span>
        @endif
    </div>
    <div class="form-group">
        <label for="description">Desctiption</label>
        <textarea class="form-control" id="description" name="description" aria-describedby="description">{{ old('description') ?? ($task->description ?? '') }}</textarea>
        @if ($errors->has('description'))
        <span class="text-danger">
            {{ $errors->first('description') }}
        </span>
        @endif
    </div>
