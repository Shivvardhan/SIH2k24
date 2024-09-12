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
                        <a class="navbar-brand" href="#">Matching Result</a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12" style="text-align:center;">
                            <div class="card">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;font-weight:700;">#</th>
                                            <th style="text-align:center;font-weight:700;">Expert Name</th>
                                            <th style="text-align:center;font-weight:700;">Matching Score</th>
                                            <th style="text-align:center;font-weight:700;">Profile Score</th>
                                            <th style="text-align:center;font-weight:700;">Relevancy Score</th>
                                        </tr>
                                    </thead>
                                    <tbody id="expertsTable" style="text-align:center;">
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>77%</td>
                                            <td>60%</td>
                                            <td>65.6%</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>72%</td>
                                            <td>56%</td>
                                            <td>62.5%</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>72%</td>
                                            <td>56%</td>
                                            <td>62.5%</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>72%</td>
                                            <td>56%</td>
                                            <td>62.5%</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>72%</td>
                                            <td>56%</td>
                                            <td>62.5%</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>72%</td>
                                            <td>56%</td>
                                            <td>62.5%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="./expertsPanel.php"><button class="btn btn-primary">Best Matched
                                    Experts</button></a>
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