<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Hello React!</title>
<script src="react-15.3.2/build/react.js"></script>
<script src="react-15.3.2/build/react-dom.js"></script>
<script src="https://unpkg.com/babel-core@5.8.38/browser.min.js"></script>
<script src="lifecycle.jsx"></script>
</head>
<body>
<div id="root"></div>
<div id="app"></div>
<script type="text/babel">
class Clock extends React.Component {
	
	constructor(props) {
		super(props);
		this.state = {date: new Date()};
	}
	
	componentDidMount() { /* lifecycle methods */
		this.timerID = setInterval(() => this.tick(),1000);
	}

	componentWillUnmount() {  /* lifecycle methods */
		clearInterval(this.timerID);
	}
	
	tick() {
		this.setState({
			date: new Date()
		});
		/* this.setState({
			testing: 'Hello fsaf as dfasdf asdfasfast estsa fsawdfsadf asetsa'
		}); */
	}


	render() {
		return (
			<div>
				<h1>Hello, world CLOCK!</h1>
				<h2>It is {this.state.date.toLocaleTimeString()}.</h2>
				<h2>test</h2>
			</div>
		);
	}
}

ReactDOM.render(<Clock />,document.getElementById('root'));

</script>
</body>
</html>