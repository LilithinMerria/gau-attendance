var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
var session = require('express-session');
var FileStore = require('session-file-store')(session);
var passport = require('passport');
var authenticate = require('./authenticate');
var config = require('./config');

var indexRouter = require('./routes/index');
var usersRouter = require('./routes/users');
var lecturerRouter = require('./routes/lecturers_router');
var studentRouter = require('./routes/students_routes');
var courseRouter = require('./routes/courses_routes');
var semesterRouter = require('./routes/semesters_routes');
var attendanceRouter = require('./routes/attendance_routes');

const mongoose = require('mongoose');
mongoose.Promise = require('bluebird');
const Lecturer = require('./models/lecturers');
const Student = require('./models/students');
const Course = require('./models/courses');
const Semester = require('./models/semesters');
const Attendance = require('./models/attendance');

const url = config.mongoUrl;
const connect = mongoose.connect(url);
connect.then((db) =>{
  console.log("Connect correctly at the server");
}, (err) => {console.log(err);});

// connect to the local server or online host
var app = express();
app.listen(process.env.PORT || 3000, () =>{
  console.log("Server is running correctly!");
});

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
//app.use(cookieParser('cookies-yayyy'));

app.use(passport.initialize());

app.use('/', indexRouter);
app.use('/users', usersRouter);

//accessing the public folder
app.use(express.static(path.join(__dirname, '/public')));

app.use('/lectures', lecturerRouter);
app.use('/students', studentRouter);
app.use('/courses', courseRouter);
app.use('/semesters', semesterRouter);
app.use('/attendances', attendanceRouter);

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
//"start": "node ./bin/www"  (just saving this code here if I want to the application to start on my local machine)

