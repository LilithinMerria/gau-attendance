const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const lecturerSchema = new Schema({
    lecturerId: {
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

var Lecturer = mongoose.model('Lecturer', lecturerSchema);
module.exports = Lecturer;