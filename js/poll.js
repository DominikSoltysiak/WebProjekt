var request = new XMLHttpRequest();
request.open('GET', 'http://localhost:3000/poll', true);
request.onload = function () {
  // Begin accessing JSON data here

}

// Send request
request.send();
var data = JSON.parse(this.response);

if (request.status >= 200 && request.status < 400) {
  data.forEach(movie => {
    console.log(movie.title);
  });
} else {
  console.log('error');
}
