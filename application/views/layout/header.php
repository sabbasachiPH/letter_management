<!DOCTYPE html>
<html>

<head>
    <title>Create Letter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            max-width: 80%;
            margin: 0 auto;
            overflow-x: scroll;
            white-space: nowrap;
        }

        .warning {
            background-color: rgba(255, 0, 0, 0.7);
            color: white;
        }

        .success {
            background-color: rgba(0, 255, 0, 0.8);

        }

        .navbar {
            background-color: #81B1CE;

        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top">
        <a class="btn btn-secondary" href="<?php echo base_url('letters/all_task'); ?>">All Task</a>
        <a class="btn btn-secondary" href="<?php echo base_url('letters'); ?>">Incomplete Task</a>
        <a class="btn btn-secondary" href="<?php echo base_url('letters/completed_task'); ?>">Completed Task</a>

    </nav>