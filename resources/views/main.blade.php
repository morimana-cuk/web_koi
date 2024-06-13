<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="./images/login/logo-login.png" />
    <title>Gumukmas Multi Farm</title>
    @include('partials.link')
    </head>

  <body class="m-0 text-base antialiased font-normal leading-default bg-dgrey text-slate-500">
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
  </body>
  @include('partials.script')
</html>
