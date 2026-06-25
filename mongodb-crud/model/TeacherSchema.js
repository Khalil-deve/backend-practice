const mongoose = require('mongoose');

//Task Number = 20
// Define the Teacher Schema
const teacherSchema = new mongoose.Schema({
  name: {
    type: String,
    required: true
  },
  age: Number,
  subject: {
    type: String,
    required: true
  },
  department: String,
  salary: Number,
});

// Create the Teacher model
const Teacher = mongoose.model('Teacher', teacherSchema);

module.exports = Teacher;
