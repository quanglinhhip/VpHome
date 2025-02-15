<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="{{ asset('theme/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('theme/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('theme/admin/css/customize.css') }}" rel="stylesheet"> --}}

    <style>
        .error-message{
    color: red;
    font-size: 12px;
    margin-top: 10px;
    font-style: italic;
}

    </style>

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to IN+</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app
                    views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}
                    <form method="POST" class="m-t" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                value="{{ old('email') }}">
                            {{-- @if ($errors->has('email'))
                                <span class="error-message">* {{ $errors->first('email') }}</span>
                            @endif --}}
                            @error('email')
                                <span class="text-danger error-message"> * {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            {{-- @if ($errors->has('password'))
                                <span class="error-message"> *{{ $errors->first('password') }}</span>
                            @endif --}}
                            @error('password')
                                <span class="text-danger error-message"> * {{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>


                        <a href="#">
                            <small>Forgot password?</small>
                        </a>


                    </form>
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>

            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
                <small>© 2014-2015</small>
            </div>
        </div>
    </div>

</body>

</html>
