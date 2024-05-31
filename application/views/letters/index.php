<?php $this->load->view('layout/header'); ?>

<div class="p-5">
    <h1 class="text-center">Notes and Letter Monitoring System.</h1>
    <h2 class="text-center"><?php echo ucfirst($page_name) ?> tasks are Shown below.</h2>
    <a class="btn btn-primary " href="<?php echo base_url('letters/create'); ?>">Create New Letter/Note</a>
</div>
<div>
    <!-- <table border="1" cellspacing="0" cellpadding="5" width="80%" align="center"> -->
    <table class="table">

        <thead class="text-center thead-dark sticky-top">
            <th>Action</th>
            <th>Serial No.</th>
            <th>Subject</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Issue Date</th>
            <th>Submission Deadline</th>
            <th>Days Remaining</th>
            <th>Status</th>
            <th>Assigned Officer</th>
        </thead>
        <?php
        $today = new DateTime();
        $i = 1;
        ?>

        <?php foreach ($letters as $letter) : ?>
            <?php
            $deadline = date_create(date('Y-m-d', strtotime($letter->submission_deadline)));
            $daysRemaining = (int) date_diff($today, $deadline)->format("%R%a days");
            $styleClass = '';
            $suffix = '<br> Days Remaining.';

            if ($daysRemaining < 0) {
                $styleClass = 'warning';
                // $suffix = "<br>  Deadline expired.";
            }

            if ($letter->task_status == 4) {
                $styleClass = 'success';
                $daysRemaining = 0;
            } ?>

            <tr class="<?php echo $styleClass; ?>">
                <td>
                    <span><a target="_blank" href="<?php echo base_url('letters/edit/' . $letter->id); ?>"><i class="bi bi-pencil-square">Edit</i></a></span>
                    <span><a href="<?php echo base_url('letters/delete/' . $letter->id); ?>"><i class="bi bi-trash">Delete</i></a></span>
                </td>
                <td><?php echo $i; ?></td>
                <td><?php echo $letter->title; ?></td>
                <td><?php echo $letter->sender; ?></td>
                <td><?php echo $letter->receiver; ?></td>
                <td><?php echo date('Y-m-d', strtotime($letter->issue_date)); ?></td>
                <td><?php echo date('Y-m-d', strtotime($letter->submission_deadline)); ?></td>
                <td><?php echo $daysRemaining; ?></td>
                <td><?php echo ucfirst($task_status[$letter->task_status]); ?></td>
                <td><?php echo $letter->assigned_officer; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>
<?php $this->load->view('layout/footer'); ?>