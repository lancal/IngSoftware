@extends('plantillaGeneral')


@section('tittle')
    <title>Registrar Actividad de Extensión</title>

@endsection

@section('form')
    </br>

    <div class="container">
        <div class="card">
            <h4 class="card-header"> Registrar Actividad de Extensión</h4>
            <div class="card-body">
                <div class="container">
                    <form>
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="exampleFormControlInput1">Título de Actividad</label>
                                <input class="form-control" id="exampleFormControlInput1"
                                       placeholder="Ejemplo: Actividad Extensión">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="exampleFormControlInput1">Nombre Expositor o Relator</label>
                                <input class="form-control" id="exampleFormControlInput1"
                                       placeholder="Ejemplo: Juan Pérez">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Fecha Actividad</label>
                                <input type="Fecha" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Ejemplo: 31/12/2000">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="exampleFormControlInput1">Lugar Actividad</label>
                                <input class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: K">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="exampleFormControlInput1">Cantidad Asistentes</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected>Elija una opción</option>
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

                                <label for="exampleFormControlInput1">Organizador Actividad</label>
                                <input class="form-control" id="exampleFormControlInput1"
                                       placeholder="Ejemplo: Nombre Empresa">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Evidencia: Archivo (.pdf, .jpg, .png) Lista
                                    Asistencia Actividad</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Adjuntar Fotografias Actividad</label>
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

