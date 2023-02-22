new Chart(document.getElementById("graphicsChart"), {
  type: "bar",
  data: {
    labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
    datasets: [
      {
        label: "# of Votes",
        data: [12, 19, 3, 5, 2, 3],
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
const btn = document.getElementById('getData');
const divData = document.getElementById('drawData');
const divLogs = document.getElementById('drawLogs');
btn.addEventListener('click', () => {
    drawData();
})
const drawData =  async () => {
    let data = await fetch("http://localhost:8000/peticion")
                    .then(res => res.json() )
                    .then(data => {
                        divData.innerHTML = "";
                        divLogs.innerHTML = "";
                        for(const prop in data) {
                          if(prop == 'logs'){
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
                            var div = document.createElement('div');
                            div.innerHTML = `${prop}: ${data[prop]}`;
                            divData.appendChild(div);
                        }
                    })
                    .catch(e => console.log(e) )
}