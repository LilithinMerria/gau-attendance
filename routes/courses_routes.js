const express = require('express');
const bodyParser = require('body-parser');
const courseRouter = express.Router();
const mongoose = require('mongoose');
const authenticate = require('../authenticate');

const Course = require('../models/courses');

courseRouter.use(bodyParser.json());

courseRouter.route('/courses')
.get((req, res, next) =>{
    Course.find({})
    .then((course) =>{
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(course);
    }, (err) => next(err))
    .catch((err) => next(err));
})
.post(authenticate.verifyUser, (req, res, next) =>{
    Course.create(req.body)
    .then((course) =>{
        console.log("Course created", course);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(course);
    }, (err) =>next (err))
    .catch((err) => next(err));
})
.put(authenticate.verifyUser, (req, res, next) =>{
    res.statusCode = 403;
    res.end('Put is not supported on /Courses');
})
.delete(authenticate.verifyUser, (req, res, next) =>{
    Course.remove({})
    .then((resp) =>{
        res.statusCode = 200;
        res.setHeader('Context-Type', 'application/json');
        res.json(course);
    }, (err) =>next (err))
    .catch((err) => next(err));
});

module.exports = courseRouter;