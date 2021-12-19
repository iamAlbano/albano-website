@extends('app')

@section('content')

@include('navbar')


    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" 
                class="carousel-img d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1558895101-0b9cc10348f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1194&q=80" 
                class="carousel-img d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1480506132288-68f7705954bd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80" 
                class="carousel-img d-block w-100" alt="...">
            </div>

        </div>
    </div>


    <div class="position-relative">
            <img src="{{ URL::asset('img/me.png') }}" width="25%" 
            class="profile border border-5 rounded-circle
            position-absolute start-50 translate-middle " alt="my photo">
        
    </div>


    <div id="gradient">

        <hr id="divider">
            
        <div class="container shadow-lg p-3 mb-5 rounded " id="screen">
            <div class="row g-2">

                <div class="col-6">
                    <div class="p-3  title"><h1>{{ __('messages.meet me')}}</h1></div>
                </div>

                <div class="col-6">
                    <div class="p-3 title text-end"><h1>{{ __('messages.social media')}}</h1></div>
                </div>

                <div class="col-6">
                    <div class="p-3">
                        <p class="text">
                            {{ __('messages.info')}}
                        </p>
                    </div>
                </div>          

                <div class="col-6">
                    <div class="p-3 text-end">
                        <p class="text"> 
                            <a href="/github.com/iamAlbano" class="link-light text-decoration-none"> github.com/iamAlbano
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                        </p>

                        <p class="text">
                            <a href="https://www.linkedin.com/in/guilhermealbano/" class="link-light text-decoration-none"> linkedin.com/in/guilhermealbano/
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </a>
                        </p>

                        <p class="text"> oguilhermealbano@gmail.com
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg>
                        </p>
                    </div>
                </div>

            </div>
            
            
            
        </div> 
        
    </div> 


    <div >

        <hr id="divider">

        <div class="container shadow-lg p-3 mb-5 rounded second ">
            <div class="row g-2">

                <div class="col-6">
                    <div class="p-3  title"><h1>{{ __('messages.skills')}}</h1></div>
                </div>

            </div>
            
                <div class="carousel carousel-main" data-flickity>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    </div>

                <div class="carousel carousel-nav"
                    data-flickity='{ "asNavFor": ".carousel-main", "contain": true, "pageDots": false }'>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                </div>

            
        </div> 
    </div> 
    

   




@endsection