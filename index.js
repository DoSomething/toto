require('dotenv').config();

var Slack = require('slack-client');

slack = new Slack(process.env.SLACK_TOKEN, true, true);

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
  var channel = slack.getChannelGroupOrDMByID(message.channel);
  var user = slack.getUserByID(message.user);

  var username = '???';
  if(user && user.name) {
    username = '@' + user.name;
  }

  console.log('[RECEIVED] ' + username + ': ' + message.text);

  var response = message.text.split('').reverse().join('');
  channel.send(response)
});

/**
 * Handle errors...
 */
slack.on('error', function(error) {
  return console.error("Error: " + error);
});

slack.login();
