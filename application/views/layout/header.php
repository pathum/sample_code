<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
   
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav role="navigation">
    <div class="container">
        <div class="navbar-header">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            <a class="navbar-brand page-scroll" href="<?php echo base_url('index.php/grade/') ?>">School Management</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div>
            <ul class="nav navbar-nav">
                <li>
                    <a class="page-scroll" href="<?php echo base_url('index.php/grade/') ?>">Grade</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('index.php/schoolclass/') ?>">Class</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?php echo base_url('/index.php/student/') ?>">Student</a>
                </li>
            </ul>
        </div>

    </div>

</nav>
   
</body>
