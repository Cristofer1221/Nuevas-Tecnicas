

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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}

