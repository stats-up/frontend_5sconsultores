<div>
    <div wire:ignore.self class="modal fade modal-xl" id="verperfilModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:100%">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perfil del postulante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                @if($applicant != null)
                    <div class="modal-body row" style="d-flex col">
                        <div class="col-xl-6">
                            <div class="mb-2">
                                <div class="d-flex align-items-center px-2 namecli">{{$applicant["nombre_completo"]}}</div>
                            </div>
                            <div class="mb-2 ">
                                <label for="message-text" class=" fw-bold">Rut:</label>
                                <div class="d-flex align-items-center px-2">{{$applicant["rut"]}}</div>
                            </div>
                            <div class="mb-2 ">
                                <label for="message-text" class=" fw-bold"></i> Sexo:</label>
                                <div class="d-flex align-items-center px-2">{{$applicant["genero"]}}</div>
                            </div>
                            <div class="mb-2 ">
                                <label for="message-text" class=" fw-bold">Ciudad de residencia:</label>
                                <div class="d-flex align-items-center px-2">{{$applicant["ciudad"]}}</div>
                            </div>
                            <div class="mb-2 ">
                                <label for="message-text" class=" fw-bold"></i>Dirección:</label>
                                <div class="d-flex align-items-center px-2"> {{$applicant["direccion"]}}</div>
                            </div>
                            <div class="mb-2">
                                <label for="message-text" class="col-auto fw-bold">Descripción del perfil:</label>
                                <div class="d-flex align-items-center px-2" style="text-align: justify;text-justify: inter-word;">
                                    {{$applicant["descripcion"]}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 py-4">
                            @if(false)
                                <button onclick="openCv()" id="btn-cv" style="display:none" class="btn btn-primary">Ver PDF</button>
                                <button onclick="openVp()" id="btn-vp" class="btn btn-primary">Ver video de presentación</button>
                                <div class="text-center py-2" id="vp" style="display:none">
                                    @if($applicant["youtube_url"] != "")
                                        <iframe width="500" height="300" src="https://www.youtube.com/embed/{{substr($applicant["youtube_url"],16)}}" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                                    @else
                                        <h3 class="text-center">SIN VIDEO</h3>
                                    @endif
                                </div>
                            @endif
                            <div class="py-2"  id="cv">
                                @if($applicant["pdf_base_64"] != "")
                                    <iframe src="data:application/pdf;base64,{{$applicant["pdf_base_64"]}}" frameborder="0"  width="500px" height="500px"></iframe>
                                @else
                                    <h3 class="text-center">SIN PDF</h3>
                                @endif
                            </div> 
                        </div>
                        
                    </div>
                @endif
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Solicitar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openCv(){
            let cv = document.getElementById('cv');
            let vp = document.getElementById('vp');
            let btnCv = document.getElementById('btn-cv');
            let btnVp = document.getElementById('btn-vp');
            cv.style.display = 'block';
            vp.style.display = 'none';
            btnCv.style.display = 'none';
            btnVp.style.display = 'block';
        }
        function openVp(){
            let vp = document.getElementById('vp');
            let cv = document.getElementById('cv');
            let btnCv = document.getElementById('btn-cv');
            let btnVp = document.getElementById('btn-vp');
            vp.style.display = 'block';
            cv.style.display = 'none';
            btnCv.style.display = 'block';
            btnVp.style.display = 'none';
        }
        function closeVp(){
            let vp = document.getElementById('vp');
            let cv = document.getElementById('cv');
            let btnVp = document.getElementById('btn-vp');
            let btnCv = document.getElementById('btn-cv');
            cv.style.display = 'block';
            vp.style.display = 'none';
            btnVp.style.display = 'block';
            btnCv.style.display = 'none';
        }
        function closeCv(){
            let cv = document.getElementById('cv');
            let vp = document.getElementById('vp');
            let btnCv = document.getElementById('btn-cv');
            let btnVp = document.getElementById('btn-vp');
            vp.style.display = 'block';	
            cv.style.display = 'none';
            btnCv.style.display = 'block';
            btnVp.style.display = 'none';
        }
    </script>

</div>

