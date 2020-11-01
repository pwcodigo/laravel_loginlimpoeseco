<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
         
       
    </head>
    <style>
        .dropdown:hover .dropdown-menu {
        display: block;
        }
    </style>
    <body class="antialiased">
        <!-- div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
        </div>
        -->
        <header class="">           
        <nav class="flex justify-around items-center w-screen bg-gray-700 shadow-lg relative z-10">
                    <div class="p-1 sm:w-1/5">
                        <div class="text-white text-center p-0 font-light flex">
                            <svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                            Conect Plus
                        </div>
                    </div>  
                    <div class="dropdown cursor-pointer p-1 mr-2 flex items-center">                       
                            <div class="">
                                <img class="h-6 w-6 rounded-full" src="https://thispersondoesnotexist.com/image" alt="avatar">
                            </div>
                            <div class="">
                                <span class="text-white text-sm font-light ml-1">José Silva</span>                              
                            </div>
                            <div class="rounded-md shadow-sm flex">                               
                                <button class="flex justify-center items-center block h-3 w-3 overflow-hidden focus:outline-none"> 
                                    <div id="Seta" class="animate-ping inline-flex h-full w-full rounded-full text-gray-700 opacity-75">
                                        
                                        <svg class="h-3 w-3 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button> 
                                <ul class="dropdown-menu absolute w-48 bg-white rounded-lg shadow-xl mt-5 -ml-48 hidden sm:mr-24 md:mr-32 lg:mr-48 xl:mr-64s">
                                    <li class=""><a class="rounded-t text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 block whitespace-no-wrap" href="#">Perfil</a></li>
                                    <li class=""><a class="text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 block whitespace-no-wrap" href="#">Configuração</a></li>
                                    <li class=""><a class="rounded-b text-gray-800 hover:bg-gray-600 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{route ('logout') }}">Sair</a></li>
                                </ul>
                                                                
                            </div>                           
                    </div>                                       
        </nav>
    </div>  
    </header>

    <section>
        <div class="container mx-auto mt-3 w-1/2">
            <div class="bg-gray-100 rounded-md shadow-sm">
                <div class="flex justify-start">
                    <h4 class="text-gray-500 text-sm font-bold text-xl px-1">Painel</h4>                                        
                </div>

               
                <div class="-mx-2 md:flex items-center justify-center px-5">
                    <!-- bloco 1 -->
                    <div class="w-full md:w-1/3 px-2">
                        <div class="rounded-lg shadow-sm mb-4">
                            <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                                <div class="px-3 pt-8 pb-10 text-center relative">
                                    <h4 class="text-sm uppercase text-gray-500 leading-tight">
                                        <div class="inline-block flex items-center justify-center">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                            Usuários
                                        </div>
                                    </h4>
                                    <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">1,500</h3>
                                    <p  class="text-xs text-green-500 leading-tight">▲ 57.1%</p>
                                </div>

                                <div class="absolute bottom-0 inset-x-0">
                                    <canvas id="chart1" height="70"></canvas>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- #bloco 1 -->
                    
                    <!-- bloco2 -->
                    <div class="w-full md:w-1/3 px-2">
                        <div class="rounded-lg shadow-sm mb-4">
                            <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                                <div class="px-3 pt-8 pb-10 text-center relative">                                    
                                    <h4 class="text-sm uppercase text-gray-500 leading-tight">
                                        <div class="inline-block flex items-center justify-center">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                                            Mensagens
                                        </div> 
                                    </h4>
                                                                      
                                    <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">12,253</h3>
                                    <p class="text-xs text-red-500 leading-tight">▼ 10.5%</p>
                                </div>
                                <div class="absolute bottom-0 inset-x-0">
                                    <canvas id="chart2" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- #sbloco2 -->

                     <!-- bloco3 -->
                    <div class="w-full md:w-1/3 px-2">
                        <div class="rounded-lg shadow-sm mb-4">
                            <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                                <div class="px-3 pt-8 pb-10 text-center relative">
                                    <h4 class="text-sm uppercase text-gray-500 leading-tight">
                                        <div class="inline-block flex items-center justify-center">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                            on-line
                                        </div>
                                    </h4>
                                    <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3">100</h3>
                                    <p class="text-xs text-green-500 leading-tight">▲ 6.6%</p>
                                </div>
                                <div class="absolute bottom-0 inset-x-0">
                                    <canvas id="chart3" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- #bloco3 -->
                </div>
                

               


            </div>
        </div>
    </section>    
   
    <section>
        <div class="container mx-auto mt-3">
            <div class="px-4 mx-auto  w-2/3 bg-gray-100 shadow-lg sm:px-8">
                <div class="">
                    <div>
                        <h2 class="text-2xl font-semibold leading-tight ml-12">Lista de Usuários</h2>
                    </div>
                    
                    <div class="my-2 ml-12 flex justify-start sm:flex-row flex-col">
                        
                            <div class="flex flex-row mb-1 sm:mb-0">
                                 <div class="relative">
                                    <select class="appearance-none h-full rounded-l border block appearance-none w-full  bg-gray-100 border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option>5</option>
                                        <option>10</option>
                                        <option>15</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>                                    
                                    </div>
                                 </div>
                                 <div class="relative">
                                     <select class="appearance-none h-full rounded-r border-t sm:rounded-r-none sm:border-r-0 border-r border-b block appearance-none w-full bg-gray-100 border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                                         <option>Todos</option>
                                         <option>On-line</option>
                                         <option>Off-line</option>
                                     </select>
                                     <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                     </div>
                                 </div>
                            </div>
                            <div class="block relative">
                                <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                        <path
                                            d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                        </path>
                                    </svg>
                                </span>
                                <input class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-gray-100 text-gray-700 focuss:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" placeholder="Pesquisar" />
                            </div>
                    </div>

                    <div class="">
                        <div class=>
                            <table class="table-auto mx-auto min-w-full">
                                <thead>
                                    <tr>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Usuário
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Dispositivo
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Último Acesso
                                        </th>
                                        <th class="px5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full" src="https://thispersondoesnotexist.com/image" alt"">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900  whitespace-no-wrap">
                                                        Luiz Victor
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                Smartphone Android Samsug j7
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sms">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                30/10/2020 ás 19:00
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-green-500 opacity-50 rounded-full">
                                                </span>
                                                <span class="relative">On-line</span>
                                            </span>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full" src="https://thispersondoesnotexist.com/image" alt"">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900  whitespace-no-wrap">
                                                    Paul Richard
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                Smartphone Xiaomi M1
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sms">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                29/10/2020 ás 1s7:00
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-green-500 opacity-50 rounded-full">
                                                </span>
                                                <span class="relative">On-line</span>
                                            </span>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full" src="https://thispersondoesnotexist.com/image" alt"">
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900  whitespace-no-wrap">
                                                    chris Nethan
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                Notebook Samsug H plus
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sms">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                27/10/2020 ás 10:00
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-red-500 opacity-50 rounded-full">
                                                </span>
                                                <span class="relative">Off-line</span>
                                            </span>
                                        </td>
                                    </tr>                               
                                </tbody>
                            </table>
                            <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                                <span class="text-xs xs:text-sm text-gray-900">
                                    Mostrar 1 de 4 para 50 usuários
                                </span>
                                <div class="inline-flex mt-2 xs-mt-0">
                                    <button class="text-sm bg-gray-500 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                        Próx
                                    </button>
                                    <button class="text-sm bg-gray-500 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                        Voltar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        const chartOptions = {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        tooltips: {
            enabled: false,
        },
        elements: {
            point: {
                radius: 0
            },
        },
        scales: {
            xAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false
                }
            }],
            yAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false,
                    suggestedMin: 0,
                    suggestedMax: 10
                }
            }]
        }
    };
    //
    var ctx = document.getElementById('chart1').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [1, 2, 1, 3, 5, 4, 7],
            datasets: [
                {
                    backgroundColor: "rgba(101, 116, 205, 0.1)",
                    borderColor: "rgba(101, 116, 205, 0.8)",
                    borderWidth: 2,
                    data: [1, 2, 1, 3, 5, 4, 7],
                },
            ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart2').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 3, 2, 9, 7, 7, 4],
            datasets: [
                {
                    backgroundColor: "rgba(246, 109, 155, 0.1)",
                    borderColor: "rgba(246, 109, 155, 0.8)",
                    borderWidth: 2,
                    data: [2, 3, 2, 9, 7, 7, 4],
                },
            ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart3').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 5, 1, 3, 2, 6, 7],
            datasets: [
                {
                    backgroundColor: "rgba(246, 153, 63, 0.1)",
                    borderColor: "rgba(246, 153, 63, 0.8)",
                    borderWidth: 2,
                    data: [2, 5, 1, 3, 2, 6, 7],
                },
            ],
        },
        options: chartOptions
    });
    </script>
       

            
    </body>
</html>
