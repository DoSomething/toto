require('dotenv').config();

var Slack = require('slack-client');

slack = new Slack(process.env.SLACK_TOKEN, true, true);


// Notes:
// =====
// openDM: (user_id, callback)
//

/**
 * When joining Slack...
 */
slack.on('open', function() {
  console.log('Welcome to Slack. You are @' + slack.self.name + ' of ' + slack.team.name + '.');

  // Send a test message to Dave :japanese_ogre:
  // var userId = 'D0LE0P0BH';
  // var channel = slack.getChannelGroupOrDMByID(userId);
  // channel.send('Hey nerd!');
});

/**
 * On receiving a message...
 */
slack.on('message', function(message) {
  // If it's not a DM, don't respond.
  // console.log(message.channel);
  // if (message.channel[0] !== 'D') {
  //   return;
  // }

  var channel = slack.getChannelGroupOrDMByID(message.channel);
  var response = message.text.split('').reverse().join('');
  channel.send('woof');
});

/**
 * Handle errors...
 */
slack.on('error', function(error) {
  return console.error("Error: " + error);
});

slack.login();
