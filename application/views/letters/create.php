
    <h1 class="text-center">Entry of Letter Received </h1>
    <form method="post" action="<?php echo base_url('letters/store'); ?>">
        <div class="form-group">
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" id="title"><br>
        </div>
        <div class="form-group">
            <label for="sender">Sender:</label>
            <input class="form-control" type="text" name="sender" id="sender"><br>
        </div>
        <div class="form-group">
            <label for="receiver">Receiver:</label>
            <input class="form-control" type="text" name="receiver" id="receiver"><br>
        </div>
        <div class="form-group">
            <label for="issue_date">Letter Issue Date:</label>
            <input class="form-control" type="date" name="issue_date" id="issue_date"><br>
        </div>
        <div class="form-group">
            <label for="submission_deadline">Reply Submission Deadline:</label>
            <input class="form-control" type="date" name="submission_deadline" id="submission_deadline"><br>
        </div>
        <div class="form-group">
            <label for="assigned_officer">Assigned Officer:</label>
            <input class="form-control" type="text" name="assigned_officer" id="assigned_officer"><br>
        </div>

        <button class="btn btn-primary" type="submit">Save</button>
    </form>
