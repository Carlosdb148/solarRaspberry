const btn = document.getElementById('getData');
const divData = document.getElementById('draw');
btn.addEventListener('click', () => {
    drawData();
})
const drawData =  async () => {
    let data = await fetch("http://localhost:3000/dataServer")
                    .then(res => res.json() )
                    .then(data => {
                        divData.innerHTML = "";
                        for(const prop in data) {
                            var div = document.createElement('div');
                            div.innerHTML = `${prop}: ${data[prop]}`;
                            divData.appendChild(div);
                        }
                    })
                    .catch(e => console.log(e) )
}
