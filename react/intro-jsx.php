<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Hello React!</title>
<script src="react-15.3.2/build/react.js"></script>
<script src="react-15.3.2/build/react-dom.js"></script>
<script src="https://unpkg.com/babel-core@5.8.38/browser.min.js"></script>
<script type="text/babel" src="custom-jsx.js"></script>
</head>
<body>
<div id="app"></div>
<script type="text/babel">

function getGreeting(user) {
  if (user) {
    return <h1>Hello, {formatName(user.name)}!</h1>;
  } else {
    return <h1>Hello, Stranger.</h1>;
  }
}

const user = {
	firstName: 'Harper',
	lastName: 'Perez'
};


const element = (<h1>Hello, {formatName(user)}!</h1>

);
ReactDOM.render(element, document.getElementById('app'));
</script>
</body>
</html>