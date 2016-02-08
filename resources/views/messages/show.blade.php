<!DOCTYPE html>
<html>
  <head>
    <title>Message {{ $message->title }}</title>
  </head>
  <body>
    <h1>Message {{ $message->id }}</h1>
    <ul>
      <li>Message Body: {{ $message->message }}</li>
      <li>Day to send: {{ $message->day_to_send }}</li>
      <li>Time to Send: {{ $message->time_to_send }}</li>
      <li>Tags: {{ $message->tags }}</li>
    </ul>
  </body>
</html