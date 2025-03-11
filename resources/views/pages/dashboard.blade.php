<x-basedashboard active_link="{{ $active_link }}">


    <div class="container-fluid row px-2">


        <div class="col">
            <div class="card">
                <span class="mask bg-primary opacity-10 border-radius-lg"></span>
                <div class="card-body position-relative">

                    <div class="row">
                        <div class="col-lg-3 d-flex justify-content-center align-items-center">
                            <div class="container d-flex flex-column bg-white border-radius-md">
                                <i class="bi bi-clipboard-data opacity-8 fs-1 text-primary"></i>
                            </div>
                        </div>


                        <div class="col">
                            <p class="fs-5 fw-bold text-white border-bottom opacity-10">Orders</p>
                            <p class="fs-5 text-white opacity-10">145</p>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card">
                <span class="mask bg-secondary opacity-10 border-radius-lg"></span>
                <div class="card-body position-relative">
                    <div class="row">

                        <div class="col-lg-3 d-flex justify-content-center align-items-center">
                            <div class="container d-flex flex-column bg-white border-radius-md">
                                <i class="bi bi-clipboard2-x opacity-8 fs-1 text-secondary"></i>
                            </div>
                        </div>

                        <div class="col">
                            <p class="fs-5 fw-bold text-white opacity-10 border-bottom">Pending</p>
                            <p class="fs-5 text-white opacity-10">15</p>
                        </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card">
                <span class="mask bg-success opacity-10 border-radius-lg"></span>
                <div class="card-body position-relative">
                    <div class="row">

                    
                        <div class="col-lg-3 d-flex justify-content-center align-items-center">
                            <div class="container d-flex flex-column bg-white border-radius-md">
                                <i class="bi bi-clipboard2-check opacity-8 fs-1 text-success"></i>
                            </div>
                        </div>

                        <div class="col">
                            <p class="fs-5 fw-bold text-white opacity-10 border-bottom">Fullfilled</p>
                            <p class="fs-5 text-white opacity-10">15</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        
    </div>


    <div class="container-fluid px-2 mt-4">



        <div class="row">
            <div class="col-7">

                <div class="card">
                    <span class="mask opacity-10 border-radius-lg"></span>
                    <div class="card-body position-relative">
                        <p class="fs-5 fw-bold text-dark border-bottom">Sales</p>

                        <div class="chart">
                            <canvas id="chart-bars" class="chart-canvas" height="450"></canvas>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
     
        
      
    

    <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#000000",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Inter",
                style: 'normal',
                lineHeight: 2
              },
              color: "#000000"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Inter",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Inter",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>

</x-basedashboard>