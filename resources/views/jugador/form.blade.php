<table >

    <tr > <td> {{ Form::text('nombre', $jugador->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Digite su Nombre']) }}</td>
      <td >{!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}</td>
    </tr> <br><br>
    <tr>

     <td> {{ Form::text('email', $jugador->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),  'placeholder' => 'Digite su Email']) }}</td>
      <td>{!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}</td>
    </tr>






            <table >

          <tr > <td> {{ Form::text('nombre', $jugador->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Digite su Nombre']) }}</td>
            <td >{!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}</td>
          </tr> <br><br>
          <tr>

           <td> {{ Form::text('email', $jugador->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''),  'placeholder' => 'Digite su Email']) }}</td>
            <td>{!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}</td>
          </tr>


<tr><div class="box-footer mt20">
  <td><center><br><br><button type="submit" class="btn btn-primary" style="WIDTH: 40%; HEIGHT: 32px;  COLOR: white;
      BACKGROUND-COLOR: black"><font color=yellow> CREAR</button></center></td>
</div></tr>

</table>
