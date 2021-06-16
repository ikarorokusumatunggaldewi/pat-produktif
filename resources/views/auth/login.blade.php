<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Toko Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            {{-- Error Alert --}}
                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('error')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Toko Buku Kita</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{url('login')}}" method="POST" id="logForm">
                                    @csrf
                                    <div class="form-group">
                                        @error('login_gagal')
                                        {{-- <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                        </span> --}}
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                            <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @enderror
                                        <input class="form-control py-4" id="inputEmailAddress" name="username" type="text" placeholder="Username" />
                                        @if($errors->has('username'))
                                        <span class="error">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Password" />
                                        @if($errors->has('password'))
                                        <span class="error">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-control input-lg" name="akses" value="akses" required>
                                            <option>Admin</option>
                                            <option>Manager</option>
                                            <option>Kasir</option>
                                        </select>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        {{-- <a class="small" href="#">Forgot Password?</a> --}}
                                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small">
                                    {{-- <a href="{{url('register')}}">Belum Punya Akun? Daftar!</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>

</html>