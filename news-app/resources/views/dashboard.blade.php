<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 d-flex justify-content-center mb-5">
            <div class=" overflow-hidden bg-white shadow-sm sm:rounded-lg mr-3 col-5" style="background: linear-gradient(118deg,#bb86fc,rgba(115,103,240,.7)); color:white;">
                <div class="p-6 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person m-auto p-2" viewBox="0 0 16 16" style="background: rgba(115,103,240,.3); border-radius:50px;">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg>
                    <h3 class="text-center mt-5"> Welcome Rawabe Ebrahim!</h3>
                </div>
            </div>
            <div class=" overflow-hidden bg-white shadow-sm sm:rounded-lg mr-3 col-3">

                <div class="p-6">
                    <div>
                        <svg style="background: rgba(0,0,0,.1); border-radius:40px; color:gray;" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-newspaper p-1" viewBox="0 0 18 18 ">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                        </svg>
                    </div>
                    <h2 class="mt-2"><strong>{{$articleCount}}</strong></h2>
                    <h6>Articles </h6>
                </div>
            </div>
            <div class=" overflow-hidden bg-white shadow-sm sm:rounded-lg col-3">

                <div class="p-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people  p-2" viewBox="0 0 16 16" style="background: rgba(115,103,240,.3); border-radius:50px; color:rgba(115,103,240);">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                    </svg>
                    <h2 class="mt-2"><strong>{{$visitors}}</strong></h2>
                    <h6>Total number of Visitors</h6>
                </div>
            </div>
        </div>
        <div class="max-w-6xl lg:px-12 d-flex justify-content-between">
            <div class=" overflow-hidden bg-white shadow-sm sm:rounded-lg col-6 mr-3">
                <div class="">

                    <div class="row d-flex justify-content-center m-5 sm:rounded-lg ">

                        <div class="col">
                            <h1 class="text-center">Hidden and Shown </h1>
                            <canvas id="visibilty" style="height: 300px; width: 100%;"></canvas>
                            <!-- <canvas id="articles" style="height: 300px; width: 80%;"></canvas> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class=" overflow-hidden bg-white shadow-sm sm:rounded-lg col-6">

                <div class="">

                    <div class="row d-flex justify-content-center m-5">

                        <div class="col">
                            <h1 class="text-center">Articles</h1>
                            <!-- <canvas id="visibilty" style="height: 300px; width: 80%;"></canvas> -->
                            <canvas id="articles" style="height: 300px; width: 100%;"></canvas>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>


    <script type="text/javascript">
        var ctx = document.getElementById('articles').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Arts', 'Desgin', 'Digitl', 'Computer', 'Games', 'Study'],
                datasets: [{
                    label: 'Article',
                    data: [{{$art}}, {{$design}}, {{$digitl}}, {{$computer}}, {{$games}}, {{$study}}],
                    backgroundColor: [
                        'rgba(75, 192, 192)'
                    ]
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        var ctx = document.getElementById('visibilty').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Hidden', 'Showen'],
                datasets: [{
                    label: 'Articles',
                    data: [ {{$hidden}},{{$shown}}
                        
                    ],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        display: false
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>
</x-app-layout>