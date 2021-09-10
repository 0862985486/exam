<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>

<head>
  <meta charset="utf-8" />

  {{-- Title Section --}}
  <title>{{ config('app.name') }} | @yield('title', $page_title ?? 'Login')</title>

  {{-- Meta Data --}}
  <meta name="description" content="@yield('page_description', $page_description ?? '')" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  {{-- Favicon --}}
  <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

  {{-- Fonts --}}
  {{ Metronic::getGoogleFontsInclude() }}

  {{-- Global Theme Styles (used by all pages) --}}
  @foreach(config('layout.resources.css') as $style)
  <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css" />
  @endforeach

  {{-- Layout Themes (used by all pages) --}}
  @foreach (Metronic::initThemes() as $theme)
  <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css" />
  @endforeach

  {{-- Includable CSS --}}
  @yield('styles')
  <style>
    .login.login-5 .login-signin,
    .login.login-5 .login-signup,
    .login.login-5 .login-forgot {
      display: none;
    }

    .login.login-5.login-signin-on .login-signup {
      display: none;
    }

    .login.login-5.login-signin-on .login-signin {
      display: block;
    }

    .login.login-5.login-signin-on .login-forgot {
      display: none;
    }

    .login.login-5.login-signup-on .login-signup {
      display: block;
    }

    .login.login-5.login-signup-on .login-signin {
      display: none;
    }

    .login.login-5.login-signup-on .login-forgot {
      display: none;
    }

    .login.login-5.login-forgot-on .login-signup {
      display: none;
    }

    .login.login-5.login-forgot-on .login-signin {
      display: none;
    }

    .login.login-5.login-forgot-on .login-forgot {
      display: block;
    }

    .login.login-5 .login-form {
      width: 100%;
      max-width: 450px;
    }

    @media (max-width: 575.98px) {
      .login.login-5 .login-form {
        width: 100%;
        max-width: 100%;
      }
    }
  </style>
</head>

<body {{ Metronic::printAttrs('body') }} {{ Metronic::printClasses('body') }}>

  <!--begin::Main-->
  <div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
      <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url({{ asset('media/bg/bg-2.jpg') }});">
        <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
          <!--begin::Login Header-->
          <div class="d-flex flex-center mb-15">
            <a href="#" style="color: white; font-size: 40px;">
              <!-- <img src="{{ asset('media/logos/logo-letter-13.png') }}" class="max-h-75px" alt="" /> -->
                gg
            </a>
          </div>
          <!--end::Login Header-->

          <!--begin::Login Sign in form-->
          <div class="login-signin">
            <div class="mb-20">
              <h3 class="opacity-40 font-weight-normal">g</h3>
              <p class="opacity-40">g</p>
            </div>
            <form class="form" id="kt_login_signin_form" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password" />
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group text-center mt-10">
                <button id="kt_login_signin_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Sign In</button>
              </div>
            </form>
          </div>
          <!--end::Login Sign in form-->
        </div>
      </div>
    </div>
    <!--end::Login-->
  </div>
  <!--end::Main-->

</body>

</html>
