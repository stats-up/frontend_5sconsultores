<div>
    <div wire:ignore.self class="modal fade modal-xl" id="verperfilModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:100%">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perfil del postulante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row" style="d-flex col">
                    <div class="col-xl-6">
                        <div class="mb-2">
                            <div class="d-flex align-items-center px-2 namecli">Nombre Completo Nombre Completo</div>
                        </div>
                        <div class="mb-2 ">
                            <label for="message-text" class=" fw-bold">Rut:</label>
                            <div class="d-flex align-items-center px-2">19.876.543-2</div>
                        </div>
                        <div class="mb-2 ">
                            <label for="message-text" class=" fw-bold"></i> Sexo:</label>
                            <div class="d-flex align-items-center px-2">Femenino</div>
                        </div>
                        <div class="mb-2 ">
                            <label for="message-text" class=" fw-bold">Ciudad de residencia:</label>
                            <div class="d-flex align-items-center px-2">Santiago</div>
                        </div>
                        <div class="mb-2 ">
                            <label for="message-text" class=" fw-bold"></i>Dirección:</label>
                            <div class="d-flex align-items-center px-2"> Calle Leonardo da Vinci, 7, 41092.</div>
                        </div>
                        <div class="mb-2">
                            <label for="message-text" class="col-auto fw-bold">Descripción del perfil:</label>
                            <div class="d-flex align-items-center px-2" style="text-align: justify;text-justify: inter-word;">El Ingeniero en Minas posee conocimientos en las áreas de exploración y explotación, supervisión de
                                procesos asociadas al desarrollo de cada etapa involucrada en el ciclo minero, como también en la
                                planificación, administración y gestión de proyectos mineros. Su formación en materias relativas a
                                Ciencias de la Tierra como base para la operación minero metalúrgica en faenas ya sea subterránea o
                                de cielo abierto complementan el desarrollo de habilidades y destrezas para el quehacer profesional
                                que lo capacitan para gestión proyectos mineros en las etapas de prospección, arranque, carguío,
                                transporte y procesamiento de minerales.</div>
                        </div>
                    </div>
                    <div class="col-xl-6 py-4">
                        <button onclick="openCv()" id="btn-cv" style="display:none" class="btn btn-secondary">Ver curriculum vitae</button>
                        <button onclick="openVp()" id="btn-vp" class="btn btn-secondary">Ver video de presentación</button>
                        <div class="text-center py-2" id="vp" style="display:none">
                            <iframe width="500" height="300" src="https://www.youtube.com/embed/ThiCMd5kGbE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="py-2"  id="cv">
                            <iframe src="https://www.uv.mx/dgdaie/files/2012/11/CPP-DC-Angulo-Rasco-A-que-llamamos-curriculum.pdf" frameborder="0"  width="500px" height="500px"></iframe>
                        </div> 
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
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
