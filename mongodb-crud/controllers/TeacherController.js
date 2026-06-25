const Teacher = require('../model/TeacherSchema.js'); // Import the Teacher model

exports.InsertFiveList = async (req, res) =>{
    try{
        const teacherList = [
            {
              name: "Dr. Ahmad",
              age: 45,
              subject: "Mathematics",
              department: "Science",
              salary: 85000
            },
            {
              name: "Ms. Sara Khan",
              age: 32,
              subject: "Computer Science",
              department: "Engineering",
              salary: 75000
            },
            {
              name: "Mr. Bilal Hussain",
              age: 40,
              subject: "Physics",
              department: "Science",
              salary: 80000
            },
            {
              name: "Mrs. Ayesha Siddiqui",
              age: 37,
              subject: "English",
              department: "Arts",
              salary: 72000
            },
            {
              name: "Dr. Usman Farooq",
              age: 50,
              subject: "Software Engineering",
              department: "Engineering",
              salary: 90000
            }
          ];
          
        const data = await Teacher.insertMany(teacherList); // Insert the teacherList into the database
        res.json({data})
    }catch(err){
        console.log(err); // Log any errors that occur
    }
}

// Create operation
exports.createTeacher = async (req, res) => {
    console.log("the reques tbody is the:", req.body);
    const { name, age, subject, department, salary } = req.body;
  
    try {
      const newTeacher = new Teacher({ name, age, subject, department, salary });
      await newTeacher.save();
      res.status(201).json({ message: 'Teacher created successfully', teacher: newTeacher });
    } catch (err) {
      res.status(500).json({ error: 'Failed to create teacher', details: err });
    }
  };

  
// Read Operation
exports.getAllTeachers = async (req, res) => {
    try {
      const teachers = await Teacher.find();
      res.json(teachers);
    } catch (err) {
      res.status(500).json({ error: 'Failed to fetch teachers', details: err });
    }
  };

  
//Update operation
exports.updateTeacher = async (req, res) => {
    const { id } = req.params;
    const { name, age, subject, department, salary } = req.body;
  
    try {
      const updatedTeacher = await Teacher.findByIdAndUpdate(
        id,
        { name, age, subject, department, salary },
        { new: true } // Return the updated document
      );
      if (!updatedTeacher) {
        return res.status(404).json({ error: 'Teacher not found' });
      }
      res.json({ message: 'Teacher updated successfully', teacher: updatedTeacher });
    } catch (err) {
      res.status(500).json({ error: 'Failed to update teacher', details: err });
    }
  };

//Delete Operation
exports.deleteTeacher = async (req, res) => {
    const { id } = req.params;
  
    try {
      const deletedTeacher = await Teacher.findByIdAndDelete(id);
      if (!deletedTeacher) {
        return res.status(404).json({ error: 'Teacher not found' });
      }
      res.json({ message: 'Teacher deleted successfully' });
    } catch (err) {
      res.status(500).json({ error: 'Failed to delete teacher', details: err });
    }
  };
  