<form>
    <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="inputName" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
        <label for="inputDate">Date</label>
        <input type="text" class="form-control" id="inputDate" placeholder="Enter date" name="date">
    </div>

    <div class="form-group">
        <label for="inputResolutionDate">Resolution Date</label>
        <input type="text" class="form-control" id="inputResolutionDate" placeholder="Enter resolution date" name="resolution_date">
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" id="status" name="status">
            <option>Not started</option>
            <option>In progress</option>
            <option>Done</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Details</label>
        <textarea class="form-control" name="details" id="details" cols="30" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>