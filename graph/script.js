  const btn = document.getElementById('getData');
  const divData = document.getElementById('drawData');
  const divLogs = document.getElementById('drawLogs');
  const graph = document.getElementById('grafica');
  const myChart = new Chart(graph, {
    type: "bar",
    data: {
      labels: [],
      datasets: [
        {
          label: "# of Votes",
          data: [],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        y: { beginAtZero: true },
      },
      responsive: true,
      maintainAspectRatio: false,
    },
  });

  btn.addEventListener('click', () => {
      drawData();
      
  })
  const drawData =  async () => {
       await fetch("http://localhost:8000/peticion")
                      .then(res => res.json() )
                      .then(data => {
                          divData.innerHTML = "";
                          divLogs.innerHTML = "";
                          var lab = [];
                          var dat = [];
                          for(const prop in data) {
                            if(prop == 'logs') {
                              var div = document.createElement('div');
                              div.innerHTML+="Eje X: " + data.logs[0].ejex +'<br/>';
                              div.innerHTML+="Eje Y: " + data.logs[0].ejey +'<br/>' ;
                              div.innerHTML+="Bateria: " + data.logs[0].bateria+'%' +'<br/>' ;
                              div.innerHTML+="LDR1: " + data.logs[0].ldr1 +'<br/>' ;
                              div.innerHTML+="LDR2: " + data.logs[0].ldr2 +'<br/>' ;
                              div.innerHTML+="LDR3: " + data.logs[0].ldr3 +'<br/>' ;
                              div.innerHTML+="LDR4: " + data.logs[0].ldr4 +'<br/>' ;                                                                                                                                                                                                          
                              divLogs.appendChild(div);
                            }
                            if(prop != 'imagenSol') {
                                lab.push(prop);
                                dat.push(data[prop]);
                            }
                            var div = document.createElement('div');
                            div.innerHTML = `${prop}: ${data[prop]}`;
                            divData.appendChild(div);   
                          }
                          myChart.config.data.labels = lab;
                          myChart.config.data.datasets[0].data = dat;  
                          myChart.reset();
                          myChart.update(); 
                      })
                      .catch(e => console.log(e) )
  }