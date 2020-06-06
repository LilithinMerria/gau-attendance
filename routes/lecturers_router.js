const express = require('express');
const bodyParser = require('body-parser');
const lecturerRouter = express.Router();
const mongoose = require('mongoose');
const authenticate = require('../authenticate');

const Lecturer = require('../models/lecturers');

lecturerRouter.use(bodyParser.json());

lecturerRouter.route('/lecturers')
.get((req, res, next) =>{
    Lecturer.find(req.query)
    .then((lecturer) =>{
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(lecturer);
    }, (err) => next(err))
    .catch((err) => next(err));
})
.post(authenticate.verifyUser, (req, res, next) =>{
    Lecturer.create(req.body)
    .then((lecturer) =>{
        console.log("Lecturer created", lecturer);
        res.statusCode = 200;
        res.setHeader('Content-Type', 'application/json');
        res.json(lecturer);
    }, (err) =>next (err))
    .catch((err) => next(err));
})
.put(authenticate.verifyUser, (req, res, next) =>{
    res.statusCode = 403;
    res.end('Put is not supported on /Lectures');
})
.delete(authenticate.verifyUser, (req, res, next) =>{
    Lecturer.remove({})
    .then((resp) =>{
        res.statusCode = 200;
        res.setHeader('Context-Type', 'application/json');
        res.json(lecturer);
    }, (err) =>next (err))
    .catch((err) => next(err));
});

module.exports = lecturerRouter;