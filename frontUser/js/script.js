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
const drawData =  async () => {
    await fetch("http://localhost:8000/peticion")
            .then(res => res.json() )
            .then(data => {
              var lab = [];
              var dat = [];
              for(const prop in data) {
                if(prop != 'imagenSol') {
                  lab.push(prop);
                  dat.push(data[prop]);
                }  
              }
              myChart.config.data.labels = lab;
              myChart.config.data.datasets[0].data = dat;  
              myChart.reset();
              myChart.update(); 
            })
            .catch(e => console.log(e) )
} 
drawData();