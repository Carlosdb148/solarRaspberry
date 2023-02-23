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
    let data = await fetch("http://localhost:8000/getLogs")
                    .then(res => res.json() )
                    .then(data => {
                        divData.innerHTML = "";
                        divLogs.innerHTML = "";
                        for(const prop in data) {
                          if(prop == 'logs'){
                            var div = document.createElement('div');
                            data.logs.forEach(element => {
                              div.innerHTML+="Data for: " + element.created_at +'<br/>';
                              div.innerHTML+="Eje X: " + element.ejex +'<br/>';
                            div.innerHTML+="Eje Y: " + element.ejey +'<br/>' ;
                            div.innerHTML+="Bateria: " + element.bateria+'%' +'<br/>' ;
                            div.innerHTML+="LDR1: " + element.ldr1 +'<br/>' ;
                            div.innerHTML+="LDR2: " + element.ldr2 +'<br/>' ;
                            div.innerHTML+="LDR3: " + element.ldr3 +'<br/>' ;
                            div.innerHTML+="LDR4: " + element.ldr4 +'<br/>' ;     
                            });
                                                                                                                                                                                                                                 

                            divLogs.appendChild(div);
                          }else{
                            var div = document.createElement('div');
                            div.innerHTML = `${prop}: ${data[prop]}`;
                            divData.appendChild(div);
                          }
                        }
                    })
                    .catch(e => console.log(e) )
}