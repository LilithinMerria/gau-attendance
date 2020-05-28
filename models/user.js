var mongoose = require('mongoose');
var Schema = mongoose.Schema;
var passportLocalMongoosee = require('passport-local-mongoose');

var User = new Schema({
   admin:{
        type: Boolean,
        default: false
    }
});

User.plugin(passportLocalMongoosee);

module.exports = mongoose.model('User', User);