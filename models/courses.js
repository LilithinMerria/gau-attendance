const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const courseSchema = new Schema({
    courseCode: {
        type: String,
        required: true,
        unique: true
    },
    courseName: {
        type: String,
        required: true,
        unique: true
    },
    semester: {
        type: String,
        required: true
    }
    
},{
    timestamps: true

});

var Course = mongoose.model('Course', courseSchema);
module.exports = Course;