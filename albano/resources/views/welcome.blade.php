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
            class="profile border border-5 border-dark rounded-circle
            position-absolute start-50 translate-middle " alt="my photo">
        
    </div>


    <div id="gradient">

        <hr id="divider">
            
        <div class="container shadow-lg p-3 mb-5 rounded" id="screen">
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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Fuga impedit sunt eos, itaque maiores recusandae laudantium incidunt expedita mollitia eaque sit 
                             laboriosam consequatur perferendis voluptate culpa reprehenderit quod? Quia, cumque!
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
                    <div class="p-3  title-2"><h1>{{ __('messages.meet me')}}</h1></div>
                </div>

                <div class="col-6">
                    <div class="p-3 title-2 text-end"><h1>{{ __('messages.social media')}}</h1></div>
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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Fuga impedit sunt eos, itaque maiores recusandae laudantium incidunt expedita mollitia eaque sit 
                             laboriosam consequatur perferendis voluptate culpa reprehenderit quod? Quia, cumque!
                        </p>
                    </div>
                </div>

            </div>
            
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" 
                        class="carousel-img d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=726&q=80" 
                        class="carousel-img d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1515643395264-3f8c19a2dc77?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE5fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" 
                        class="carousel-img d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
        </div> 
    </div> 
    

   




@endsection