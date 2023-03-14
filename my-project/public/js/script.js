const divData = document.getElementById('draw');
const divPic = document.getElementById('frame');
const btn = document.getElementById('getPic');
const drawData =  async () => {
    let data = await fetch("http://localhost:8000/getLogs")
                    .then(res => res.json() )
                    .then(data => {
                        divData.innerHTML = "";                        
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
                                                                                                                                                                                                                                 

                            divData.appendChild(div);
                          }else{
                            var div = document.createElement('div');
                            div.innerHTML = `${prop}: ${data[prop]}`;
                            divData.appendChild(div);
                          }
                        }
                    })
                    .catch(e => console.log(e) )
}
const drawPicture =  async () => {
    let data = await fetch("http://localhost:8000/getPic")
        .then(res => res.json() )
        .then(data => {
            divPic.innerHTML = "";
            for(const prop in data) {

                    let div = document.createElement('img');
                    div.innerHTML = `${prop}: ${data[prop]}`;
                    divData.appendChild(div);

            }
        })
        .catch(e => console.log(e) )
}
btn.addEventListener('click', () => {
    drawPicture();
})
drawData();
