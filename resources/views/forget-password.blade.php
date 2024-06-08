<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password</title>
</head>
<body>
    <main>
        <div>
            <div class="ms-auto me-auto mt-5" style="width: 500px">
                <div class="mt-5">
                    @if($errors->any())
                    <div class="col-12">
                        @foreach($errors->all() as $errors)
                        <div class="alert alert-danger"> {{ $errors }}</div>
                        @endforeach
                    </div>
                    @endif

                    @if(session()->has('error'))
                    <div class="alert alert-success"> {{  session('error') }}</div>
                    @endif

                    @if(session()->has('success'))
                    <div class="alert alert-success"> {{ session('success') }}</div>
                    @endif
                </div>


                <p>Setup New Password</p>
            <form action="{{ route('account.forget.password.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>