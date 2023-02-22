const express = require('express');
const jwt = require('jsonwebtoken');
const { exec } = require("child_process");
require('dotenv').config();
const app = express();
const port = 3000;

app.post('/execute', (req, res) => { 
    // let token = req.header.token;
    // if(token){
    //     jwt.verify(token, process.env.TOKEN_SECRET, (err, decoded) => {
    //         if (err) {
    //             //Echarlo fuera
    //         }else{
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


app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})


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


