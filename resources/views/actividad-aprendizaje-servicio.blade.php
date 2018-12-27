@extends('plantillaGeneral')

@section('tittle')
    <title>Registrar Actividad Aprendizaje + Servicio</title>
@endsection
@section('form')
    </br>

    <div class="container">
        <div class="card">
            <h4 class="card-header">Registrar Actividad Aprendizaje + Servicio</h4>
            <div class="card-body">
                <div class="container">
                    <form>
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="exampleFormControlInput1">Asignatura</label>
                                <input class="form-control" id="asignatura" placeholder="Ejemplo: Programación 2">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="exampleFormControlInput1">Nombre Profesor</label>
                                <input class="form-control" id="exampleFormControlInput1"
                                       placeholder="Ejemplo: Victor Flores">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="exampleFormControlInput1">Cantidad Estudiantes</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="exampleFormControlInput1">Nombre Socio Comunitario</label>
                                <input class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: K">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Semestre y Año</label>
                                <input class="form-control" id="semestre" placeholder="Ejemplo: 2016-I">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Evidencia: Archivo (.pdf) Acuerdo Firmado por
                                    Profesor Asignatura y Representante Socio Comunitario</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </form>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection

