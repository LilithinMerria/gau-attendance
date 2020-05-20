const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const semesterSchema = new Schema({
    semesterStart: {
        type: Date,
        required: true,
        
    },
    semesterEnd: {
        type: Date,
        required: true,
        
        
    }
    
},{
    timestamps: true

});

var Semester = mongoose.model('Semester', semesterSchema);
module.exports = Semester;