const divData = document.getElementById('draw');
const divPic = document.getElementById('frame');
const btn = document.getElementById('getPic');
const drawData =  async () => {
  
    let data = await fetch("http://localhost:8000/getLogs")
        .then(res => res.json() )
        .then(data => {
            divData.innerHTML = "";
            for(const prop in data) {

                    let div = document.createElement('div');
                    div.innerHTML = `${prop}: ${data[prop]}`;
                    divData.appendChild(div);

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