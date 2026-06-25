const Student = require('../model/studentSchema'); // Import the Student model
exports.getAllStudents = async (req, res) => {
    try {
        // Create a new student
        const newStudent = new Student({
            name: 'Zahir ahmad',
            age: 18,
            department: 'Computer Software',
            marks: 80,
            registrationNumber: '23MDSWE245',
        });

        await newStudent.save();  // Save the student to the database

        // Fetch all students from the database
        const students = await Student.find();

        res.json(students); // Send all students as JSON
    } catch (err) {
        res.status(500).send('Error fetching or saving students: ' + err);
    }
};

//Task Number = 04
exports.addMultipleStudents = async (req, res) => {
    try {
        const studentsToInsert = [
            {
                name: 'Zahir Ahmad',
                age: 18,
                department: 'Computer Software',
                marks: 80,
                registrationNumber: '23MDSWE245'
            },
            {
                name: 'Ayesha Khan',
                age: 19,
                department: 'Electrical Engineering',
                marks: 85,
                registrationNumber: '23ELEC102'
            },
            {
                name: 'Ali Raza',
                age: 20,
                department: 'Mechanical Engineering',
                marks: 78,
                registrationNumber: '23MECH303'
            },
            {
                name: 'Fatima Noor',
                age: 18,
                department: 'Computer Science',
                marks: 90,
                registrationNumber: '23CSCI150'
            },
            {
                name: 'Ahmed Bilal',
                age: 21,
                department: 'Civil Engineering',
                marks: 75,
                registrationNumber: '23CIVL225'
            }
        ];

        await Student.insertMany(studentsToInsert);

        res.send('Five students inserted successfully');
    } catch (err) {
        res.status(500).send('Error inserting students: ' + err);
    }
};

//Task Number = 05
exports.addMultipleStudents2 = async (req, res) => {
    try {
        const studentsToInsert = [
            {
                name: 'Zainab Fatima',
                department: 'Computer Science',
                marks: 85,
                registrationNumber: '23CSCI180'
            },
            {
                name: 'Imran Ali',
                department: 'Electrical Engineering',
                marks: 92,
                registrationNumber: '23ELEC210'
            }
        ];

        await Student.insertMany(studentsToInsert);

        res.send('Two more students inserted successfully');
    } catch (err) {
        res.status(500).send('Error inserting students: ' + err);
    }
};


//Task number = 06 insert Ten student At once
exports.addMultipleStudents10 = async (req, res) => {
    try {
        const studentsToInsert = [
            {
                name: 'Aisha Khan',
                age: 20,
                department: 'Computer Science',
                marks: 88,
                registrationNumber: '23CSCI250'
            },
            {
                name: 'Sara Ahmed',
                age: 19,
                department: 'Mechanical Engineering',
                marks: 78,
                registrationNumber: '23MECH320'
            },
            {
                name: 'Hassan Raza',
                age: 22,
                department: 'Electrical Engineering',
                marks: 85,
                registrationNumber: '23ELEC280'
            },
            {
                name: 'Rahim Khan',
                age: 21,
                department: 'Civil Engineering',
                marks: 90,
                registrationNumber: '23CIVL300'
            },
            {
                name: 'Nadia Ali',
                age: 20,
                department: 'Computer Science',
                marks: 92,
                registrationNumber: '23CSCI350'
            },
            {
                name: 'Yasir Khan',
                age: 23,
                department: 'Mechanical Engineering',
                marks: 80,
                registrationNumber: '23MECH400'
            },
            {
                name: 'Sadia Ahmed',
                age: 19,
                department: 'Electrical Engineering',
                marks: 88,
                registrationNumber: '23ELEC420'
            },
            {
                name: 'Abdullah Raza',
                age: 22,
                department: 'Civil Engineering',
                marks: 75,
                registrationNumber: '23CIVL450'
            },
            {
                name: 'Hira Khan',
                age: 20,
                department: 'Computer Science',
                marks: 85,
                registrationNumber: '23CSCI500'
            },
            {
                name: 'Khalid Ahmed',
                age: 21,
                department: 'Mechanical Engineering',
                marks: 90,
                registrationNumber: '23MECH550'
            }
        ];

        await Student.insertMany(studentsToInsert);

        res.send('Ten students inserted successfully');
    } catch (err) {
        res.status(500).send('Error inserting students: ' + err);
    }
};

//Task Number = 07
exports.findStudent = async (req, res) => {
    try {
        const findAllStudent = await Student.find();
        res.json(findAllStudent);
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number = 08
exports.findStudentAge = async (req, res) => {
    try {
        const findStudentAge = await Student.find({ age: { $gt: 18 } });
        res.json(findStudentAge);
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number = 09
exports.findStudentMarks = async (req, res) => {
    try {
        const findStudentMarks = await Student.find({ age: { $gt: 20 }, marks: { $lt: 50 } });
        res.json(findStudentMarks);
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number = 10
exports.findStudentMarks = async (req, res) => {
    try {
        const findStudentMarks = await Student.find({
            $or: [
                { age: { $gt: 20 } },
                { marks: { $gt: 50 } }
            ]
        });
        res.json(findStudentMarks);
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number = 11
exports.updateStudentMarks = async (req, res) => {
    try {
        const updateStudentMarks = await Student.updateOne({ name: 'Muhammad khalil' }, { $set: { marks: 95 } });
        res.json('The student name is update successfully Update by the given number');
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number = 12
exports.deleteStudentName = async (req, res) => {
    try {
        const deleteStudentName = await Student.deleteOne({ name: 'Muhammad khalil' });
        res.json('The Student is Deleted is successfully by your provide name ');
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number = 13
exports.addActiveField = async (req, res) => {
    try {
        const addActiveField = await Student.updateMany({}, { $set: { status: 'active' } });
        res.json('The Active state is add to there all student');
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number = 14
exports.findCSStudent = async (req, res) => {
    try {
        const CSStudent = await Student.find({ department: 'Computer Science' });
        console.log(CSStudent)
        res.json({
            message: 'The list of the Computer Science students is:',
            students: CSStudent
        });
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number = 15
exports.findOtherStudent = async (req, res) => {
    try {
        const otherStudent = await Student.find({ department: { $ne: 'Computer Science' } });
        console.log(otherStudent)
        res.json({
            message: 'The list of the Computer Science students is:',
            students: otherStudent
        });
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number 16
exports.AverageMarksByDepartment = async (req, res) => {
    try {
        const result = await Student.aggregate([
            {
                $group: {
                    _id: "$department",
                    averageMarks: { $avg: "$marks" }
                }
            }
        ]);
        res.json(result);
    } catch (err) {
        res.status(500).send('Error calculating average marks: ' + err);
    }
};

//Task Number = 17
exports.sortByMarks = async (req, res) => {
    try {
        const sortByMarks = await Student.find().sort({ marks: 1 });
        res.json(sortByMarks);
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number = 18
exports.findMarks = async (req, res) => {
    try {
        const highScoringStudents = await Student.aggregate([
            {
              $match: {
                marks: { $gt: 80 }
              }
            }
          ]);
        res.json(highScoringStudents);
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};

//Task Number = 19
exports.findGroupByDepartment = async (req, res) => {
    try {
        const groupByDepartment = await Student.aggregate([
            {
              $group: {
                _id: "$department",
                count: { $sum: 1 }
              }
            }
          ]);
        res.json(groupByDepartment);
    } catch (err) {
        res.status(500).send('Error fetching students by department: ' + err);
    }
};