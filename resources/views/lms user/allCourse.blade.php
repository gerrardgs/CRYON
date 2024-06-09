<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Management System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    @include ('lms user.navbar')

    <div class="d-flex" style="height:100%">
        @include ('lms user.sidebar')

    <div class="content-container flex-grow-1" style="margin-top:70px; margin-left:200px; padding: 20px;">
        <div class="container">
            <h2 class="text-center pt-2">ALL COURSE</h2>
                    <section class="row">
                        <div class="col-md-6 mt-5 mb-4 d-flex flex-column align-items-center fw-bold fs-4">
                            <img src="./img/allCourse/2.png" alt="" class="img-fluid">
                            <a href="">Edukasi Crypto & Crypto Learning</a>
                        </div>
                        <div class="col-md-6 mt-5 mb-4 d-flex flex-column align-items-center fw-bold fs-4">
                            <img src="./img/allCourse/3.png" alt="" class="img-fluid">
                            <a href="">Crypto Research</a>
                        </div>
                    </section>

                    <section class="row">
                        <div class="col-md-6 mt-5 mb-4 d-flex flex-column align-items-center fw-bold fs-4">
                            <img src="./img/allCourse/4.png" alt="" class="img-fluid">
                            <a href="">Market Outlook & Calls</a>
                        </div>
                        <div class="col-md-6 mt-5 mb-4 d-flex flex-column align-items-center fw-bold fs-4">
                            <img src="./img/allCourse/5.png" alt="" class="img-fluid">
                            <a href="">Mentor Speech</a>
                        </div>
                    </section>

                    <section class="row">
                        <div class="col-md-6 mt-5 mb-4 d-flex flex-column align-items-center fw-bold fs-4">
                            <img src="./img/allCourse/6.png" alt="" class="img-fluid">
                            <a href="">Crypto Tools</a>
                        </div>
                        <div class="col-md-6 mt-5 mb-4 d-flex flex-column align-items-center fw-bold fs-4">
                            <img src="./img/allCourse/7.png" alt="" class="img-fluid">
                            <a href="">Blockchain Programming</a>
                        </div>
                    </section>

                    <section class="row">
                        <div class="col-md-6 mt-5 mb-4 d-flex flex-column align-items-center fw-bold fs-4">
                            <img src="./img/allCourse/8.png" alt="" class="img-fluid">
                            <a href="">Forum Diskusi</a>
                        </div>
                        <div class="col-md-6 mt-5 mb-4 d-flex flex-column align-items-center fw-bold fs-4">
                            <img src="./img/allCourse/9.png" alt="" class="img-fluid">
                            <a href="">Crypto News</a>
                        </div>
                    </section>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
