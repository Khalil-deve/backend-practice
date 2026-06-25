# 📚 MongoDB Student and Teacher Management Project (Backend Connected)

This project covers basic to intermediate MongoDB operations, fully connected with a Node.js backend, including CRUD operations, aggregations, sorting, and data management for two collections: `students` and `teachers`.

---

## 🛠️ Features Completed

### Database Tasks:
- Created a database `schools`.
- Created a collection named `students`.
- Inserted a student with fields: `name`, `age`, `department`, `marks`, and `rollNo`.
- Inserted five more students with the same fields.
- Inserted two students without the `age` field.
- Inserted 10 students at once.
- Fetched all students.
- Fetched students whose:
  - `age` > 20
  - `age` > 20 but `marks` < 50
  - `age` > 20 **or** `marks` > 50
- Updated a student's `marks` by `name`.
- Deleted a student by `name`.
- Added a new field `Active` to all students.
- Fetched:
  - Students in **Computer Science** department.
  - Students **not** in Computer Science department.
- Found average `marks` grouped by `department`.
- Sorted students by `marks`.
- Aggregated students whose `marks` > 80.
- Aggregated student count by `department`.

### Teachers Collection:
- Created a new collection `teachers`.
- Inserted 5 teachers into it.
- Performed full CRUD (Create, Read, Update, Delete) operations on `teachers`.

---

## ⚙️ Backend Integration

- Connected MongoDB database with Node.js backend.
- Used Express.js for building APIs.
- Created RESTful APIs to perform all above operations.
- Handled requests like:
  - Add new students/teachers
  - Get all students/teachers
  - Update student/teacher details
  - Delete student/teacher by ID or name
- Implemented basic error handling for API requests.

---

## 📋 Technologies Used

- Node.js
- Express.js
- MongoDB
- Mongoose (MongoDB ODM)
- Postman (for API testing)

---

## 📈 Skills Practiced

- Backend API development
- MongoDB queries and aggregations
- REST API design
- Full CRUD operations
- Connecting backend to database using Mongoose
- Error handling and validation

---

## 📸 Project Preview

> This project demonstrates full-stack skills by connecting a powerful backend with a real database, showcasing the complete flow of data operations.

---

## 🚀 Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/Khalil-deve/backend-mongodb-operations.git
   ```
2. Install dependencies:
   ```bash
   npm install
   ```
3. Run the server:
   ```bash
   npm start
   ```
4. Test APIs using Postman or any API client.




