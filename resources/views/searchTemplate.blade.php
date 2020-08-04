<div class="search_bar animated bounceInRight">
    <form class="form-inline">
        <div class="input-group m-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
            </div>
            <input type="text" id="title" class="form-control" onkeyup="search()" placeholder="Title" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <label for="status">Status</label> <select onchange="search()" id="status" class="form-control m-3" name="status">
            <option value="">Please Select</option>
            <option value="Started">Started</option>
            <option value="Completed">Completed</option>
        </select>
        <label for="sDate">Start Date</label><input onchange="search()" type="date" class="form-control m-3" id="sDate" name="start_date"
            aria-describedby="sDate">
            <label for="eDate">End Date</label><input onchange="search()" type="date" class="form-control m-3" id="eDate" name="end_date"
            aria-describedby="eDate">
    </form>
</div>
