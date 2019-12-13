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
        <h1>Componentes</h1>
        <form onSubmit={this.handleSubmit}>
          <label>
            <input type="text" name="componente1" className="form-control" id="" onChange={this.handleChange} placeholder="Nombre" />
		
          </label>
		  <label>
      <input type="text" name="componente2" className="form-control" id="" onChange={this.handleChange} placeholder="Correo" />

          </label>
		  <label>
            <input type="text" name="componente3" className="form-control" id="" onChange={this.handleChange} placeholder="Telefono" />

          </label>
          <input type="submit" value="componente4" className="btn btn-info" />
        </form>
      </div>
    );
  }
}

export default PostForm

APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

