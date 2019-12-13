import React from 'react'
import axios from 'axios';
import $ from 'jquery'

class PostForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {value: ''};
	///se realiza la coneccion 
    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    this.setState({value: event.target.value});
  }
// se declaran las variables importantes 
  handleSubmit(event) {
    event.preventDefault();
    let contacto = $("#").val()
     axios.post('http://localhost:8000/contactos', {
       contacto: contacto,
     })
     .then(function (response) {
       console.log(response);
     })
     .catch(function (error) {
       console.log(error);
     });
  }

  render() {
    return (
      <div className="container">
        <h1>Registrar Nota</h1>
        <form onSubmit={this.handleSubmit}>
          <label>
            <input type="text" name="" className="form-control" id="" onChange={this.handleChange} placeholder="Nombre" />
		
          </label>
		  <label>
      <input type="text" name="" className="form-control" id="" onChange={this.handleChange} placeholder="Correo" />

          </label>
		  <label>
            <input type="text" name="" className="form-control" id="" onChange={this.handleChange} placeholder="Telefono" />

          </label>
          <input type="submit" value="" className="btn btn-info" />
        </form>
      </div>
    );
  }
}

export default PostForm

