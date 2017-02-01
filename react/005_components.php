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
<script type="text/babel">

function Welcome(props) {
	return <h1>Hello, {props.name}</h1>;
}

function App() {
  return (
    <div className="users">
      <Welcome name="Sara" />
      <Welcome name="Cahal" />
      <Welcome name="Edite" />
      <Welcome name="Rahul" />
      <Welcome name="TAHIR" />
      <Welcome name="BHK" />
    </div>
  );
}

const element = <App />;

ReactDOM.render(element, document.getElementById('root'));


</script>
</body>
</html>