require('dotenv').config();


var Slack = require('slack-client');

slack = new Slack(process.env.SLACK_TOKEN, true, true);

// SLACK IT TI KCALS
require('./simple_reverse')(slack);

slack.on('error', function(error) {
  return console.error("Error: " + error);
});

slack.login();
