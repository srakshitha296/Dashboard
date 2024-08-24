<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Sample Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MANTHAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4 mx-0">
        <div class="row mx-0">
            <div class="col-md-3">
                <!-- Nav tabs -->
                <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard"
                            role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="activities-tab" data-bs-toggle="tab" href="#activities" role="tab"
                            aria-controls="activities" aria-selected="false">Activities</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="activityTypes-tab" data-bs-toggle="tab" href="#activityTypes"
                            role="tab" aria-controls="activityTypes" aria-selected="false">Activity Types</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
                        aria-labelledby="dashboard-tab">
                        <h3>Dashboard</h3>
                        <p></p>
                    </div>
                    <div class="tab-pane fade" id="activities" role="tabpanel" aria-labelledby="activities-tab">
                        <h3>Activities</h3>
                        <p></p>
                    </div>
                    <div class="tab-pane fade" id="activityTypes" role="tabpanel"
                        aria-labelledby="activityTypes-tab">
                        <h3>Activity Types</h3>
                        <p></p>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3>Profile</h3>
                        <div class="text-wrap ">
                                <div class="space-y-4">
                                <p class="text-xl font-semibold">Name</p>
                                <p class="text-xl font-semibold">Email</p>
                                <p class="text-xl font-semibold">College</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
