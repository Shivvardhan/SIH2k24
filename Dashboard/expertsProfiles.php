<?php require './component/header.php';?>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>

    <div class="wrapper">
        <?php require './component/nav.php';?>
        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">Experts Profiles</a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header"
                                    style="display:flex;align-items:center;justify-content:space-between;">
                                    <div class="d-flex" style="gap:20px;align-items:center;">
                                        <h4 class="title">Experts List</h4>
                                        <!-- <p class="category">Here is a subtitle for this table</p> -->
                                        <button type="button" class="btn btn-primary">Add Expert</button>
                                    </div>

                                    <div class="d-flex" style="align-items:center;justify-content:flex-end;">
                                        <div class="input-group-addon">
                                            <i class="ti-search"></i>
                                        </div>
                                        <input type="text" class="form-control" id="searchExpert"
                                            placeholder="Search Experts" onkeyup="filterExperts()">
                                    </div>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-striped" style="text-align:center;">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;">ID</th>
                                                <th style="text-align:center;">Expert Name</th>
                                                <th style="text-align:center;">Skills</th>
                                                <th style="text-align:center;">Domain</th>
                                                <th style="text-align:center;">Status</th>
                                                <th style="text-align:center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="expertsTable">
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Dakota Rice</td>
                                                <td>$36,738</td>
                                                <td>Niger</td>
                                                <td>Oud-Turnhout</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Minerva Hooper</td>
                                                <td>$23,789</td>
                                                <td>Curaçao</td>
                                                <td>Sinaai-Waas</td>
                                                <td><button type="button" class="btn btn-success"><i
                                                            class="ti-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i
                                                            class="ti-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Pagination Controls -->
                            <nav aria-label="Page navigation" style="position:absolute;right:15px;">
                                <ul class="pagination" id="pagination" style="margin:0;">
                                    <!-- Pagination links will be dynamically created here -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <?php require './component/footer.php';?>
        </div>
    </div>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"77013b6bbf9f0e0c","version":"2022.11.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}'
        crossorigin="anonymous"></script>
</body>
<script src="./assets/js/new.js"></script>
<script>
function filterExperts() {
    // Get the search input value
    var input = document.getElementById("searchExpert");
    var filter = input.value.toLowerCase();

    // Get the table and the table rows
    var table = document.getElementById("expertsTable");
    var tr = table.getElementsByTagName("tr");

    // Loop through all rows and hide those that don't match the search query
    for (var i = 0; i < tr.length; i++) {
        // Get all columns in each row
        var tdName = tr[i].getElementsByTagName("td")[1]; // Name column
        var tdCountry = tr[i].getElementsByTagName("td")[3]; // Country column
        var tdCity = tr[i].getElementsByTagName("td")[4]; // City column

        if (tdName || tdCountry || tdCity) {
            var txtValueName = tdName.textContent || tdName.innerText;
            var txtValueCountry = tdCountry.textContent || tdCountry.innerText;
            var txtValueCity = tdCity.textContent || tdCity.innerText;

            // Check if any of the fields match the filter
            if (txtValueName.toLowerCase().indexOf(filter) > -1 ||
                txtValueCountry.toLowerCase().indexOf(filter) > -1 ||
                txtValueCity.toLowerCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// Number of rows per page
var rowsPerPage = 5;
var currentPage = 1;

// Function to display a specific page of the table
function displayPage(page) {
    var table = document.getElementById("expertsTable");
    var rows = table.getElementsByTagName("tr");
    var totalRows = rows.length;

    // Calculate the start and end row for the current page
    var startRow = (page - 1) * rowsPerPage;
    var endRow = Math.min(startRow + rowsPerPage, totalRows);

    // Hide all rows and display only the ones for the current page
    for (var i = 0; i < totalRows; i++) {
        rows[i].style.display = "none";
        if (i >= startRow && i < endRow) {
            rows[i].style.display = "";
        }
    }

    // Update the current page number
    currentPage = page;
    updatePagination(totalRows);
}

// Function to update pagination controls
function updatePagination(totalRows) {
    var pagination = document.getElementById("pagination");
    pagination.innerHTML = ""; // Clear existing pagination

    var totalPages = Math.ceil(totalRows / rowsPerPage);

    // Create "Previous" button
    var prevLi = document.createElement("li");
    prevLi.className = (currentPage === 1) ? "disabled" : "";
    var prevA = document.createElement("a");
    prevA.href = "#";
    prevA.innerHTML = "Previous";
    prevA.onclick = function() {
        if (currentPage > 1) {
            displayPage(currentPage - 1);
        }
    };
    prevLi.appendChild(prevA);
    pagination.appendChild(prevLi);

    // Create pagination links
    for (var i = 1; i <= totalPages; i++) {
        var li = document.createElement("li");
        li.className = (i === currentPage) ? "active" : "";
        var a = document.createElement("a");
        a.href = "#";
        a.innerHTML = i;
        a.onclick = (function(page) {
            return function() {
                displayPage(page);
            };
        })(i);

        li.appendChild(a);
        pagination.appendChild(li);
    }

    // Create "Next" button
    var nextLi = document.createElement("li");
    nextLi.className = (currentPage === totalPages) ? "disabled" : "";
    var nextA = document.createElement("a");
    nextA.href = "#";
    nextA.innerHTML = "Next";
    nextA.onclick = function() {
        if (currentPage < totalPages) {
            displayPage(currentPage + 1);
        }
    };
    nextLi.appendChild(nextA);
    pagination.appendChild(nextLi);
}

// Initialize the pagination on page load
window.onload = function() {
    displayPage(1); // Show the first page
};
</script>

<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/bootstrap-checkbox-radio.js"></script>

<script src="assets/js/chartist.min.js"></script>

<script src="assets/js/bootstrap-notify.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<script src="assets/js/paper-dashboard.js"></script>

<script src="assets/js/demo.js"></script>
<script src="assets/js/jquery.sharrre.js"></script>

</html>