@extends('app')

@section('content')

@include('navbar')


    <div class="parallax"></div>
        
         

            



    <div class="position-relative">
            <img src="{{ URL::asset('img/me.png') }}" width="25%" 
            class="profile border border-5 rounded-circle
            position-absolute start-50 translate-middle " alt="my photo">
        
    </div>


    <div id="gradient">

        <hr id="divider" class="about-me">
            
        <div class="container shadow-lg p-3 mb-5 rounded " id="screen">
            <div class="row g-2">

                <div class="col-6">
                    <div class="p-3  title"><h1 class="h1">{{ __('messages.meet me')}}</h1></div>
                </div>

                <div class="col-6">
                    <div class="p-3 title text-end"><h1 class="h1">{{ __('messages.social media')}}</h1></div>
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
                            <a href="https://github.com/iamAlbano" target="_blank" class="link-light text-decoration-none"> github.com/iamAlbano
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                </svg>
                            </a>
                            <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
                        </p>

                        <p class="text">
                            <a href="https://www.linkedin.com/in/guilhermealbano/" target="_blank" class="link-light text-decoration-none"> linkedin.com/in/guilhermealbano/
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </a>
                            <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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


    <div id="inverse-gradient" class="skills">

        <hr id="divider" >

        <div class="container shadow-lg p-3 rounded second ">
            <div class="row g-2">

                <div class="col-6">
                    <div class="p-3  title"><h1 class="h1">{{ __('messages.skills')}}</h1></div>
                </div>

            </div>
            
                
                <div class="carousel rounded" data-flickity='{ "contain": true }'>

                    <div class="carousel-cell">
                        <img src="{{ URL::asset('img/laravel.png') }}" width="40%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="laravel">
                    </div>

                    <div class="carousel-cell">
                        <img src="{{ URL::asset('img/php.png') }}" width="40%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="php">
                    </div>
                    
                    <div class="carousel-cell">
                        <img src="{{ URL::asset('img/python.png') }}" width="40%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="python">
                    </div> 

                    <div class="carousel-cell">
                        <img src="{{ URL::asset('img/java.png') }}" width="45%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="java">
                    </div> 

                    <div class="carousel-cell">
                        <img src="{{ URL::asset('img/sql.png') }}" width="40%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="sql">
                    </div> 

                    <div class="carousel-cell">
                        <img src="{{ URL::asset('img/C.png') }}" width="35%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="C">
                    </div> 
                    
                    <div class="carousel-cell"><
                        <img src="{{ URL::asset('img/js.png') }}" width="40%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="js">
                    </div>

                    <div class="carousel-cell">
                        <img src="{{ URL::asset('img/bootstrap.png') }}" width="80%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="bootstrap">
                    </div>

                    <div class="carousel-cell">
                        <img src="{{ URL::asset('img/ps.png') }}" width="70%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="photoshop">
                    </div>

                    <div class="carousel-cell">
                        <img src="{{ URL::asset('img/html5.png') }}" width="45%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="html5">
                    </div>

                    <div class="carousel-cell">
                        <img src="{{ URL::asset('img/css.png') }}" width="45%" 
                        class="position-absolute top-50 start-50 translate-middle " alt="css">
                    </div> 
                
                </div>                  
        </div> 
    </div> 

    

    <div id="gradient" class="portfolio">
        <div class="container container-lg shadow-lg p-3 mb-5 rounded second ">
            <div class="row g-2 ">

               
                <div class="col-6">
                    <div class="p-3 title"><h1 class="h1">{{ __('messages.portfolio')}}</h1></div>
                </div>

            </div>

            <div class="row">
                <div class="col">                                      
                    <a href="https://github.com/iamAlbano/TAD-Estoque" class="text-decoration-none" target="_blank">             
                        <div class="card shadow-lg p-3 mb-5 text-center position-relative">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-terminal" viewBox="0 0 16 16">
                                <path d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z"/>
                                <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z"/>
                                </svg>
                            </p>
                            <p>{{ __('messages.portfolio 1')}}</p>    
                        </div>  
                        </a>  
                        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">                 
                </div>

                <div class="col">                       
                    <a href="https://github.com/iamAlbano/Busca-binaria-recursiva" class="text-decoration-none" target="_blank">   
                        <div class="card shadow-lg p-3 mb-5 text-center position-relative">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                </svg>
                            </p>
                            <p>{{ __('messages.portfolio 2')}}</p>
                        </div>  
                    </a>   
                    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">               
                </div>

                <div class="col"> 
                    <a href="https://github.com/iamAlbano/University-Manager" class="text-decoration-none" target="_blank">                       
                        <div class="card shadow-lg p-3 mb-5 text-center position-relative">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                </svg>
                            </p>
                            <p> {{ __('messages.portfolio 3')}}</p>
                        </div>   
                    </a>  
                    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">               
                </div>
            
            </div>

            <div class="row">
                <div class="col"> 
                    <a href="https://github.com/iamAlbano/TP_BD_1" class="text-decoration-none" target="_blank">                        
                        <div class="card shadow-lg p-3 mb-5 text-center position-relative">
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-server" viewBox="0 0 16 16">
                                <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z"/>
                                <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z"/>
                                <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
                                </svg>
                            </p>
                            <p>{{ __('messages.portfolio 4')}}</p>
                        </div> 
                    </a>   
                    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">                
                </div>

                <div class="col">                       
                    <a href="https://github.com/UFOP-CSI477/2021-01-remoto-atividades-iamAlbano" class="text-decoration-none" target="_blank">   
                        <div class="card shadow-lg p-3 mb-5 text-center position-relative">
                            <p>
                                <svg class=""
                                    xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-grid-1x2" viewBox="0 0 16 16">
                                    <path d="M6 1H1v14h5V1zm9 0h-5v5h5V1zm0 9v5h-5v-5h5zM0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm1 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-5z"/>
                                </svg>                            
                            </p>
                            <p>{{ __('messages.portfolio 5')}}</p>
                        </div> 
                    </a>   
                    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">                
                </div>

                <div class="col">  
                    <a href="https://github.com/iamAlbano/Dijkstra--Bellman-Ford-and-Floyd-Warshall" class="text-decoration-none" target="_blank">                      
                        <div class="card shadow-lg p-3 mb-5 text-center position-relative">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                                <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                                </svg>
                            </p>
                            <p>{{ __('messages.portfolio 6')}}</p>
                        </div> 
                    </a>
                    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">                   
                </div>


                
            </div>

            <div class="row">
                <div class="col">
                    <a href="https://github.com/iamAlbano/albano-website" class="text-decoration-none" target="_blank">                         
                        <div class="card shadow-lg p-3 mb-5 text-center position-relative">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
                                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                                </svg>
                            </p>
                            <p>{{ __('messages.portfolio 7')}}</p>
                        </div>  
                    </a>
                    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">                  
                </div>

                <div class="col"> 
                    <a href="https://github.com/iamAlbano/ps_visao_tcc/tree/master" class="text-decoration-none" target="_blank">                        
                        <div class="card shadow-lg p-3 mb-5 text-center position-relative">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                                </svg>                            
                            </p>
                            <p>{{ __('messages.portfolio 8')}}</p>
                        </div> 
                    </a> 
                    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">                  
                </div>

                <div class="col"> 
                    <a href="https://github.com/iamAlbano/Busca-sequencial" class="text-decoration-none" target="_blank">                       
                        <div class="card shadow-lg p-3 mb-5 text-center position-relative">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-stack-overflow" viewBox="0 0 16 16">
                                <path d="M12.412 14.572V10.29h1.428V16H1v-5.71h1.428v4.282h9.984z"/>
                                <path d="M3.857 13.145h7.137v-1.428H3.857v1.428zM10.254 0 9.108.852l4.26 5.727 1.146-.852L10.254 0zm-3.54 3.377 5.484 4.567.913-1.097L7.627 2.28l-.914 1.097zM4.922 6.55l6.47 3.013.603-1.294-6.47-3.013-.603 1.294zm-.925 3.344 6.985 1.469.294-1.398-6.985-1.468-.294 1.397z"/>
                                </svg>                            
                            </p>
                            <p>{{ __('messages.portfolio 9')}}</p>
                        </div> 
                    </a>  
                    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">                 
                </div>


                
            </div>

           
            
        </div>
    </div>




    <div id="inverse-gradient" class="contact">       

        <div class="container shadow-lg p-3 rounded second ">
            <div class="row g-2">

                <div class="col-6">
                    <div class="p-3  title"><h1 class="h1">{{ __('messages.contact')}}</h1></div>
                </div>              

            </div>

            <form action="{{ url('/')}}" method="post">
                @csrf

                <div class="row g-2">
                    <div class="col">
                        <label for="basic-url" class="form-label">{{ __('messages.name')}}</label>
                        <div class="input-group mb-3">
                            <input type="text" class="input form-control" id="name" name="name" aria-describedby="basic-addon3" required>
                        </div>
                    </div>

                    <div class="col">
                        <label for="basic-url" class="form-label">{{ __('messages.email')}}</label>
                        <div class="input-group mb-3">
                            <input type="email" class="input form-control" id="email" name="email" aria-describedby="basic-addon3" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="basic-url" class="form-label">{{ __('messages.subject')}}</label>
                        <div class="input-group mb-3">
                            <input type="text" class="input form-control" id="subject" name="subject" aria-describedby="basic-addon3" required>
                        </div>
                    </div>         
                </div>

                <div class="row">
                    <div class="col">
                        <label for="basic-url" class="form-label">{{ __('messages.message')}}</label>
                        <div class="input-group">
                            <textarea class="input form-control" name="message" id="message" aria-label="With textarea"></textarea>
                        </div>
                    </div>         
                </div>  
                <hr>
                <div class="row">
                    <div class="text-center">
                        <button class="btn btn-lg btn-send">{{__('messages.submit')}}</button>
                    </div>         
                </div> 
            </form>                
        </div> 
    </div> 

    <div id="gradient"><hr id="divider"></div>

   




@endsection