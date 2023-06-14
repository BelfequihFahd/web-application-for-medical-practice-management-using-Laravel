<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="g-sidenav-show  bg-gray-100">
  
    @include('admin.sidebar')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">

    @include('admin.navbar')

    @include('admin.body')  
      
    @include('admin.footer')

    
  </main>

    @include('admin.script')

</body>

</html>
