<nav class="navbar navbar-extend mt-3 mx-4">
    <div class="">
        <button class="btn btn-maincolor text-light" type="button" id="mainDropBtn" data-bs-toggle="dropdown">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>
        </button>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Calendar</a></li>
        <li><a class="dropdown-item" href="#">Event List</a></li>
        <li><a class="dropdown-item" href="#">Budget Tracker</a></li>
        <li><a class="dropdown-item" href="#">Notes</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-center" id="changeTrip" href="chooseProject.php">Add/Switch Trip</a></li>
        </ul> 
    </div>
    <div class="">
        <button class="btn btn-maincolor" data-bs-toggle="modal" data-bs-target="#signInModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-slash" viewBox="0 0 16 16">
            <path d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465m-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
            </svg>
        </button>
        <button class="btn btn-maincolor text-light d-inline-flex column-gap-2" id="searchBtn">
            <a class="link-light" data-bs-toggle="collapse" href="#collapseSearch">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
            </a>
            <div class="collapse collapse-horizontal" id="collapseSearch">
            <form><input type="search" class="form-control form-control-sm" placeholder="Search..."></form>
            </div>
        </button>
    </div>
</nav>