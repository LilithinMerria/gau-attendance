var express = require('express');
const app = express();
var path = require('path');
var router = express.Router();
//app.use(express.static('public'));

/* GET home page. */
router.get('/', function(req, res, next) {
  // res.render('index', { title: 'Express' });
  res.sendfile(path.join(__dirname));
});

module.exports = router;
