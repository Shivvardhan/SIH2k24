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
                        <a class="navbar-brand" href="#">Expert Matching</a>
                    </div>
                </div>
            </nav>
            <div class="content" style="padding-bottom:0;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Interview Board Subjects</h4>
                                </div>
                                <div class="content" style="padding-top:0;">
                                    <form action="./matchingResult.php">
                                        <!-- <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-input"
                                                        placeholder="Computer Science Engineering, Electrical Engineering " />
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="row" style="padding-bottom:10px;">
                                            <div class="col-md-12 " style="display:ruby;gap:10px;">
                                                <div class="d-flex" style="align-items:center;gap:5px;">
                                                    <input type="checkbox" id="cse1" style="margin-top:1px;" />
                                                    <label for="cse1" style="margin:0;"> Computer Science &
                                                        Engineering</label>
                                                </div>
                                                <div class="d-flex" style="align-items:center;gap:5px;">
                                                    <input type="checkbox" id="cse2" style="margin-top:1px;" />
                                                    <label for="cse2" style="margin:0;"> Computer Science &
                                                        Engineering</label>
                                                </div>

                                                <div class="d-flex" style="align-items:center;gap:5px;">
                                                    <input type="checkbox" id="cse3" style="margin-top:1px;" />
                                                    <label for="cse3" style="margin:0;"> Computer Science &
                                                        Engineering</label>
                                                </div>
                                                <div class="d-flex" style="align-items:center;gap:5px;">
                                                    <input type="checkbox" id="cse4" style="margin-top:1px;" />
                                                    <label for="cse4" style="margin:0;"> Computer Science &
                                                        Engineering</label>
                                                </div>
                                                <div class="d-flex" style="align-items:center;gap:5px;">
                                                    <input type="checkbox" id="cse5" style="margin-top:1px;" />
                                                    <label for="cse5" style="margin:0;"> Computer Science &
                                                        Engineering</label>
                                                </div>
                                                <div class="d-flex" style="align-items:center;gap:5px;">
                                                    <input type="checkbox" id="cse6" style="margin-top:1px;" />
                                                    <label for="cse6" style="margin:0;"> Computer Science &
                                                        Engineering</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Interview Venue</label>
                                                    <input type="text" class="form-control border-input"
                                                        placeholder="Bhopal" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Interview Time Duration</label>
                                                    <input type="text" class="form-control border-input"
                                                        placeholder="10 A.M. - 2 P.M." />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Interview Date</label>
                                                    <input type="date" class="form-control border-input" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="header"
                                                style="display:flex;align-items:center;justify-content:space-between;">
                                                <div class="d-flex" style="gap:20px;align-items:center;">
                                                    <h4 class="title">Candidates List</h4>
                                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCandidateModal">Add Candidate</button>                                                </div>

                                                <div class="d-flex"
                                                    style="align-items:center;justify-content:flex-end;">
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
                                                            <th style="text-align:center;">SNo.</th>
                                                            <th style="text-align:center;">Candidate Name</th>
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

                                        <div class="text-center" style="padding-top:40px;padding-bottom:20px; ">
                                            <button type="submit" class="btn btn-primary">
                                                Expert Profile Matching
                                            </button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require './component/footer.php';?>
        </div>
    </div>

   <!-- Add Candidate Modal Start -->
