<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hqm - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('hqmaccount.hqmloginsubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Hqm - Login</h1>
                </div>
                    
                <div class="card_body">
                    <div class="mb-3">
                        <label for="hqmemail" class="form-label">Email</label>
                        <input type="email" class="form-control" 
                            id="hqmemail" name="hqmemail"
                            placeholder="HqmEmail@example.com"/>
                            @error('hqmemail')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <span id ="email-error"></span>
                    </div>
                    <div class="mb-3">
                        <label for="hqmpass" class="form-label">Password</label>
                        <input type="password" class="form-control" 
                            id="hqmpass" name="hqmpass"
                            placeholder="xxxx"/>
                            @error('hqmpass')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <span id ="email-error"></span>
                    </div>

                </div>

                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                    @if (Session::has('hqm-error'))
                        <div class="alert alert-danger">
                            {{Session::get('hqm-error')}}
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </section>
</body>
</html>
