var mongoose = require('mongoose');
var Schema = mongoose.Schema;
var passportLocalMongoosee = require('passport-local-mongoose');

var User = new Schema({
    username: {
        type: String,
        required: true
    },
    password: {
        type: String,
        required: true
    },
   admin:{
        type: Boolean,
        default: false
    }
});

User.plugin(passportLocalMongoosee);

module.exports = mongoose.model('User', User);