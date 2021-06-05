<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

    <link rel="stylesheet" href="dist/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div id="app">
    <h2 class="title">Seleziona album:</h2>
        <select name="genre" id="genre" v-model="input" @change="fetchData()" class="wrapper_select" >
            <option value="">All</option>
            <option v-for="genre in filteredForGenre" :value="genre">
                {{genre}}
            </option>

        </select>


        <div class="discs_wrapper">
            <div class="discs" v-for="disco in listaDischi">
                <img :src="disco.poster" alt="card">
                <h5>{{disco.title}}</h5>
                <p>{{disco.author}}</p>
                <p>{{disco.genre}}</p>
                <p>{{disco.year}}</p>
            </div>
        </div>
    </div>

    <script src="script/main.js"></script>
</body>

</html>