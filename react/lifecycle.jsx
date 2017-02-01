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
