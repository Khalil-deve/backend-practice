const express = require('express');
const router = express.Router();
const studentController = require('../controllers/StudentController');
//task Number = 03
router.get('', studentController.getAllStudents); // Route to get all students

//Task Number = 04
router.get('/add-multiple', studentController.addMultipleStudents);

//Task Number = 05 Two more Student Without age attribute
router.get('/add-multiple-2', studentController.addMultipleStudents2);

//Task Number = 06 ten student at once
router.get('/add-multiple-ten', studentController.addMultipleStudents10);

//Task Number = 07 find() all student
router.get('/find', studentController.findStudent);

//Task Number = 08 find() those student whose age > 20
router.get('/find-student', studentController.findStudentAge);

//Task Number = 09 find() those student whose age > 20 But marks < 50
router.get('/find-student-age', studentController.findStudentMarks);

//Task Number = 10 find() those student whose age > 20 or marks > 50
router.get('/find-student-marks', studentController.findStudentMarks);

//Task Number = 11 Update student marks by name
router.get('/update-student', studentController.updateStudentMarks);

//Task Number = 12 Delete student by name
router.get('/delete-student', studentController.deleteStudentName);

//Task Number = 13 add new field active.
router.get('/add-active', studentController.addActiveField);

//Task Number = 14 Find all student which are in CS department
router.get('/find-cs', studentController.findCSStudent);

//Task Number = 15 Find all student which are not in CS department
router.get('/find-other', studentController.findOtherStudent);

//Task Number = 16 Find average marks by department
router.get('/find-average', studentController.AverageMarksByDepartment);

//Task Number = 17 Sort by student by marks
router.get('/sort-by-marks', studentController.sortByMarks);

//Task Number = 18 find all student whose marks is greater than 80
router.get('/find-marks', studentController.findMarks);

//Task Number = 19 find number of student group by department
router.get('/find-group', studentController.findGroupByDepartment);

module.exports = router; // Export the router