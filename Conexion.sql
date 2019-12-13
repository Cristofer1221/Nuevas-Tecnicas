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



<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

