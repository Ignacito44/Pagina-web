
<div class="col-12 bg-light p-3">
                <form action="envios.php" method="POST">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating mb-3 ">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                                <label for="nombre" class="form-label">Ingrese su Nombre</label>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-floating mb-3 ">
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
                                <label for="apellido" class="form-label">Ingrese su apellido</label>
                            </div>
                        </div>

                    </div>
                    <div class="row g-2">


                    <div class="col-md-4 col-lg ">
                            <div class="form-floating  mb-3">
                                <input type="number" class="form-control" id="tel" name="tel" placeholder="Ingrese su Telefono" required>
                                <label for="number" class="form-label">Ingrese su Telefono</label>
                            </div>
                        </div>


                    <div class="row g-2">


                        <div class="col-md-4 col-lg ">
                            <div class="form-floating  mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su email" required>
                                <label for="email" class="form-label">Ingrese su email</label>
                            </div>
                        </div>
                        
                         <div class="mb-3">

                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea id="mensaje" class="form-control" name="mensaje" placeholder="Escriba su mensaje aqui" maxlength="200"></textarea>

                    </div>
                        <input type="submit" value="Enviar" />

</form>