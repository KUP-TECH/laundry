<x-basedashboard active_link="{{ $active_link }}">


    <div class="container-fluid row px-2">
      <div class="row">
      
        <div class="col-md-12 mb-2">
          <div class="d-md-flex align-items-center mb-3 mx-2">
            <div class="mb-md-0 mb-3">
              <h3 class="font-weight-bold mb-0">Today's</h3>
              <p class="mb-0">Date: {{ $table['today'] }}</p>
            </div>
          </div>
        </div>
      
      </div>

        <div class="col">
            <div class="card">
                <span class="mask bg-primary opacity-10 border-radius-lg"></span>
                <div class="card-body position-relative">

                    <div class="row">
                        <div class="col-lg-3 d-flex justify-content-center align-items-center">
                            <div class="container d-flex flex-column bg-white border-radius-md justify-content-center align-items-center">
                                <i class="bi bi-clipboard-data opacity-8 fs-1 text-primary"></i>
                            </div>
                        </div>


                        <div class="col">
                            <p class="fs-5 fw-bold text-white border-bottom opacity-10">Orders</p>
                            <p class="fs-5 text-white opacity-10">{{ $table['count'][0] }}</p>
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
                            <div class="container d-flex flex-column bg-white border-radius-md justify-content-center align-items-center">
                                <i class="bi bi-clipboard2-x opacity-8 fs-1 text-secondary"></i>
                            </div>
                        </div>

                        <div class="col">
                            <p class="fs-5 fw-bold text-white opacity-10 border-bottom">Pending</p>
                            <p class="fs-5 text-white opacity-10">{{ $table['pending'] }}</p>
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
                            <div class="container d-flex flex-column bg-white border-radius-md justify-content-center align-items-center">
                                <i class="bi bi-clipboard2-check opacity-8 fs-1 text-success"></i>
                            </div>
                        </div>

                        <div class="col">
                            <p class="fs-5 fw-bold text-white opacity-10 border-bottom">Paid</p>
                            <p class="fs-5 text-white opacity-10">{{ $table['completed'] }}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        
    </div>


    <div class="container-fluid px-2 mt-4">



        <div class="row">
            <div class="col-12">

              <div class="card">
                  <span class="mask opacity-10 border-radius-lg"></span>
                  <div class="card-body position-relative">
                      <p class="fs-5 fw-bold text-dark border-bottom">Orders</p>

                      <div class="chart">
                          <canvas id="chart-bars" class="chart-canvas" height="80" width="auto"></canvas>
                      </div>
                  </div>
              </div>
                
            </div>
        </div>

        <div class="row my-2">
          <div class="col-12">
        
            <div class="card">
              <span class="mask opacity-10 border-radius-lg"></span>
              <div class="card-body position-relative">
                <p class="fs-5 fw-bold text-dark border-bottom">Sales</p>
        
                <div class="chart">
                  <canvas id="chart-bars-2" class="chart-canvas" height="80" width="auto"></canvas>
                </div>
              </div>
            </div>
        
          </div>
        </div>
    </div>
     
    
      
    

    <script>

      let data = @json($table);
      console.log(data);

      let ctx = document.getElementById("chart-bars").getContext("2d");
      let ctx2 = document.getElementById("chart-bars-2").getContext("2d");

      new Chart(ctx, {
        type: "bar",

        data: {
          labels: data.date,
          datasets: [
            {
              label: "Order",
              backgroundColor: "#377dff",
              borderColor: "#ffffff",
              data: data.count,
              borderWidth: 1
            },

          ]
        },
        options: {
          scales: {
            x: {
              ticks: {
                color: "#FF5733", // X-axis text color
                font: { size: 14 }
              },
              grid: {
                color: "white",
              }
            },
            y: {
              ticks: {
                color: "#33FF57", // Y-axis text color
                font: { size: 14 }
              },
              grid: {
                color: "white",
              },
              beginAtZero: true,
            }
          },
          plugins: {
            legend: {
              labels: {
                color: "#007bff", // Legend text color
                font: { size: 14 }
              }
            },
            title: {
              display: true,
              text: "Orders for the last 7 days",
              color: "#ff9900", // Title text color
              font: { size: 18 }
            },
            tooltip: {
              bodyColor: "#FFFFFF", // Tooltip text color
              titleColor: "#FFD700", // Tooltip title color
              backgroundColor: "#333333" // Tooltip background color
            }
          },
        },


      });


      new Chart(ctx2, {
            type: "bar",
        
            data: {
                labels: data.date,
                datasets: [
                    {
                        label: "Pesos",
                        backgroundColor: "#00ddff",
                        borderColor: "#ffffff",
                        data: data.ammount,
                        borderWidth: 1
                    },
                   
                ]
            },
            options: {
                scales: {
                    x: {
                        ticks: {
                            color: "#FF5733", // X-axis text color
                            font: { size: 14 }
                        },
                        grid: {
                            color: "white",
                        }
                    },
                    y: {
                        ticks: {
                            color: "#33FF57", // Y-axis text color
                            font: { size: 14 }
                        },
                        grid: {
                            color: "white",
                        },
                        beginAtZero: true,
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: "#007bff", // Legend text color
                            font: { size: 14 }
                        }
                    },
                    title: {
                        display: true,
                        text: "Ammounts for the last 7 days",
                        color: "#ff9900", // Title text color
                        font: { size: 18 }
                    },
                    tooltip: {
                        bodyColor: "#FFFFFF", // Tooltip text color
                        titleColor: "#FFD700", // Tooltip title color
                        backgroundColor: "#333333" // Tooltip background color
                    }
                },
            },

            
        });
  </script>

</x-basedashboard>