<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Management System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @include ('lms user.header')

    <div class="d-flex">
        @include ('lms user.sidebar')

    <div class="content-container flex-grow-1" style="height: auto">
        <div class="container">
            <h2 class="text-center">ALL COURSE</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex flex-column align-items-center">
                            <img src="https://placehold.jp/300x200.png" alt="" class="img-fluid">
                            <a href="/edukasi">Edukasi Crypto & Crypto Learning</a>
                        </div>
                        <div class="col-md-6 mb-4 d-flex flex-column align-items-center">
                            <img src="https://placehold.jp/300x200.png" alt="" class="img-fluid">
                            <a href="/research">Crypto Research</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex flex-column align-items-center">
                            <img src="https://placehold.jp/300x200.png" alt="" class="img-fluid">
                            <a href="market">Market Outlook & Calls</a>
                        </div>
                        <div class="col-md-6 mb-4 d-flex flex-column align-items-center">
                            <img src="https://placehold.jp/300x200.png" alt="" class="img-fluid">
                            <a href="/mentor">Mentor Speech</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex flex-column align-items-center">
                            <img src="https://placehold.jp/300x200.png" alt="" class="img-fluid">
                            <a href="/curency">Cryptocurrency Price</a>
                        </div>
                        <div class="col-md-6 mb-4 d-flex flex-column align-items-center">
                            <img src="https://placehold.jp/300x200.png" alt="" class="img-fluid">
                            <a href="/tools">Crypto Tools</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex flex-column align-items-center">
                            <img src="https://placehold.jp/300x200.png" alt="" class="img-fluid">
                            <a href="/blockchain">Blockchain Programming</a>
                        </div>
                        <div class="col-md-6 mb-4 d-flex flex-column align-items-center">
                            <img src="https://placehold.jp/300x200.png" alt="" class="img-fluid">
                            <a href="/forum">Forum Diskusi</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
