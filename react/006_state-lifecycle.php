<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Hello React!</title>
<script src="react-15.3.2/build/react.js"></script>
<script src="react-15.3.2/build/react-dom.js"></script>
<script src="https://unpkg.com/babel-core@5.8.38/browser.min.js"></script>
</head>
<body>
<div id="root"></div>
<div id="app"></div>
<script type="text/babel">
/* function tick() {
  const element = (
    <div>
      <h1>Hello, world TICK!</h1>
      <h2>It is {new Date().toLocaleTimeString()}.</h2>
    </div>
  );
  ReactDOM.render(
    element,
    document.getElementById('root')
  );
}

setInterval(tick, 1000); */


function Clock(props) {
  return (
    <div>
      <h1>Hello, world CLOCK!</h1>
      <h2>It is {props.date.toLocaleTimeString()}.</h2>
    </div>
  );
}

function tick() {
  ReactDOM.render(
    <Clock date={new Date()} />,
    document.getElementById('app')
  );
}

setInterval(tick, 1000);


</script>
</body>
</html>