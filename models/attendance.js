const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const attendanceSchema = new Schema({
    studentId: {
        type: Number,
        required: true,
        unique: true
    },
    name: {
        type: String,
        required: true
        
    },
    surname: {
        type: String,
        required: true
    },
    courseCode: {
        type: String,
        required: true,
        unique: true
    },
    courseName: {
        type: String,
        required: true,
        
    },
    semester: {
        type: String,
        required: true
    },
    lecturerName: {
        type: String,
        required: true
        
    },
    lecturerSurname: {
        type: String,
        required: true
    }
},{
    timestamps: true

});/*student : {
        type: mongoose.Schema.Types.ObjectId, 
        ref: 'Student'
    },
    {
        timestamps: true
});*/

var Attendance = mongoose.model('Attendance', attendanceSchema);
module.exports = Attendance;
