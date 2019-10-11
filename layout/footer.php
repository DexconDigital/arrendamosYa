<i class="fas fa-angle-double-up subir"></i>
<hr style=" width:100%">

<section id="footer_copy">
    <div class="container ">
        <div class="row">
            <p>Copyright © 2019 <a target="_blank" href="https://www.dexcondigital.com">Dexcon Digital.</a> Todos los derechos reservados.</p>
            <p class="politicas"><a href="Politica_de_tratamiento_de_datos_e_informacio_privilegiada.pdf" download="Politica de tratamiento de infromación.pdf">Política de tratamiento de datos</a></p>
        </div>
    </div>
</section>

<section>
    <div class="modal fade show" id="consigna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Consignar Inmueble</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="modal-body">
                            <form action="email/consignainmueble.php" class="row" method="post">
                                <div class="form-group col-12">
                                    <input type="text" placeholder="Nombre" name="nombre" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="mail" placeholder="Correo" name="email" class="form-control" required="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="Telefono" placeholder="Teléfono" name="telefono" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <select class="form-control select_color" name="transaccion" requiered="">
                                        <option selected="" disabled="">Tipo de Transacción</option>
                                        <option value="arriendo">Arriendo</option>
                                        <option value="arriendo/venta">Arriendo/venta</option>
                                        <option value="venta">Venta</option>
                                        <option value="avaluos">Avalúos</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <select class="form-control select_color" id="tipo_inm" name="tipo_inm" requiered="">
                                        <option selected="" disabled="">Tipo de Inmueble</option>
                                        <option value="Apartamento">Apartamento</option>
                                        <option value="Casa">Casa</option>
                                        <option value="Consultorio">Consultorio</option>
                                        <option value="Oficina">Oficina</option>
                                        <option value="Local">Local</option>
                                        <option value="Bodega">Bodega</option>
                                        <option value="Lote">Lote</option>
                                        <option value="Finca">Finca</option>
                                        <option value="Parqueadero">Parqueadero</option>
                                        <option value="Edificio">Edificio</option>
                                        <option value="Apartaestudio">Apartaestudio</option>
                                        <option value="Hotel">Hotel</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <input type="number" placeholder="Valor" name="valor" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="number" placeholder="Área" name="area" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" placeholder="Dirección" name="direccion" class="form-control" requiered="">
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="mensaje" placeholder="Mensajes" class="form-control" id="mensaje" rows="6" requiered=""></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <div class="form-check custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="ejemplo">
                                        <input type="checkbox" class="form-check-input" id="ejemplo" requiered="">
                                       <label class="custom-control-label" for="ejemplo">Confimo que he leído, entendido y acepto la<a class="color_poltica" href="Politica_de_tratamiento_de_datos_e_informacio_privilegiada.pdf" download="Politica de tratamiento de infromación.pdf"> <strong>política de tratamiento de datos personales.</strong></a></label>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-primary btn-sm btn-block color_azul">Enviar</button>
                                </div>
                            </form>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn color_gris" data-dismiss="modal">Cancelar</button>

                </div>
            </div>
        </div>
    </div>
</section>