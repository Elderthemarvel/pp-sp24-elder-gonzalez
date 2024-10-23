<?= $this->extend('template') ?>
<?= $this->section('contenido') ?>
<section style="width: 100%; height: 40vh; overflow: hidden;" class="my-3">
            <img src="./img/image-bg-2.jpg" width="100%" height="100%" alt="">
        </section>
        <section class="mb-3">
            <h6 class="display-6 text-primary">Framework</h6>
            <p>
                Un framework es un conjunto de herramientas, bibliotecas y buenas prácticas que facilita el desarrollo
                de software, al proporcionar una estructura predefinida sobre la cual los desarrolladores pueden
                construir sus aplicaciones. Utilizando un framework, los desarrolladores pueden ahorrar tiempo al no
                tener que escribir código básico desde cero y seguir convenciones que favorecen la organización y
                mantenibilidad del código.
            </p>
        </section>
        <section class="row g-3">
            <article class="col-lg-6">
                <img src="./img/image-16.webp" class="img-fluid" alt="">
                <h6 class="display-6 text-primary mt-2">Ventajas</h6>
                <ul>
                    <li>
                        Ahorro de tiempo: Los frameworks proporcionan estructuras y componentes reutilizables que pueden
                        acelerar el desarrollo
                        al evitar escribir código desde cero.
                    </li>
                    <li>
                        Buenas prácticas integradas: Los frameworks suelen estar diseñados para seguir buenas prácticas
                        de desarrollo, como el
                        uso del patrón MVC (Modelo-Vista-Controlador) en el caso de frameworks web como Laravel o
                        Django.
                    </li>
                    <li>
                        Facilita el mantenimiento: Al tener una estructura definida y un código más organizado, el
                        mantenimiento y la
                        escalabilidad del proyecto suelen ser más sencillos.
                    </li>
                    <li>
                        Seguridad: Muchos frameworks incluyen medidas de seguridad integradas, como protección contra
                        ataques de inyección SQL o
                        CSRF (Cross-Site Request Forgery), lo que reduce la necesidad de implementar estas
                        características manualmente.
                    </li>
                    <li>
                        Comunidad y soporte: Los frameworks populares suelen tener grandes comunidades de
                        desarrolladores, lo que proporciona
                        abundante documentación, tutoriales y soporte técnico en foros o redes.
                    </li>
                    <li>
                        Modularidad: Suelen permitir la integración de módulos o plugins para agregar nuevas
                        funcionalidades sin tener que
                        modificar la base del framework, lo que facilita la extensión del proyecto.
                    </li>
                </ul>
            </article>
            <article class="col-lg-6">
                <img src="./img/image-17.webp" class="img-fluid" alt="">
                <h6 class="display-6 text-primary mt-2">Desventajas</h6>
                <ul>
                    <li>
                        Curva de aprendizaje: Algunos frameworks tienen una curva de aprendizaje pronunciada,
                        especialmente si tienen muchas
                        características o siguen patrones complejos de arquitectura.
                    </li>
                    <li>
                        Sobrecarga de funciones: Algunos frameworks están llenos de características que podrías no
                        necesitar, lo que puede
                        resultar en un código más pesado y mayor consumo de recursos.
                    </li>
                    <li>
                        Menor control: Debido a que el framework impone una estructura y métodos específicos, puede
                        limitar la libertad de los
                        desarrolladores para implementar soluciones personalizadas o optimizadas.
                    </li>
                    <li>
                        Actualizaciones y dependencias: Mantenerse al día con las versiones actualizadas del framework
                        puede ser un desafío. Las
                        nuevas versiones pueden romper compatibilidad con versiones anteriores o requerir cambios
                        significativos en el código.
                    </li>
                    <li>
                        Dependencia: Al elegir un framework, te haces dependiente de su ecosistema. Si el framework
                        pierde soporte o queda
                        obsoleto, podrías enfrentarte a la necesidad de migrar todo el proyecto a una nueva tecnología.
                    </li>
                </ul>
            </article>
        </section>
        <section class="row g-3">
            <div class="col-12">
                <h6 class="display-6 text-primary">
                    Frameworks frontend más usados
                </h6>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="./img/image-18.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">React</h5>
                                <p class="card-text">
                                    Desarrollada por Facebook, React es una librería que muchos consideran un framework
                                    por su amplia funcionalidad y
                                    ecosistema. Se basa en componentes reutilizables y permite la creación de interfaces
                                    de usuario interactivas y
                                    eficientes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="./img/image-19.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Vue</h5>
                                <p class="card-text">
                                    Vue es un framework progresivo que se centra en la capa de la vista, permitiendo
                                    agregar componentes de forma modular o
                                    utilizarlo como un framework completo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="./img/image-20.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Angular</h5>
                                <p class="card-text">
                                    Desarrollado por Google, Angular es un framework robusto basado en TypeScript que
                                    ofrece una solución completa para la
                                    creación de aplicaciones web dinámicas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="./img/image-21.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Svelte</h5>
                                <p class="card-text">
                                    Svelte es un framework que compila el código en JavaScript puro durante la etapa de
                                    construcción, eliminando la
                                    necesidad de un DOM virtual o actualizaciones dinámicas en el cliente.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row g-3 my-3">
            <div class="col-12">
                <h6 class="display-6 text-primary">
                    Frameworks frontend más usados
                </h6>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="./img/image-22.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Express.js (Node.js)</h5>
                                <p class="card-text">
                                    Es uno de los frameworks backend más populares para Node.js, conocido por su
                                    simplicidad y flexibilidad. Se utiliza
                                    principalmente para crear aplicaciones web y APIs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="./img/image-23.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Django (Python)</h5>
                                <p class="card-text">
                                    Framework web de alto nivel basado en Python que fomenta el desarrollo rápido y
                                    limpio. Django sigue el principio de
                                    "Convención sobre configuración" y el patrón MTV (Modelo-Plantilla-Vista).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="./img/image-24.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Laravel (PHP)</h5>
                                <p class="card-text">
                                    Laravel es uno de los frameworks más populares para PHP. Es conocido por su sintaxis
                                    elegante y herramientas avanzadas
                                    para manejar tareas comunes del backend.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="./img/image-25.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Ruby on Rails (Ruby)</h5>
                                <p class="card-text">
                                    Ruby on Rails es un framework para el desarrollo rápido de aplicaciones web con el
                                    lenguaje Ruby. Está diseñado para
                                    fomentar la productividad y sigue el principio de "Convención sobre configuración".
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?= $this->endSection() ?>