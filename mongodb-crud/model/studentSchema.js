const mongoose = require('mongoose');
const { Schema } = mongoose;
const studentSchema = new Schema({
  name: {
    type: String,
    required: true,
  },
  age: {
    type: Number,
  },
  department: {
    type: String,
    required: true,
  },
  marks: {
    type: Number,
    required: true
  }, 
  registrationNumber: {
    type: String,
    required: true
  },
  //Task Number = 13 
  status: {
    type: String,
  }
});

const Student = mongoose.model('Student', studentSchema);

module.exports = Student;