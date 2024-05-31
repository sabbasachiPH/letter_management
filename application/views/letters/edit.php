<?php $this->load->view('layout/header'); ?>
<h1 class="text-center">Edit Page of Letter</h1>
<?php
// echo "<pre>";
// print_r($letter);

// die;
?>
<form method="post" action="<?php echo base_url('letters/update'); ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $letter->id; ?>">
    <div class="form-group">
        <label for="title">Title:</label>
        <input class="form-control" type="text" name="title" id="title" value="<?php echo $letter->title; ?>"><br>
    </div>
    <div class="form-group">
        <label for="sender">Sender:</label>
        <input class="form-control" type="text" name="sender" id="sender" value="<?php echo $letter->sender; ?>"><br>
    </div>
    <div class="form-group">
        <label for="receiver">Receiver:</label>
        <input class="form-control" type="text" name="receiver" id="receiver" value="<?php echo $letter->receiver; ?>"><br>
    </div>
    <div class="form-group">
        <label for="issue_date">Issue Date:</label>
        <input class="form-control" type="date" name="issue_date" id="issue_date" value="<?php echo htmlspecialchars(date('Y-m-d', strtotime($letter->issue_date))); ?>"><br>
    </div>
    <div class="form-group">
        <label for="submission_deadline">Reply Submission Deadline:</label>
        <input class="form-control" type="date" name="submission_deadline" id="submission_deadline" value="<?php echo date('Y-m-d', strtotime($letter->submission_deadline)); ?>"><br>
    </div>

    <div class="form-group">
        <label for="task_status">Task Status:</label>
        <?php echo form_dropdown('task_status', $task_status, $letter->task_status, 'class="form-control"'); ?>
        <!-- <input class="form-control" type="text" name="task_status" id="task_status" value="<?php //echo $letter->task_status; 
                                                                                                ?>"><br> -->
    </div>
    <div class="form-group">
        <label for="assigned_officer">Assigned Officer:</label>
        <input class="form-control" type="text" name="assigned_officer" id="assigned_officer" value="<?php echo $letter->assigned_officer; ?>"><br>
    </div>

    <button class="btn btn-info" type="submit">Update</button>
</form>

<?php $this->load->view('layout/footer'); ?>