<div class="modal fade" id="addCandidateModal" tabindex="-1" role="dialog" aria-labelledby="addCandidateModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addCandidateModalLabel">Add New Candidate</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="addCandidateForm">
                    <h5>Personal Information</h5>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contactNumber">Contact Number</label>
                            <input type="tel" class="form-control" id="contactNumber" placeholder="Enter contact number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dateOfBirth">Date of Birth</label>
                            <input type="date" class="form-control" id="dateOfBirth">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="currentAddress">Current Address</label>
                        <textarea class="form-control" id="currentAddress" rows="2" placeholder="Enter current address"></textarea>
                    </div>

                    <h5>Educational Background</h5>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="highestEducation">Highest Level of Education</label>
                            <select class="form-control" id="highestEducation">
                                <option>High School</option>
                                <option>Associate's Degree</option>
                                <option>Bachelor's Degree</option>
                                <option>Master's Degree</option>
                                <option>Doctorate</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="institution">Name of Institution</label>
                            <input type="text" class="form-control" id="institution" placeholder="Enter institution name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fieldOfStudy">Field of Study/Major</label>
                            <input type="text" class="form-control" id="fieldOfStudy" placeholder="Enter field of study">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="degreeEarned">Degree/Diploma Earned</label>
                            <input type="text" class="form-control" id="degreeEarned" placeholder="Enter degree earned">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="graduationDate">Graduation Date</label>
                            <input type="date" class="form-control" id="graduationDate">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gpa">GPA/Percentage</label>
                            <input type="text" class="form-control" id="gpa" placeholder="Enter GPA or percentage">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="relevantCoursework">Relevant Coursework</label>
                        <textarea class="form-control" id="relevantCoursework" rows="2" placeholder="Enter relevant coursework"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="academicAchievements">Academic Achievements/Honors</label>
                        <textarea class="form-control" id="academicAchievements" rows="2" placeholder="Enter academic achievements or honors"></textarea>
                    </div>

                    <h5>Professional Experience</h5>
                    <div class="form-group">
                        <label for="workExperience">Work Experience</label>
                        <textarea class="form-control" id="workExperience" rows="4" placeholder="Enter work experience details"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="achievements">Achievements and Accomplishments</label>
                        <textarea class="form-control" id="achievements" rows="3" placeholder="Enter achievements and accomplishments"></textarea>
                    </div>

                    <h5>Skills and Qualifications</h5>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="technicalSkills">Technical Skills</label>
                            <textarea class="form-control" id="technicalSkills" rows="3" placeholder="Enter technical skills"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="softSkills">Soft Skills</label>
                            <textarea class="form-control" id="softSkills" rows="3" placeholder="Enter soft skills"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="languages">Language Proficiencies</label>
                        <input type="text" class="form-control" id="languages" placeholder="Enter language proficiencies">
                    </div>
                    <div class="form-group">
                        <label for="certifications">Certifications</label>
                        <textarea class="form-control" id="certifications" rows="2" placeholder="Enter certifications"></textarea>
                    </div>
                    <div class="form-group">
    <label for="certificationUpload">Upload Certification</label>
    <input type="file" class="form-control-file" id="certificationUpload">
</div>
                    <div class="form-group">
                        <label for="licenses">Relevant Licenses</label>
                        <textarea class="form-control" id="licenses" rows="2" placeholder="Enter relevant licenses"></textarea>
                    </div>

                    <h5>Additional Information</h5>
                    <div class="form-group">
                        <label for="reasonForApplying">Reason for Applying</label>
                        <textarea class="form-control" id="reasonForApplying" rows="2" placeholder="Enter reason for applying"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="careerGoals">Career Goals</label>
                        <textarea class="form-control" id="careerGoals" rows="2" placeholder="Enter career goals"></textarea>
                    </div>

                    <h5>Extracurricular Activities</h5>
                    <div class="form-group">
                        <label for="volunteerWork">Volunteer Work</label>
                        <textarea class="form-control" id="volunteerWork" rows="2" placeholder="Enter volunteer work details"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="hobbies">Relevant Hobbies or Interests</label>
                        <textarea class="form-control" id="hobbies" rows="2" placeholder="Enter relevant hobbies or interests"></textarea>
                    </div>

                    <h5>Portfolio and Work Samples</h5>
                    <div class="form-group">
                        <label for="portfolioLinks">Portfolio Links</label>
                        <textarea class="form-control" id="portfolioLinks" rows="2" placeholder="Enter links to online portfolios"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="resumeUpload">Upload Resume</label>
                        <input type="file" class="form-control-file" id="resumeUpload">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addCandidate()">Add Candidate</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Candidate Modal End -->
 
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