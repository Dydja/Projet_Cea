
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/project_management/vertical/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 12:02:48 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://crm-admin-dashboard-template.multipurposethemes.com/images/favicon.ico">

    <title>CRMi - Log in </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('vertical/src/css/vendors_css.css') }}">

	<!-- Style-->
	<link rel="stylesheet" href="{{ asset('vertical/src/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('vertical/src/css/skin_color.css') }}">


</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url({{ asset('images/auth-bg/bg-1.jpg') }})">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Conexion</h2>

							</div>
							<div class="p-40">
								<form  action="{{ route('login') }}" method="post">
                                     <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" role="alert" />
                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    @csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="email" class="form-control ps-15 bg-transparent" placeholder="Identifiant" name="email" :value="old('email')" required autofocus>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password" name="password"  required autocomplete="current-password" >
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
										 <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
										 <label for="remember_me" class="inline-flex items-center">
                                              <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                         </label>
										  </div>
										</div>
										<!-- /.col -->
										 <!-- /.col -->

                                         <div class="col-6">
                                            <div class="fog-pwd text-end">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="hover-warning"><i
                                                            class="ion ion-locked"></i>
                                                        {{ __('Forgot your password?') }}</a><br>
                                                @endif

                                            </div>
                                        </div>

                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-danger mt-10">Connexion</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
								</div>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


<!-- Vendor JS -->
<script src="{{ asset('vertical/src/js/vendors.min.js') }}"></script>
<script src="{{ asset('vertical/src/js/pages/chat-popup.js') }}"></script>
<script src="{{ asset('assets/assets/icons/feather-icons/feather.min.js') }}"></script>


</body>

<!-- Mirrored from crm-admin-dashboard-template.multipurposethemes.com/project_management/vertical/main/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 12:02:51 GMT -->
</html>
