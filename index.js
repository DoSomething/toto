require('dotenv').config();

var express = require('express');
var bodyParser = require('body-parser');
var request = require('superagent');
var Slack = require('slack-client');


var app = express();
var slack = new Slack(process.env.SLACK_TOKEN, true, true);

app.use(bodyParser.json());
app.get('/', function(req, res) {
  // res.send('Hello Seattle\n');
  // console.log(req);
  // return;
});

/**
 * Handle requests that come from the laravel app.
 */
app.post('/post', function(req, res) {
   // console.log(req.body);
   var user = slack.getUserByName(req.body.user.slack_name);
   slack.openDM(user.id, function(dm) {
     var channel = slack.getChannelGroupOrDMByID(dm.channel.id);
     channel.send(req.body.message.message);
  });
   res.send('yeah');
});
app.listen(3001);




// Notes:
// =====
// openDM: (user_id, callback)
//

/**
 * When joining Slack...
 */
slack.on('open', function() {
  console.log('Welcome to Slack. You are @' + slack.self.name + ' of ' + slack.team.name + '.');
});

/**
 * On receiving a message...
 */
slack.on('message', function(message) {
  // If it's not a DM, don't respond.
  // console.log(message.channel);
  if (message.channel[0] !== 'D') {
    return;
  }

  var channel = slack.getChannelGroupOrDMByID(message.channel);

  if (message.text.indexOf("fetch") != -1) {
    var words = message.text.split(' ')
    words.shift();
    var whatToFetch = words.join('');

    // Search the app to see what it returns.
    request.get('http://toto.app:80/search/' + whatToFetch)
      .end(function(err, res) {
        if(err) return console.error(err);
        channel.send(res.body.message);
      });
  }

  if (message.text.indexOf("help") != -1) {
    channel.send('Not sure what you need? Ask toto to fetch to find things');
  }

});

/**
 * Handle errors...
 */
slack.on('error', function(error) {
  return console.error("Error: " + error);
});

slack.login();
