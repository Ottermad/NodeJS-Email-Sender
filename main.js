var bodyParser = require('body-parser')
var express = require('express');
var app     = express();
var sendgrid  = require('sendgrid')('####','##');

app.use(bodyParser());

app.post('/myaction', function(req, res) {
 sendgrid.send({
    to:       req.body.recipent,
    from:     req.body.email,
    subject:  req.body.subject,
    text:     req.body.emailbody
  }, function(err, json) {
    if (err) { return console.error(err); }
    console.log(json);
  });
    
  res.redirect("http://attwoodthomas.me/test.php?to=" + req.body.recipent + "&from=" + req.body.email + "&subject=" + req.body.subject + "&text=" + req.body.emailbody);;
  console.log(req.body.email);
  
});

app.listen(8080, function() {
  console.log('Server running at http://127.0.0.1:8080/');
});

