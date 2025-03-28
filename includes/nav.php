<?php
    require_once "login/login_view.inc.php";
    require_once "includes/tripPage/tripPage_view.inc.php";
?>

<nav class="navbar navbar-extend mt-3 mx-2 mx-md-4 d-flex flex-nowrap">
    <div class="">
        <button class="btn btn-maincolor text-light" type="button" id="mainDropBtn" data-bs-toggle="dropdown">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>
        </button>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Calendar</a></li>
        <li><a class="dropdown-item" href="eventsList.php">Event List</a></li>
        <li><a class="dropdown-item" href="#">Budget Tracker</a></li>
        <li><a class="dropdown-item" href="#">Notes</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-center" id="changeTrip" href="chooseTrip.php">Trips Manager</a></li>
        </ul> 
    </div>
    <span class="mx-auto fw-bold d-none d-sm-inline" id="navTitle"> 
        <?php 
        // if (isset($_SESSION["tripid"])) {
        //     echo '<a class="navbar-brand fs-2 text-maincolor" href="tripPage.php">';
        //     output_tripname();
        //     echo '</a>';
        // } else {
        //     echo '<a class="navbar-brand fs-2 text-maincolor" href="chooseTrip.php">';
        //     echo 'Welcome, ';
        //     output_username();
        //     echo '!';
        //     echo '</a>';
        // }
        ?>
    </span>
    <div class="d-inline-flex column-gap-1">
        <?php login_btn(); ?>
        <button class="btn btn-maincolor text-light" id="searchBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
            </a>
            <!-- <div class="collapse collapse-horizontal" id="collapseSearch">
            <form><input type="search" class="form-control form-control-sm" placeholder="Search..."></form> -->
            </div>
        </button>
    </div>
</nav>