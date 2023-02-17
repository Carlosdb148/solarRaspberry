const express = require('express')
const app = express()
const port = 3000
var cors = require('cors')
app.use(cors())

app.use(cors())

app.get('/dataServer', (req, res) => {
  res.json({
    ejeX : 1,
    ejeY : 2,
    bateria : 30,
    sensor1 : 10,
    sensor2 : 1,
    sensor3 : 1,
    sensor4 : 1,
    imagenSol : "/img/sol17022023"
  })
})

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})