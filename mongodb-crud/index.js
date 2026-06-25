const express = require('express');
const mongoose = require('mongoose');
const app = express();
const port = 3000;
const cors = require('cors');
app.use(cors());

const mongoDB = 'mongodb://localhost:27017/school';  // Local MongoDB instance

app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// Connect to MongoDB
mongoose.connect(mongoDB)
  .then(() => {
    console.log('Connected to MongoDB');
  })
  .catch(err => {
    console.error('MongoDB connection error:', err);
  });

const studentRoute = require('./route/studentRoute.js'); // Import the student route
app.use('/student', studentRoute); // Use the student route
  

const TeacherRoute = require('./route/TeacherRoute.js'); // Import the student route
app.use('/teacher', TeacherRoute); // Use the student route

// Start the server
app.listen(port, () => {
  console.log(`Welcome to server: http://localhost:${port}`);
});
