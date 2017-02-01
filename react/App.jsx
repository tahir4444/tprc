class App extends React.Component {
	constructor() {
		super();
		
		this.state = {
			data: 
			[
				{
					"id": 1,
					"name": "Foo",
					"age": "20",
				},
				{
					"id": 2,
					"name": "Bar",
					"age": "30",
				},
				{
					"id": 3,
					"name": "Baaz!",
					"age": "40",
				}
			]
		}
	}
	
   render() {
	
		var myStyle = {
         fontSize: 100,
         color: '#FF0000'
      }
	
      return (
         <div>
            <Header />
				  <table>
					<tbody>
						{this.state.data.map((person, i) => <TableRow key = {i} data = {person} />)}
					</tbody>
				</table>
         </div>
			
      );
   }
}

class Header extends React.Component {
	render() {
		return (
			<div>
            <h1>Header</h1>
         </div>
		);
	}
}

/* class Content extends React.Component {
	render() {
		return (
			
			<table>
				<body>
					{App.state.data.map((person, i) => <TableRow key = {i} data = {person} />)}
					
				</body>
			</table>
		
		);
	}
} */

class TableRow extends React.Component {
	render () {
		return (
		
			<tr>
				<td>{this.props.data.id}</td>
				<td>{this.props.data.name}</td>
				<td>{this.props.data.age}</td>
			</tr>
		
		);
	}
}

class Footer extends React.Component {
	render () {
		return (
		
			<div className="footer">
				<p>footer content</p>
			</div>
		);
	}
}

