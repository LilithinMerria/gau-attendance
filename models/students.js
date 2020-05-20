const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const studentSchema = new Schema({
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
    }
},{
    timestamps: true

});

var Student = mongoose.model('Student', studentSchema);
module.exports = Student;