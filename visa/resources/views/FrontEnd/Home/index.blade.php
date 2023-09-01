@extends('layouts.frontend.app')



@section('content')


@if (session('status'))
<div class="alert alert-primary" role="alert">
    {{ session('status') }}
</div>
@endif

<h1>Home Page</h1>

@endsection




{{-- <script>

    function getlogo()
        {
            fetch("http://localhost:8000/api/logos").then((res)=>res.json()).then((response)=>
            {
                console.log(response);
                logos1 = ""
                logos2 = ""
                logos3 = ""
                logos4 = ""
                
                response.forEach(logo => 
                {
                    logos1 +=
                    `<div class="logo">
                        <a href="/home"><img src="/storage/${logo.logo}" alt="Logo Not found"></a>
                    </div>`
                });
                document.getElementById("logo_id1").innerHTML = logos1

                response.forEach(logo => 
                {
                    logos2 +=
                    `<div class="nav-logo" >
                        <a href="/home"><img src="/storage/${logo.logo}" alt="Logo Not found"><a>       </div>
                            <div class="close-btn"><i class="icon fa fa-times"></i></div>`
                        });
                        document.getElementById("logo_id2").innerHTML = logos2

                response.forEach(logo => 
                {
                    logos3 +=
                    `
                        <a href="/home"><img src="/storage/${logo.logo}" alt="Logo Not found"></a>
                    `
                });
                document.getElementById("logo_id3").innerHTML = logos3

                response.forEach(logo => 
                {
                    logos4 +=
                    `
                        <a href="/home"><img src="/storage/${logo.logo}" alt="Logo Not found"></a>
                    `
                });
                document.getElementById("logo_id4").innerHTML = logos4
               
            })
        }
        
        getlogo()

</script>

<script>
    function getnavbar()
           {
               fetch("http://localhost:8000/api/navbars").then((res)=>res.json()).then((response)=>
               {
                   console.log(response);
                   navbars1 = ""
                   navbars2 = ""
                   navbars3 = ""
                   response.forEach(navbar =>  
                   {
                       navbars1 +=
                       `<li><a href="/${navbar.navbar}">${navbar.navbar}</a></li>`
                   });
                   document.getElementById("navbar_id1").innerHTML = navbars1
                   response.forEach(navbar =>  
                   {
                       navbars2 +=
                       `<li><a href="/${navbar.navbar}">${navbar.navbar}</a></li>`
                   });
                   document.getElementById("navbar_id2").innerHTML = navbars2
                   response.forEach(navbar =>  
                   {
                       navbars3 +=
                       `<li><a href="/${navbar.navbar}">${navbar.navbar}</a></li>`
                   });
                   document.getElementById("navbar_id3").innerHTML = navbars3
               })
           }
           
           getnavbar()
</script>
                      
    --}}