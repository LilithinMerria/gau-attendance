const express = require('express');
const bodyParser = require('body-parser');
const lecturerRouter = express.Router();
const mongoose = require('mongoose');

const Lecturer = require('../models/lecturers');

lecturerRouter.use(bodyParser.json());

lecturerRouter.route('/')
.get((req, res, next) =>{
    Lecturer.find({})
    .then((lecturer) =>{
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(lecturer);
    }, (err) => next(err))
    .catch((err) => next(err));
})
.post((req, res, next) =>{
    Lecturer.create(req.body)
    .then((lecturer) =>{
        console.log("Lecturer created", lecturer);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(lecturer);
    }, (err) =>next (err))
    .catch((err) => next(err));
})
.put((req, res, next) =>{
    res.statusCode = 403;
    res.end('Put is not supported on /Lectures');
})
.delete((req, res, next) =>{
    Lecturer.remove({})
    .then((resp) =>{
        res.statusCode = 200;
        res.setHeader('Context-Type', 'application/json');
        res.json(lecturer);
    }, (err) =>next (err))
    .catch((err) => next(err));
});

module.exports = lecturerRouter;