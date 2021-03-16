var nodemailer = require('nodemailer');
var nombre = name;
var transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'edsunadrian@gmail.com',
    pass: 'Garunimo03.'
  }
});

var mailOptions = {
  from: 'edsunadrian@gmail.com',
  to: 'edinssonadrianmc@ufps.edu.co',
  subject: 'Sending Email using Node.js',
  text: 'That was easy!'
};

transporter.sendMail(mailOptions, function(error, info){
  if (error) {
    console.log(error);
  } else {
    console.log('Email sent: ' + info.response);
  }
});