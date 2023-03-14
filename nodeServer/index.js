const express = require('express');
const jwt = require('jsonwebtoken');
const { exec } = require("child_process");
const bodyparser = require('body-parser');
require('dotenv').config();
const app = express();
// const Queue = require('bull');
const imageToBase64 = require('image-to-base64');
const port = 3000;

var commandRes;

app.use(bodyparser.json());

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})

// const queue = new Queue('command queue', {
//     redis: { host: "127.0.0.1", port: 1000 }
//   });

//   queue.process( async (job, done) => { // don't forget to remove the done callback!
//     executeCommand(job.data.command, done);
// });


app.post('/execute', async (req, res) => { 
   // commandRes = res;
    // let token = req.header.token;
    // if(token){
    //     jwt.verify(token, process.env.TOKEN_SECRET, (err, decoded) => {
    //         if (err) {
    //             //Echarlo fuera
    //         }else{
     //   const validate = async () => {
     //       await queue.add({ command : req.body.command});
     //   } 

     //   void validate();
                 executeCommand(req.body.command, res);
    //         }

    //     })
    // }else{
    //     //Echarlo fuera
    // }
    
})




app.get('/script', (req, res) => { 
    exec("python file.py sol.jpg", (error, stdout, stderr) => {
        if (error) {
            console.log('error: ' + error.message);
            res.send(error.message);
            return;
        }
        if (stderr) {
            console.log('stderr: ' + stderr);
            res.send(stderr);
            return ;
        }
        centerCamera(stdout, res);
    });
});

app.get('/image', (req, res) => { 
    //ejecutar comando para sacar la imagen
    imageToBase64("sol.jpg") // Path to the image
    .then(
        (response) => {
            res.send(response); 
        }
    )
    .catch(
        (error) => {
            res.send(error); 
        }
    )
});


function executeCommand(command, res){
    exec(command, (error, stdout, stderr) => {
        if (error) {
            console.log('error: ' + error.message);
            res.send(error.message);
            return;
        }
        if (stderr) {
            console.log('stderr: ' + stderr);
            res.send(stderr);
            return ;
        }
        console.log(stdout);
        res.send(stdout);
    });
}


function centerCamera(stdout, res){
    stdout = JSON.parse(stdout);
    
    res.send(stdout);
}


