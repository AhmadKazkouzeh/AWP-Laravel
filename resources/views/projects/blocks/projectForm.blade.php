@csrf
<div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title"
            placeholder="Enter Project Title" value="{{ old('title') ?? ($project->title ?? '') }}" />
            @if ($errors->has('title'))
            <span class="text-danger">
                {{ $errors->first('title') }}
            </span>
            @endif
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" aria-describedby="start_date"
            value="{{ old('start_date') ?? ($project->start_date ?? '') }}" />
            @if ($errors->has('start_date'))
            <span class="text-danger">
                {{ $errors->first('start_date') }}
            </span>
            @endif
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" aria-describedby="end_date"
            value="{{ old('end_date') ?? ($project->end_date ?? '') }}" />
            @if ($errors->has('end_date'))
            <span class="text-danger">
                {{ $errors->first('end_date') }}
            </span>
            @endif
        </div>
        <div class="form-group">
            <label for="about">Desctiption</label>
            <textarea class="form-control" id="about" name="about" aria-describedby="about">{{ old('about') ?? ($project->about ?? '') }}</textarea>
            @if ($errors->has('about'))
            <span class="text-danger">
                {{ $errors->first('about') }}
            </span>
            @endif
        </div>
