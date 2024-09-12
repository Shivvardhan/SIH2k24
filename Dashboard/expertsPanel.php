<?php require './component/header.php';?>
<style>
/* Expert Panels Cards CSS Start */
@import url('https://fonts.googleapis.com/css2?family=Red+Rose:wght@300;400;600&display=swap');

.card {
    width: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 30px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}

.card img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
}

.card .details {
    margin: 10px;
}

.card .details h2 {
    font-size: 25px;
    font-weight: 600;
    margin: 10px 0px;
}

.card .details p {
    font-size: 15px;
    text-transform: uppercase;
    font-weight: 300;
    margin: 0;
}

#info {
    font-size: 14px;
}

/* Expert Panels Cards CSS End */
</style>

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
                        <a class="navbar-brand" href="#">Interview Experts Panel</a>
                    </div>
                </div>
            </nav>
            <div class="content" style="padding-top:50px;text-align:center">
                <div class="row d-flex" style="gap:30px;justify-content:center;">
                    <div class="card">
                        <img src="./assets/img/expert.png" alt="Image">
                        <div class="details">
                            <h2>Stevie Blight</h2>
                            <p>Director</p>
                        </div>
                        <p id="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                    <div class="card">
                        <img src="./assets/img/expert.png" alt="Image">
                        <div class="details">
                            <h2>Stevie Blight</h2>
                            <p>Director</p>
                        </div>
                        <p id="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                    <div class="card">
                        <img src="./assets/img/expert.png" alt="Image">
                        <div class="details">
                            <h2>Stevie Blight</h2>
                            <p>Director</p>
                        </div>
                        <p id="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>
                <div class="row d-flex" style="padding-top:20px;gap:30px;justify-content:center;">
                    <div class="card">
                        <img src="./assets/img/expert.png" alt="Image">
                        <div class="details">
                            <h2>Stevie Blight</h2>
                            <p>Director</p>
                        </div>
                        <p id="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                    <div class="card">
                        <img src="./assets/img/expert.png" alt="Image">
                        <div class="details">
                            <h2>Stevie Blight</h2>
                            <p>Director</p>
                        </div>
                        <p id="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>
                <button class="btn btn-primary" style="margin-top:30px;">Schedule Interview</button>
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