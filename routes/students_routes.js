const express = require('express');
const bodyParser = require('body-parser');
const studentRouter = express.Router();
const mongoose = require('mongoose');

const Student = require('../models/students');

studentRouter.use(bodyParser.json());

studentRouter.route('/')
.get((req, res, next) =>{
    Student.find({})
    .then((student) =>{
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(student);
    }, (err) => next(err))
    .catch((err) => next(err));
})
.post((req, res, next) =>{
    Student.create(req.body)
    .then((student) =>{
        console.log("Student created", student);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(student);
    }, (err) =>next (err))
    .catch((err) => next(err));
})
.put((req, res, next) =>{
    res.statusCode = 403;
    res.end('Put is not supported on /Students');
})
.delete((req, res, next) =>{
    Student.remove({})
    .then((resp) =>{
        res.statusCode = 200;
        res.setHeader('Context-Type', 'application/json');
        res.json(student);
    }, (err) =>next (err))
    .catch((err) => next(err));
});

module.exports = studentRouter;