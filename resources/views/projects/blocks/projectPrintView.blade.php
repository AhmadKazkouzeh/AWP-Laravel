<div class="row">
    <div class="col-md-12">
        <div class="alert alert-secondary m-4" role="alert">
           <div class="h3 text-center">You are currently viewing: {{ $project->title}}</div>
        </div>
        <table class="table">
            <tr>
                <th scope="col">Start Date: </th>
                <td> {{ $project->start_date}}</td>
            </tr>
            <tr>
                <th scope="col">End Date: </th>
                <td>{{ $project->end_date}}</td>
            </tr>
            <tr>
                <th scope="col">Status: </th>
                <td class="{{ $project->status ? " text-success" : " text-danger" }}">{{ $project->status ? " Completed" : "Started"}}</td>
            </tr>
            <tr>
                <th scope="col">Description: </th>
                <td>{{ $project->about}}</td>
            </tr>
            <tr>
                <th scope="col">Created By: </th>
                <td>{{ $project->posted_by}}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>
