<template>
    <div class="container">
        <div class="titulo">
            <h1>Registro de estudiantes</h1>
        </div>
        <form @submit.prevent="register">
            <div class="form-group">
                <label>Identificación: </label>
                <input type="text" v-model="identification" class="form-control">
            </div>
            <div class="form-group">
                <label>Tipo de identificacion: </label>
                <select v-model="identification_type" class="form-select" aria-label="Default select example">
                    <option selected value="">Seleccione una opción</option>
                    <option v-for="(doc, index) in tipo_documento" :key="index" :value="doc">{{ doc }}</option>
                </select>
            </div>
            <div class="form-group">
                <label>Primer Apellido: </label>
                <input type="text" v-model="primerApellido" class="form-control">
            </div>
            <div class="form-group">
                <label>Segundo Apellido: </label>
                <input type="text" v-model="segundoApellido" class="form-control">
            </div>
            <div class="form-group">
                <label>Primer Nombre: </label>
                <input type="text" v-model="primerNombre" class="form-control">
            </div>
            <div class="form-group">
                <label>Segundo Nombre: </label>
                <input type="text" v-model="segundoNombre" class="form-control">
            </div>
            <div class="form-group">
                <label>Género: </label>
                <select v-model="genre" class="form-select" aria-label="Default select example">
                    <option selected value="">Seleccione una opción</option>
                    <option v-for="(genero, index) in list_genre" :key="index" :value="genero">{{ genero }}</option>
                </select>
            </div>
            <div class="form-group">
                <label>Etnia: </label>
                <select v-model="etnia" class="form-select" aria-label="Default select example">
                    <option selected value="">Seleccione una opción</option>
                    <option v-for="(etnia, index) in list_etnia" :key="index" :value="etnia">{{ etnia }}</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fecha Nacimiento: </label>
                <input type="date" v-model="birthday" class="form-control">
            </div>
            <div class="form-group">
                <label>País: </label>
                <select v-model="country" class="form-select" aria-label="Default select example">
                    <option selected value="">Seleccione una opción</option>
                    <option v-for="(pais, index) in countries" :key="index" :value="pais">{{ pais }}</option>
                </select>
            </div>
            <div class="form-group">
                <label>Provincia: </label>
                <input type="text" v-model="province" class="form-control">
            </div>
            <div class="form-group">
                <label>Canton: </label>
                <input type="text" v-model="canton" class="form-control">
            </div>
            <div class="form-group">
                <label>Fecha Inicio Estudios: </label>
                <input type="date" v-model="date_start_studies" class="form-control">
            </div>
            <div class="form-group">
                <label>Fecha Graduación: </label>
                <input type="date" v-model="date_graduation" class="form-control">
            </div>
            <div class="form-group">
                <label>Mecanismo titulación: </label>
                <select v-model="mechanism" class="form-select" aria-label="Default select example">
                    <option selected value="">Seleccione una opción</option>
                    <option v-for="(tit, index) in list_titulacion" :key="index" :value="tit">{{ tit }}</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nota Promedio: </label>
                <input type="numeric" v-model="note_average" class="form-control">
            </div>
            <div class="form-group">
                <label>Carrera: </label>
                <select v-model="carrera" class="form-select" aria-label="Default select example">
                    <option selected value="">Seleccione una opción</option>
                    <option v-for="(carrer, index) in carreras" :key="index" :value="carrer.name">{{ carrer.name }}</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nota Ingles: </label>
                <input type="numeric" v-model="note_english" class="form-control">
            </div>
            <div class="form-group">
                <label>Prácticas: </label>
                <input type="number" v-model="practices_hours" class="form-control">
            </div>
            <div class="form-group">
                <label>Vinculación: </label>
                <input type="number" v-model="vinculation_hours" class="form-control">
            </div>
            <div class="buton-form">
                <button>Registrar</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default{
        mounted() {
            this.listCarrers()
        },
        data() {
            return {
                identification: '',
                identification_type: '',
                primerApellido: '',
                segundoApellido: '',
                primerNombre: '',
                segundoNombre: '',
                genre: '',
                etnia: '',
                birthday: '',
                country: '',
                province: '',
                canton: '',
                date_start_studies: '',
                date_graduation: '',
                mechanism: '',
                note_average: '',
                carrera: '',
                note_english: '',
                practices_hours: '',
                vinculation_hours: '',
                countries: [
                    'Estados Unidos',
                    'Canadá',
                    'México',
                    'Argentina',
                    'Brasil',
                    'España',
                ],
                tipo_documento: [
                    'cedula',
                    'pasaporte'
                ],
                list_genre: [
                    'masculino',
                    'femenino'
                ],
                list_etnia: [
                    'Awa',
                    'Cañaris',
                    'Caranqui',
                    'Cayambis',
                    'Cayapas',
                    'Chachis',
                    'Cofán',
                    'Eperas',
                    'Encarnacionillos',
                    'Esmeraldas',
                    'Hambatus',
                    'Huancavilcas',
                    'Huaorani',
                    'Imbaburrios',
                    'Imbayas',
                    'Joma Coaque',
                    'Tolita',
                    'Vegas',
                    'Machalilla',
                    'Mantas',
                    'Minchaleños',
                    'Napo',
                    'Otavalos',
                    'Paltas',
                    'Panzaleos',
                    'Pastos',
                    'Puruhá',
                    'Quillacingas',
                    'Quitus',
                    'Quechuas Andes',
                    'Quechuas Amazónicos',
                    'Salasacas',
                    'Saraguros',
                    'Siona-Secoya',
                    'Shiriou',
                    'Shiwiar',
                    'Shuar',
                    'Tacalshapa',
                    'Tagaeri',
                    'Taro-menami',
                    'Tetete',
                    'Tsáchilas',
                    'Valdivia',
                    'Yungas',
                    'Záparo',
                ],
                list_titulacion: [
                    'Tesis',
                    'Examen'
                ],
                errors: [],
                carreras: []
            }
        },
        methods: {
            async register(){
                try {
                    const res = await fetch('/api/register', {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            identification: this.identification,
                            identification_type: this.identification_type,
                            primerApellido: this.primerApellido,
                            segundoApellido: this.segundoApellido,
                            primerNombre: this.primerNombre,
                            segundoNombre: this.segundoNombre,
                            genre: this.genre,
                            etnia: this.etnia,
                            birthday: this.birthday,
                            country: this.country,
                            province: this.province,
                            canton: this.canton,
                            date_start_studies: this.date_start_studies,
                            date_graduation: this.date_graduation,
                            mechanism: this.mechanism,
                            note_average: this.note_average,
                            carrera: this.carrera,
                            note_english: this.note_english,
                            practices_hours: this.practices_hours,
                            vinculation_hours: this.vinculation_hours
                        })
                    })

                    const response = await res.json();

                    if ('error' in response) {
                        console.log(response.error);
                    }
                    else{
                        console.log(response.status);
                    }
                } catch (error) {
                    console.log(error);
                }
            },
            async listCarrers() {
                try {
                    const res = await fetch('/api/carrers', {
                        method: 'GET',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify()
                    })

                    const response = await res.json();

                    this.carreras = response.data;
                } catch (error) {
                    
                }
            }
        },
    }
</script>

<style scoped>
    .form-group {
        width: 100%;
        display: flex;
        flex-direction: column;
    }
</style>