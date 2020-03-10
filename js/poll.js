var request = new XMLHttpRequest();
request.open('GET', 'http://localhost:3000/poll', true);
request.onload = function () {
  // Begin accessing JSON data here

}

// Send request
request.send();
