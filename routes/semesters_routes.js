const express = require('express');
const bodyParser = require('body-parser');
const semesterRouter = express.Router();
const mongoose = require('mongoose');

const Semester = require('../models/semesters');

semesterRouter.use(bodyParser.json());

semesterRouter.route('/')
.get((req, res, next) =>{
    Semester.find({})
    .then((semester) =>{
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(semester);
    }, (err) => next(err))
    .catch((err) => next(err));
})
.post((req, res, next) =>{
    Semester.create(req.body)
    .then((semester) =>{
        console.log("Semester created", semester);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(semester);
    }, (err) =>next (err))
    .catch((err) => next(err));
})
.put((req, res, next) =>{
    res.statusCode = 403;
    res.end('Put is not supported on /Semesters');
})
.delete((req, res, next) =>{
    Semester.remove({})
    .then((resp) =>{
        res.statusCode = 200;
        res.setHeader('Context-Type', 'application/json');
        res.json(semester);
    }, (err) =>next (err))
    .catch((err) => next(err));
});

module.exports = semesterRouter;