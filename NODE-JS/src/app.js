const express = require('express');
const { fork } = require('child_process');
const app = express();

app.get('/isprime', (req, res) => {
   
    const childProcess = fork( 'src/isPrime.js' );
    childProcess.send({"number": parseInt(req.query.number)});
    childProcess.on("message", message =>res.send(message) )
   
})

app.listen(8000,() => console.log("Server Running"));

