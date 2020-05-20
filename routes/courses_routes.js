const express = require('express');
const bodyParser = require('body-parser');
const courseRouter = express.Router();
const mongoose = require('mongoose');

const Course = require('../models/courses');

courseRouter.use(bodyParser.json());

courseRouter.route('/')
.get((req, res, next) =>{
    Lecturer.find({})
    .then((course) =>{
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(course);
    }, (err) => next(err))
    .catch((err) => next(err));
})
.post((req, res, next) =>{
    Course.create(req.body)
    .then((course) =>{
        console.log("Course created", course);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(course);
    }, (err) =>next (err))
    .catch((err) => next(err));
})
.put((req, res, next) =>{
    res.statusCode = 403;
    res.end('Put is not supported on /Courses');
})
.delete((req, res, next) =>{
    Course.remove({})
    .then((resp) =>{
        res.statusCode = 200;
        res.setHeader('Context-Type', 'application/json');
        res.json(course);
    }, (err) =>next (err))
    .catch((err) => next(err));
});

module.exports = courseRouter;