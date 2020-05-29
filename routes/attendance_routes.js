const express = require('express');
const bodyParser = require('body-parser');
const attendanceRouter = express.Router();
const mongoose = require('mongoose');
const authenticate = require('../authenticate');

const Attendance = require('../models/attendance');

courseRouter.use(bodyParser.json());

attendanceRouter.route('/attendances')
.get((req, res, next) =>{
    Attendance.find({})
    .then((attendance) =>{
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(attendance);
    }, (err) => next(err))
    .catch((err) => next(err));
})
.post(authenticate.verifyUser, (req, res, next) =>{
    Attendance.create(req.body)
    .then((attendance) =>{
        console.log("Course created", attendance);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(attendance);
    }, (err) =>next (err))
    .catch((err) => next(err));
})
.put(authenticate.verifyUser, (req, res, next) =>{
    res.statusCode = 403;
    res.end('Put is not supported on /Attendances');
})
.delete(authenticate.verifyUser, (req, res, next) =>{
    Attendance.remove({})
    .then((resp) =>{
        res.statusCode = 200;
        res.setHeader('Context-Type', 'application/json');
        res.json(attendance);
    }, (err) =>next (err))
    .catch((err) => next(err));
});

module.exports = attendanceRouter;